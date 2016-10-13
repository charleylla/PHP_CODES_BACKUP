<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 14:45
 */

//创建一个数据库链接对象：new mysqli
// i-->improved

//1.使用面向对象的方式
$connect = new mysqli("localhost","root","root");

echo "<pre>";
    var_dump($connect);
//打印出数据，说明链接成功了
echo "</pre>";

//2.使用面向过程的方式
$connect_po = mysqli_connect("localhost","root","root");

echo "<pre>";
 var_dump($connect_po);
echo "</pre>";

//可以在开发中采用面向对象或者面向过程的方式。

//3.第三种方式：使用PDO链接

$hostname = "localhost";
$username = "root";
$password = "root";
$charDB = "charley_test";

$connect_pdo = new PDO("mysql:host=$hostname;dbname=$charDB",$username,$password);//ok
//$connect_pdo = new PDO("mysql:host=localhost;dbname=charley_test",$username,$password);//ok
//$connect_pdo = new PDO("mysql:host='localhost';dbname='charley_test'",$username,$password);//not ok

//使用PDO链接数据库需要指定数据库名，如果不指定会抛出错误
//我没有指定，并没有抛出错误啊。。


echo "<pre>";
var_dump($connect_pdo);
echo "</pre>";

//关闭数据库链接
//数据库链接在脚本执行完成后会自动关闭，也可以手动关闭。

$connect -> close(); //面向对象的方法
mysqli_close($connect_po);//面向过程的方式
$connect_pdo = NULL;//使用pdo对象的方式