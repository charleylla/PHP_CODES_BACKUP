<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/8
 * Time: 17:13
 */

// HTTP
// 协议

/*
 *  请求格式：
 *  request-line -> 请求行：请求的第一行
 *  request-header ->请求头：请求行后面的都是请求头
 *  request-body -> 请求主体，这部分数据没有展示出来
 *
 *  请求行：请求的摘要信息
 *  请求头：浏览器需要服务器知道的浏览器状态，如：User-Agent Accept-Language（可以接受的语言） Accept（可以接受的）
 *  请求体：在进行POST请求时呈现
 *
 *  操作请求：
 *     1. 返回来源页 -> 点击登录，跳转到登录页面，登录成功后跳转到原来的页面 -> 请求头中的Refer
 *          利用请求头中的来源完成
 *          header("Refresh:2;URL=".$_SERVER['HTTP_REFERER']);
 *      来源可能不存在，用户可能直接请求登录url
 *          可以设置默认值~
 *     2. I18n 国际化程序 （多语言程序）
 *          为不同的浏览器需求展示不同的语言
 *          核心：知道浏览器需要什么语言 ， 请求头中的 Accept-language
 *      zh_cn.php
 *          $HELLO = "你好";
 *      jp.php
 *          $HELLO = "空尼起哇";
 *
 */

/*
 *  响应格式：
 *  常用状态码：
 *      200 OK 成功
 *      404 NOT FOUND 请求资源不存在
 *      403 Forbidden 请求被拒绝
 *      302 Found 请求重定向，表示从一个页面跳转到另一个页面
 *          如：当前页面跳转到25.target.php 那么当前页面的状态码是302，25.target.php 的状态码是200（如果这个页面存在的话）
 *          Location:25.target.php -> 从这个页面跳转到了 25.target.php 页面
 *      500 Server Internal Error 服务器内部错误
 *
 *      系列：
 *          1XX 2XX ....
 *          1XX 信息
 *          2XX 成功
 *          3XX 重定向
 *          4XX 客户端错误
 *          5XX 服务器错误
 *
 *  相应主体：
 *      浏览器中查看到的内容个就是响应主体，包括任何输出，html
 *
 */

/*
 *  header() -> 操作响应头
 *
 *
 */

//header("Location:25.target.php");

//    echo date("H:i:s");
//正常情况下：每点击一次就会向服务器请求数据，然后输出信息
// 设置请求头
// 生成GMT时间
$expires = gmdate("D,d M Y H:i:s",time() + 5)."GMT";
header("Expires:".$expires);
// Expires 的值需要是特定格式的 GMT 时间

// date -> 将时间戳格式化为本地时间
// gmdate -> 将时间戳格式化为GMT时间

// 这样一来，浏览器会缓存 5S
echo date("H:i:s");

// 设置过期时间为过去时间：禁止缓存，比如验证码

/**
 *  控制下载
 *
 *  文件下载：
 *      告知浏览器，将浏览器接收到的响应主体，以附件的形式进行存储。
 *
 */
?>

<a href="24.HTTP.php">获取时间</a>
