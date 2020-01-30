<?php


$servername = "mysql:3306";
$username = "root";
$password = "123456";

// 创建连接
$conn = new mysqli($servername, $username, $password);

$conn = new PDO("mysql:host=$servername;", $username, $password);

if($conn){
    echo 'mysql连接成功'.PHP_EOL;
}

$redis = new Redis();
$redis->connect('redis', '6379');
$redis->set('a', '22');
if($redis->get('a') === '22'){
    echo 'redis连接成功'.PHP_EOL;
}

phpinfo();