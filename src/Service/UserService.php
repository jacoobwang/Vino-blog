<?php
/**
 * Created by PhpStorm..
 * User: jacoob
 * Date: 1/1/17
 * Time: 9:21 PM
 */

namespace Ecc\Topic\Service;

use Ecc\Topic\Model\UserModel;

/**
 * UserService is a class that handle user function collection,it's support functions use mysql
 *
 * Class UserService
 * @package Ecc\Topic\Service
 */
class UserService
{
	
	private $instance;

    private $error;

	public function __construct(){
		$this->instance = new UserModel();
	}

    /**
     * check user + password is match
     *
     * @param string $user
     * @param string $pwd
     * @return boolean
     */
	public function findUser($user, $pwd){
		$ret = $this->instance->getOne('user_login', $user);

		if ($ret) {
			$password = $ret['user_pass'];
            if( md5($pwd) !== $password ){
                $this->error = 'password wrong';
                return false;
            }
			return true;
		}
        $this->error = 'undefined error';
		return false;
	}

	/**
	 * check user is exists
     *
     * @param string $user
     * @return boolean
     */
	public function validateUsername($user){
		return $this->instance->isNicknameExists($user);
	}

    /**
     * reg user
     *
     * @param $data
     * @return boolean
     */
	public function addUser($data){
        $data['user_pass'] = md5($data['user_pass']);
		return $this->instance->add($data);
	}

    /**
     * get userInfo
     *
     * @param $column
     * @param $value
     * @return mixed
     */
	public function getUserById($column, $value){
		return $this->instance->getOne($column, $value);
	}

    /**
     * update useInfo by id
     *
     * @param $data
     * @param $id
     * @return int
     */
    public function updateUserById($data, $id){
        return $this->instance->update($data, $id);
    }

    /**
     * find error
     * @return mixed
     */
    public function findError(){
        return $this->error;
    }

}

?>