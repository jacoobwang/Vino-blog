<?php
/**
 * Created by PhpStorm.
 * User: Jacoob
 * Date: 21/03/17
 * Time: 10:50 AM
 */
namespace console;

require __DIR__ . '/vendor/autoload.php';

$app = new \console\Application(__DIR__);
$app->handleRequest();

