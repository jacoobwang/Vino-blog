<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 2015/7/13
 * Time: 15:42
 */

namespace Mphp;

/**
 * Class BaseFormValidate
 * @package Mphp
 */
class Validator
{
    //预定义规则 添加新的预定义规则只需要把规则名添加到$_preRules,然后定义baseRule方法
    private $_preRules = ['required',
                          'minLen','maxLen','betweenLen',
                          'min','max','between',
                          'email','mobile',
                          'same','reg',];
    //实际需要校验规则
    private $_rules = [];
    //校验结果
    private $_result = true;
    //校验结果信息
    private $_msg = [];
    //待校验的数据
    private $_data = [];

    public static function create(){
        return new self();
    }

    public function make($data, $rules){
        $this->_data = $data;
        foreach ($rules as $key => $rule) {
            if(!isset($this->_rules[$key])) {
                $this->_rules[$key] = [];
            }
            if($pos = strpos($rule[0], '|') !== false){
                $ops  = explode('|', $rule[0]);
                $_rule = array_shift($ops);
            }else{
                $_rule = $rule[0];
            }
            if(in_array($_rule,$this->_preRules)) {
                $prefix = 'base';
            }
            $this->_rules[$key][] = ['key'=>$key, 'rule'=>$prefix.ucfirst($_rule), 'msg'=>$rule[1], 'ops'=>$ops];
            $ops = null;
        }
        return $this;
    }

    /**
     * require校验,填充校验结果
     * @param $field
     * @return boolean
     */
    protected function baseRequired($field, $ops) {
        if (empty($ops)) {
            if(is_string($this->_data[$field]) && strlen($this->_data[$field])>0) {
                $result = true;
            } elseif(is_array($this->_data[$field]) && !empty($this->_data[$field])) {
                $result = true;
            } else {
                $result = false;
            }
        } else {
            foreach ($ops as $value) {
                if($pos = strpos($value, ':')){
                    $rule = substr($value, 0, $pos);
                    $r_limit = substr($value, $pos+1);
                    $func = 'base'.ucfirst($rule);
                    $result = $this->$func($field, $r_limit);
                }
            }
        }
        return $result;
    }

    /**
     * minlen校验
     * @param $field
     * @param $ops
     * @return boolean
     */
    protected function baseMin($field, $ops) {
        $len = $ops;
        return mb_strlen($this->_data[$field]) >= $len;
    }

    /**
     * maxlen校验
     * @param $field
     * @param $ops
     * @return boolean
     */
    protected function baseMax($field, $ops) {
        $len = $ops;
        return mb_strlen($this->_data[$field]) <= $len;
    }

    /**
     * 在某个范围内
     * @param $field
     * @param $ops
     * @return boolean
     */
    protected function baseBetweenLen($field, $ops) {
        $minLen = $ops[0];
        $maxLen = $ops[1];
        $len = mb_strlen($this->_data[$field]);
        return $len>=$minLen && $len<=$maxLen;
    }

    protected function baseBetween($field, $ops) {
        $min = $ops[0];
        $max = $ops[1];
        return is_numeric($this->_data[$field]) && $this->_data[$field]>=$min && $this->_data[$field]<=$max;
    }

    protected function baseEmail($field) {
        return filter_var($this->_data[$field],FILTER_VALIDATE_EMAIL) !== false;
    }

    protected function baseMobile($field) {
        $mobile_pattern = '/^1[34578]\d{9}$/';
        return preg_match($mobile_pattern,$this->_data[$field]);
    }

    protected function baseSame($field, $ops) {
        $field2 = $ops;
        return isset($this->_data[$field2]) && $this->_data[$field] === $this->_data[$field2];
    }

    protected function baseReg($field, $ops) {
        $pattern = $ops;
        return preg_match($pattern, $this->_data[$field]);
    }

    /**
     * 循环校验$this->_rules,某一个field校验失败后,纪录msg,更新$this->_result,然后校验下一个field
     * @param $data (Input数据)
     * @return boolean ($this->_result)
     */
    private function check() {
        foreach ($this->_rules as $field=>$rules) {
            foreach($rules as $rule) {
                $func = $rule['rule'];
                $msg = $rule['msg'];
                $ops = $rule['ops'];             
            
                $checkResult = $this->$func($field,$ops);
        
                $this->_result = $this->_result && $checkResult;
                if(!$checkResult) {
                    $this->_msg[$field] = $msg;
                    break;
                }
            }
        }

        return $this->_result;
    }

    /**
     * if fails
     * @return boolean 
    **/ 
    public function fails() {
        return $this->check() === false;
    }

    /**
     * 返回全部出错信息或根据field查询对应出错信息
     * @return array|string
     */
    public function message() {
        $argNum = func_num_args();
        if($argNum==1) {
            $field = func_get_arg(0);
            if(isset($this->_msg[$field])) {
                return $this->_msg[$field];
            } else {
                return '';
            }
        } else {
            return $this->_msg;
        }
    }

}
