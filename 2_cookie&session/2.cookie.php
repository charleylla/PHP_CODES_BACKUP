<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 12:05
 */

// 在浏览器上存储数据的技术
// 属于浏览器技术
// 该数据存储好之后，在浏览器向服务器发送请求时，会携带该浏览器存储的cookie数据。这样就可以进行身份判断了。

/*
 * 浏览器有一块cookie存储区域，在进行请求时，服务器的响应可以要求浏览器写入相应的cookie数据，这次请求结束了。
 * 下次进行请求时，会在请求头中携带cookie数据发送给服务器。
 * PHP对cookie的操作：设置和获取
 */

//setcookie(key,val)
echo "memeda<br>";

// 设置cookie
$result = setcookie("memeda","heheda");
$result_2 = setcookie("xixida","papada");
//cookie中的数据是在【响应阶段】发送给浏览器的

//增加，修改，删除都使用setcookie函数

// 获取cookie
// 当PHP的核心程序获取到浏览器携带的COOKIE数据时，整理到超全局变量$_COOKIE中
var_dump($result);
echo "<div></div>";

//$_COOKIE是一个数组
var_dump($_COOKIE["memeda"]);
var_dump($_COOKIE["xixida"]);
