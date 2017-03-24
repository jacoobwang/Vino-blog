<?php

namespace Vino;


class Db {

    const PARAM_PREFIX = ':fld';
    private $conn = null;
    private $fetch_style = \PDO::FETCH_ASSOC;
    private $_error = array();
    private $_last_sql = array();
    private static $db_connections = array();

    function __construct($dsn, $user, $password) 
    {
        try {
            $this->conn = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            throw new Exception('DB error: ' . $e->getMessage());
        }
        $this->setCharset();
    }

    /**
     * @static
     * @param string $key
     * @return Db
     * @throws Exception
     */
    public static function getConnection($key = 'm') 
    {
        if (array_key_exists($key, self::$db_connections)) {
            return self::$db_connections[$key];
        }

        $di = App::getSingleton()->di('config');
        $config = $di->get('db/' . $key);
        if ($config == null) {
            throw new Exception('Database config error');
        }


        $conn = new Db($config['dsn'], $config['username'], $config['password']);
        self::$db_connections[$key] = $conn;
        return $conn;
    }

    /**
     * @param string $val
     * @return string
     */
    public static function mysqlQuote($val) 
    {
        if (strpos($val, '.') !== FALSE) {
            return $val;
        }
        return "`$val`";
    }

    /**
     * @param string $str
     * @return string
     */
    public static function escapeSearch($str) 
    {
        return strtr($str, array('%' => '\%', '_' => '\_', '\\' => '\\\\'));
    }

    /**
     * @return array
     */
    public function getError() 
    {
        return $this->_error;
    }

    /**
     * throw errors
     *
     * @param array $err_info
     * @param integer $line
     * @throws \Exception
     */
    private function dbError($err_info, $line) 
    {
        if (defined('Vino_DEBUG') && Vino_DEBUG) {
            print_r(debug_backtrace());
            throw new Exception('DB error: ' . var_export($this->_last_sql, true) . '|' . implode('|', $err_info) . ' Line: ' . $line);
        }
    }

    /**
     * get last sql
     *
     * @return array
     */
    public function getLastSql() 
    {
        return $this->_last_sql;
    }

    /**
     * set last sql
     *
     * @param string $sql
     * @param array
     */
    private function setLastSql($sql, $bind_data = array()) 
    {
        $this->_last_sql = array($sql, $bind_data);
    }

    /**
     * set chraset
     *
     * @param string $charset
     */
    public function setCharset($charset = 'utf8mb4') 
    {
        $this->execute("SET NAMES '{$charset}';");
    }

    /**
     * execute sql ddl with insert update delete
     *
     * @param QSelect|string $sql
     * @param array $params
     * @return integer affected rows
     * @throws \Exception
     */
    public function execute($sql, $params = null) 
    {
        if ($sql instanceof QSelect) {
            $sql2 = $sql->toSql();
            $params = $sql->getParamList();
            $sql = $sql2;
        }
        if ($params == null) {
            $this->setLastSql($sql);
            $rows = $this->conn->exec($sql);
            if ($rows === false) {
                $this->dbError($this->conn->errorInfo(), __LINE__);
            }
        } else {
            $this->setLastSql($sql, $params);
            $cmd = $this->conn->prepare($sql);
            if ($cmd === false) {
                $this->dbError($this->conn->errorInfo(), __LINE__);
            }
            $cmd->execute($params);
            if ($cmd->errorCode() != '000') {
                $this->dbError($cmd->errorInfo(), __LINE__);
            }
            $rows = $cmd->rowCount();
            $cmd->closeCursor();
        }
        return $rows;
    }

    /**
     * execute sql ddl with select
     *
     * @param QSelect|string $sql
     * @param array $params
     * @return \PDOStatement
     * @throws \Exception
     */
    private function _query($sql, $params = null) 
    {
        if ($sql instanceof QSelect) {
            $sql2 = $sql->toSql();
            $params = $sql->getParamList();
            $sql = $sql2;
        }

        if ($params == null) {
            $this->setLastSql($sql);
            $cmd = $this->conn->query($sql);
            if ($cmd === false) {
                $this->dbError($this->conn->errorInfo(), __LINE__);
            }
            $cmd->execute();
        } else {
            $this->setLastSql($sql, $params);
            $cmd = $this->conn->prepare($sql);
            if ($cmd === false) {
                $this->dbError($this->conn->errorInfo(), __LINE__);
            }
            $cmd->execute($params);
        }
        if ($cmd->errorCode() != '000') {
            $this->dbError($cmd->errorInfo(), __LINE__);
        }
        return $cmd;
    }

    /**
     * get one row
     *
     * @param QSelect|string $sql
     * @param null $params
     * @return mixed|null
     */
    public function fetchRow($sql, $params = null) 
    {
        if ($sql instanceof QSelect) {
            $sql->limit(1);
        }
        $cmd = $this->_query($sql, $params);
        $r = $cmd->fetch($this->fetch_style);
        $cmd->closeCursor();
        return ($r === false) ? null : $r;
    }

    /**
     * get column by $col
     *
     * @param QSelect|string $sql
     * @param array|null $params
     * @param integer $col
     * @return array|null
     */
    public function fetchCol($sql, $params = null, $col = 0) 
    {
        $cmd = $this->_query($sql, $params);
        $result = $cmd->fetchAll(\PDO::FETCH_COLUMN, $col);
        $cmd->closeCursor();
        return empty($result) ? null : $result;
    }

    /**
     * get all
     *
     * @param $sql
     * @param array|null $params
     * @return array|null
     */
    public function fetchAll($sql, $params = null) 
    {
        $cmd = $this->_query($sql, $params);
        $result = $cmd->fetchAll($this->fetch_style);
        $cmd->closeCursor();
        return empty($result) ? null : $result;
    }

    /**
     * quoted string
     *
     * @param string $value
     * @return string a quoted string
     */
    public function quote($value) 
    {
        return $this->conn->quote($value);
    }

    /**
     * handle where part
     *
     * @param string $sql
     * @param array $params
     * @param QWhere $where
     * @return string
     */
    public function applyCondition($sql, &$params, $where) 
    {
        if ($where instanceof QWhere) {
            $where = $where->toSqlArray();
        }
        if (is_array($where)) {
            $condition = $where[0];
            unset($where[0]);
            if (!empty($where)) {
                $params = array_merge($params, $where);
            }
        } else {
            $condition = $where;
        }
        $sql = $sql . ' WHERE ' . $condition;
        return $sql;
    }


    /**
     * insert
     *
     * @param string $table
     * @param array $data array('uid'=>1, 'name'=>'red') | array(array('uid'=>1, 'name'=>'red'), array('uid'=>2, 'name'=>'black'))
     * @return integer affect rows
     */
    public function insert($table, $data) 
    {
        $table = self::mysqlQuote($table);
        $values = array();
        $placeholders = array();
        $i = 0;
        $dt = is_array(current($data)) ? $data : array($data);
        // 对键名进行排序
        $v = $dt[0];
        ksort($v);
        $fields = array_keys($v);
        foreach ($dt as $data) {
            ksort($data);
            $holders = array();
            foreach ($data as $v) {
                if ($v instanceof QExpr) {
                    $holders[] = $v->expression;
                    foreach ($v->params as $n => $v2)
                        $values[$n] = $v2;
                } else {
                    $holders[] = self::PARAM_PREFIX . $i;
                    $values[self::PARAM_PREFIX . $i] = $v;
                    $i++;
                }
            }
            $placeholders[] = implode(', ', $holders);
        }

        $sql = "INSERT INTO {$table} (`" . implode('`, `', $fields) . '`) VALUES (' . implode('), (', $placeholders) . ')';
        $ret = $this->execute($sql, $values);
        return $ret;
    }

    /**
     * update
     *
     * @param string $table array('id>:id and cid = :cid', ':id'=>5, ':cid'=> 10)
     * @param array $data
     * @param QWhere|string $where
     * @param integer $limit
     * @return integer
     */
    public function update($table, $data, $where = null, $limit = 0) 
    {
        $table = self::mysqlQuote($table);
        $fields = array();
        $values = array();
        $i = 0;
        foreach ($data as $k => $v) {
            if ($v instanceof QExpr) {
                $fields[] = "`$k`=" . $v->expression;
                foreach ($v->params as $n => $v2)
                    $values[$n] = $v2;
            } else {
                $fields[] = "`$k`=" . self::PARAM_PREFIX . $i;
                $values[self::PARAM_PREFIX . $i] = $v;
                $i++;
            }
        }

        $sql = "UPDATE {$table} SET " . implode(', ', $fields);
        if (!empty($where)) {
            $sql = $this->applyCondition($sql, $values, $where);
        }
        if (!empty($limit)) {
            $sql .= " LIMIT {$limit}";
        }
        $ret = $this->execute($sql, $values);
        return $ret;
    }

    /**
     * delete
     *
     * @param string $table
     * @param QWhere|string $where
     * @param integer $limit
     * @return integer
     */
    public function delete($table, $where, $limit = 0) 
    {
        $table = self::mysqlQuote($table);
        $sql = "DELETE FROM {$table} ";
        $values = array();
        $sql = $this->applyCondition($sql, $values, $where);
        if (!empty($limit)) {
            $sql .= " LIMIT {$limit}";
        }
        $ret = $this->execute($sql, $values);
        return $ret;
    }

    /**
     * The end of insert id or serizline value
     *
     * @return string
     */
    public function getInsertId() 
    {
        return $this->conn->lastInsertId();
    }

    /**
     * begin transaction
     *
     * @return boolean
     */
    public function beginTran() 
    {
        return $this->conn->beginTransaction();
    }

    /**
     * transaction commit
     *
     * @return boolean
     */
    public function commit() 
    {
        return $this->conn->commit();
    }

    /**
     * transaction rollback
     *
     * @return boolean
     */
    public function rollback() 
    {
        return $this->conn->rollBack();
    }


}
