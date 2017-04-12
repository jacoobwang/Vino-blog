<?php
/**
 * Created by PhpStorm.
 * User: wangyong7
 * Date: 2017/1/23
 * Time: 20:24
 */
namespace Ecc\Topic\Controller;

use Vino\UploadHandler;
use Vino\Utils;
use Vino\Qiniu;

class UploadController extends \Vino\BaseController
{

    /**
     * upload 处理
     */
    public function uploadAction(){

        // 实例化uploadhanler
        $upload_folder = '/attachment/';
        $upload = new UploadHandler(
            array(
                'upload_dir' =>SITE_ROOT.$upload_folder,
                'param_name' => 'editormd-image-file',
                'upload_url' => Utils::get_full_url().$upload_folder,
                'print_response' => false
            )
        );

        // 获取图片处理后的response
        $response = $upload->response['editormd-image-file'][0];
        $error = (isset($response->error)) ? $response->error : false;

        // 返回json给前端
        if ($error) {
            $res = [
                'success' => 0,
                'message' => $error
            ];
        } else {
            $res = [
                'success' => 1,
                'message' => '上传陈功',
                'url' => $response->url,
                'thumb'=> $response->thumbnailUrl
            ];
        }
        echo json_encode($res);
	}

	/**
	 * qiniu upload
	 */
	public function uploadQiniuAction(){
		if(!empty($_FILES)){
			$name = $_FILES['upload-image-file']['name'];
			$path = $_FILES['upload-image-file']['tmp_name'];
		}

		$accessKey = 'QSAoVUSJKWp9SiWmlVgIXKRJbv-ckHK5bbED8TtE';
		$secretKey = 'xxxxxxxxxxxx';
		$bucket	   = 'jacoob';

		$Qiniu = new Qiniu($accessKey, $secretKey, $bucket);
		
		$ret   = $Qiniu->upload($name, $path);
		if($ret){
			$url = 'http://o813ojjy0.bkt.clouddn.com/'.$ret['key'];
			$res = [
                'success' => 1,
                'message' => '上传陈功',
                'url' => $url,
                'thumb'=> $url
            ];
		}
	}

}
