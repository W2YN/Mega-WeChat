<?php
/**
 * Created by PhpStorm.
 * User: rain1
 * Date: 2016/5/19
 * Time: 9:27
 */
include dirname(__DIR__) . "/autoload.php";
$path = __DIR__ . '/queue/megaq.log';
$logIndex = new \Swoole\Queue\LogIndex($path);
var_dump($logIndex);
