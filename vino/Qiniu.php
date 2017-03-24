<?php

namespace Vino;

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class Qiniu {
	
	private $accessKey = '';
	private $secretKey = '';
	private $token;

	public function __construct($aKey,$sKey,$bucket)
	{
		$this->accessKey = $aKey;
		$this->secretKey = $sKey;
			
		$auth = new Auth($this->accessKey, $this->secretKey);
		$this->token = $auth->uploadToken($bucket);
	}

	/**
	 * key   上传到七牛后保存的文件名
	 * filePath 要上传文件的本地路径
	 */
	public function upload($key, $filePath)
	{	
		$uploadMgr = new UploadManager();
		list($ret, $err) = $uploadMgr->putFile($this->token, $key, $filePath);
		if ($err !== null) {
		    return $err;
		} else {
			return $ret;
		}
	}

}
  
?>
