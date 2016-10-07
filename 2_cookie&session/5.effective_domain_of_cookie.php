<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 17:04
 */

// cookie 的有效域
// 当前网站下的cookie在别的域名下是不能访问的。即时他们在同一台服务器上

// 应用：二级域名。
// news.baidu.com music.baidu.com 使用二级域名划分网站的功能，cookie中的数据在这些不同的域名中是无法相互访问的。

// cookie 支持在一级域名的所有二级域名中进行cookie的共享。
setcookie("xixida","daxixi",0,"",".haha.com");
//所有的haha.com下的子域名都有效。

//有效域名：针对域名
//有效路径：针对路径

