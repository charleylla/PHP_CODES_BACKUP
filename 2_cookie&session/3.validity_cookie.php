<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 16:43
 */

//COOKIE的有效期默认为浏览器关闭后失效，临时cookie
//可以设置cookie的有效期
//time() 获取时间戳
setcookie("gagada","cacada",time()*3600);
var_dump($_COOKIE);
//浏览器判断该cookie是否过期，设置cookie时同时将cookie的有效期传输给浏览器，浏览器就知道了cookie的有效期

//特殊值：
//0 -> 默认
//PHP_INT_MAX -> 最大整型，PHP能表示的最大时间戳。表示这个cookie永久存在。
//time() - 1 -> 把时间设置为过去时间，删除cookie的通用做法。

echo "<br>";
//删除cookie
//setcookie("gagada","",time()-1);
//也可以将第二个参数设置为空字符串
setcookie("gagada","");// 语法糖，不是删除cookie的本质做法。
var_dump($_COOKIE);

