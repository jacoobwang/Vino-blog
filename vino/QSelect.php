<?php
namespace Vino;


/**
 * Select Builder
 * Class QSelect
 * @package Vino
 */
class QSelect {
    private $_order_by_list = array();
    private $_limit;
    private $_table_name;
    private $_cols = array();
    private $_where = null;
    private $_group_by;
    private $_having;
    private $_params = array();
    private $_col_index = 0;

    /**
     * @return QSelect
     */
    public static function create() 
    {
        return new self();
    }

    /**
     * @return string
     */
    private function newHolder() 
    {
        return ':gfld' . $this->_col_index++;
    }

    /**
     * select column
     * format 'id,name,age' or array('id', 'name', 'age')
     * @return $this
     */
    public function select() 
    {
        foreach (func_get_args() as $v) {
            if (is_string($v)) {
                if (strpos($v, ',') !== false) {
                    $arr = explode(',', $v);
                    foreach ($arr as $v2) {
                        $this->addCol($v2);
                    }
                } else {
                    $this->addCol($v);
                }
            } else if (is_array($v)) {
                foreach ($v as $v2) {
                    $this->addCol($v2);
                }
            }
        }
        return $this;
    }

    /**
     * select all
     * @return $this
     */
    public function selectAll() 
    {
        $this->_cols[] = '*';
        return $this;
    }

    /**
     * @param string $col
     * @return string
     */
    private function addCol($col) 
    {
        $this->_cols[] = $col;
    }

    /**
     * from
     * @param string $table
     * @return $this
     */
    public function from($table) 
    {
        $this->_table_name = $table;
        return $this;
    }

    /**
     * where
     * @param string|array|QWhere $w
     * @return $this
     */
    public function where($w) 
    {
        $this->_where = $w;
        return $this;
    }

    /**
     * limit
     * @return $this
     */
    public function limit() 
    {
        $this->_limit = func_get_args();
        return $this;
    }

    /**
     * asc
     * @param string $col
     * @return $this
     */
    public function asc($col) 
    {
        $this->_order_by_list[] = Db::mysqlQuote($col) . ' ASC';
        return $this;
    }

    /**
     * desc
     * @param string $col
     * @return $this
     */
    public function desc($col) 
    {
        $this->_order_by_list[] = Db::mysqlQuote($col) . ' DESC';
        return $this;
    }

    /**
     * groupBy
     * @param string $col
     * @return $this
     */
    public function groupBy($col) 
    {
        $this->_group_by = $col;
        return $this;
    }

    /**
     * Having eg: ('score > ? and level > ?', 98, 2)
     * @param string $expr
     * @param integer|string $value
     * @return $this
     * @throws \Exception
     */
    public function having($expr, $value) 
    {
        $lines = array();
        $arr = explode('?', $expr);
        $args = func_get_args();
        array_shift($args);
        $lines[] = array_shift($arr);
        if (count($arr) !== count($args)) {
            throw new Exception('Having sql error');
        }
        $i = 0;
        while(!empty($arr)) {
            $h = $this->newHolder();
            $lines[] = $h;
            $lines[] = array_shift($arr);
            $this->_params[$h] = $args[$i++];
        }

        $this->_having = implode(' ', $lines);
        return $this;
    }

    /**
     * getParamList
     * @return array
     */
    public function getParamList() 
    {
        return $this->_params;
    }

    /**
     * build sql
     * @return string sql
     */
    public function toSql() 
    {
        $lines = array('SELECT');
        $lines[] = implode(',', $this->_cols);
        $lines[] = 'FROM';
        $lines[] = $this->_table_name;

        // Where
        if (!empty($this->_where)) {
            $lines[] = 'WHERE';
            if ($this->_where instanceof QWhere) {
                $this->_where = $this->_where->toSqlArray();
            }
            if (is_array($this->_where))  {
                $lines[] = $this->_where[0];
                unset($this->_where[0]);
                if (!empty($this->_where)) {
                    $this->_params = array_merge($this->_params, $this->_where);
                }
            } else {
                $lines[] = $this->_where;
            }
        }

        // Group by
        if (!empty($this->_group_by)) {
            $lines[] = 'GROUP BY ' . $this->_group_by;
        }

        // Having
        if (!empty($this->_having)) {
            $lines[] = 'HAVING';
            $lines[] = $this->_having;
        }

        // Order by
        if (!empty($this->_order_by_list)) {
            $lines[] = 'ORDER BY';
            $lines[] = implode(',', $this->_order_by_list);
        }

        // Limit
        if (!empty($this->_limit)) {
            $lines[] = 'LIMIT';
            $lines[] = implode(', ', $this->_limit);
        }

        return implode(' ', $lines);
    }
}
