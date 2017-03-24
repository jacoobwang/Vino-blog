<?php
/**
 * Created by PhpStorm.
 * User: jacoob
 * Date: 11/04/15
 * Time: 10:32 AM
 */

namespace Vino;

/**
 * Class CSV
 * @package Vino
 */
class CSV {

    /**
     * [export 导出]
     * @param  [type] $filename [description]
     * @param  [type] $data     [description]
     * @return [type]           [description]
     */
    public static function export($filename,$data) 
    {
        header("Content-type:text/csv");
        header("Content-Disposition:attachment;filename=".$filename);
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');
        print(chr(0xEF).chr(0xBB).chr(0xBF)); //解决中文乱码
        echo $data;
    }

    /**
     * [parseData 解析数据]
     * @param  [arr] $title [description]
     * @param  [arr] $data  [description]
     * @return [type]        [description]
     */
    public static function parseData($title,$data) 
    {
        $ret = implode(',',$title)."\r\n";
        if(!empty($data)) {
            foreach ($data as $key => $value) {
                // $ret .= iconv('utf-8','gb2312',implode(',',$value))."\r\n";
                $ret .= implode(',',$value)."\r\n";
            }
        }
        return $ret;
    }

}
