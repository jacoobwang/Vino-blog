<?php
/**
 * Created by PhpStorm.
 * User: Jacoob
 * Date: 21/03/17
 * Time: 10:50 AM
 */
namespace console;

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';

    $app = new \console\Application(__DIR__);
    $app->handleRequest();
} else {
    echo "please install composer first,visit this page see how to install it http://docs.phpcomposer.com/00-intro.html \n";
    exit;
}





