<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/6
 * Time: 15:58
 */

// 数据类型的支持：支持任意类型的数据
//session_start();
session_set_cookie_params(3600*3600,"/");
//ini_set("session.cookie_lifetime","3600");
//@session_start();
//@session_start();

@session_start();
$_SESSION["int"] = 11;
//$_SESSION["arr"] = array("haha","xixi","hehe");
// PHP 中的任何数据类型都可以存放在 session 中
// session 中存放对象，将对象序列化后存储。

// 每次使用个session的时候，都需要开启session，可以在php.ini中修改：session.auto_start = 1
// 建议不要自动开启

// 重复开启
// 重复开启报警告错误，忽略掉后面的session_start
// 虽然报错，但是不受影响，因为后面的已经被忽略了。

// 解决方案：使用@ 屏蔽错误
//session_start();

var_dump($_SESSION);