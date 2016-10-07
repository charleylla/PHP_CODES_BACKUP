<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 23:05
 */

// 和cookie一样，都是用来实现会话技术。
// 为什么要使用session技术？
/*
 *  cookie的劣势：会话数据的存储位置在浏览器端
 *  1.带来了安全性问题。
 *  2.请求和响应的数据量大的时候，每次请求和响应都会发送，导致性能问题。
 *  3.浏览器会限制cookie的大小和数量
 *
 *  Session技术：
 *      存储在服务器端
 *  如何实现区分不同的浏览器呢？
 *      在服务器端建立很多的session数据区，为每个数据区分配一个唯一的标识，将该唯一的标识分配给对应的浏览器。
 *
 *  浏览器进行请求时，服务器返回相应的session标识，通过cookie存放在浏览器中
 *      若是存储原始的会话数据，就是cookie
 *      若是存储的会话标识，就是session
 *  如果存储标识的cookie，只是拿到了标识，但是拿不到服务器中存放的session数据
 */

// 基本操作
// 开启session，操作session数据
// session_start(); -> 开启session机制
// 操作session就直接操作$_SESSION

session_start();
// 添加
$_SESSION["memeda"] = "heheda";
$_SESSION["xixida"] = "papada";
$_SESSION["gagada"] = "kekeda";

// 修改
$_SESSION["memeda"] = "ooda";

// 删除
unset($_SESSION["xixida"]);

var_dump($_SESSION);
// 不可以跨浏览器，同一站点的session可以互用

// 服务器端的session会话数据区
// 默认情况下，每个数据区就是一个独立的文件，存储于操作系统的临时目录中。
// 不同的会话，会以相应的文件进行储存。

// 只要使用session，就必须要开启。