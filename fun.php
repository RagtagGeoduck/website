<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2018/9/28
 * Time: 9:18 AM
 * function: 链接数据库
 */

// 封装
/*function config()
{
    $configList = [
        "host" => "localhost", //mysql地址
        "port" => "3306", // mysql端口号
        "user" => "root", // mysql用户名
        "passwd" => "", // mysql 密码
        "dbname" => "pscj" // 项目所使用的数据库
    ];

    return $configList;

}*/

$server = "localhost";
$user = "root";
$password = "";
$database = "pscj";
$conn = mysqli_connect($server, $user, $password);
mysqli_select_db($conn,$database);
mysqli_query($conn,"SET NAMES utf8");
?>