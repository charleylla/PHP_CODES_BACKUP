<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 17:29
 */


// 键 值 有效期 有效路径 有效域名 是否安全协议 是否HTTPONLY
// "" ""     0       ""      ""      false       false

// 语法细节：cookie只支持字符串型的数据，如果是其他类型的数据，会先转换为字符串
// 如果无法转换为字符串，就会报错

// serialize() 序列化函数，将某种数据转换成字符串。
//setcookie("keke",array(1 => "haha", 2 => "hehe"));
setcookie("keke",serialize(array(1 => "haha", 2 => "hehe")));
var_dump($_COOKIE["keke"]);
//如果使用，就反序列化
echo "<br>";
var_dump(unserialize($_COOKIE["keke"]));

// 关于 $_COOKIE 只保存浏览器在请求时请求头中带来的cookie信息，这就是为什么在新设置了cookie后需要刷新浏览器才能看到效果。
