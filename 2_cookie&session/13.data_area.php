<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/6
 * Time: 16:44
 */

// session数据区：默认以文件形式存储在服务器的临时目录中
// 当session数据过多时，会存储大量的文件，增加服务器磁盘的读写开销
// 实际项目中，采用其他方式存储session

// 1-数据库 2-内存
// session_set_save_handler()用来设置session处理函数
function sessionRead($ssid){
    echo "<p>SESSION_READ</p>",$ssid;
    return "memeda";
}
function sessionWrite($ssid,$ss_content){
    // 接受两个参数，session_id 和 写入的内容
    // 在读写的过程中，PHP已经帮助我们序列化了，不用我们关心
    // 读取的时候，反序列化后读取，写入的时候，序列化的了之后写入
    echo "<p>SESSION_WRITE</p>",$ssid;
}
function sessionDelete(){
    echo "<p>SESSION_DELETE</p>";
}
function sessionGC(){
    echo "<p>SESSION_GC</p>";
}
function sessionBegin(){
    echo "<p>SESSION_BEGIN</p>";
}
function sessionEnd(){
    echo "<p>SESSION_END</p>";
}

// 将自定义函数设置为session机制存储的过程
session_set_save_handler("sessionBegin","sessionEnd","sessionRead","sessionWrite","sessionDelete","sessionGC");
// 这些函数在session运行的某个时间点调用

@session_start();
$_SESSION["memeda"] = "heheda";

// 想把session存放在数据库中，需要在读写阶段进行操作~
// 读取相应的数据：在调用生命周期函数时，会将session_id作为参数传入到函数中
// sessionDelete函数：在执行 session_destory()函数时执行
// session_destory() -> 关闭session机制并删除对应的数据区

// 垃圾回收操作：服务器上过时的数据区
// 如何判断垃圾数据：如果一个session超过多少时间没有使用，就视为垃圾
// 默认为1440s，可以被设置，配合最后的写入时间，就可以判断是否是垃圾session，因此需要在数据库中增加时间字段
// alter table session add column last_write int not null default 0

// 如何删除：在session_start()的时候，有几率的执行垃圾回收操作
// 默认的几率为1/1000，可以修改
// session.gc_probability = 1;（除数）
// session.gc_divisor = 1000;（被除数）
// 建议使用ini_set()设置

// 实现sessionGC() -> PHP将session的最大有效期作为参数传递
// $sql = "delete from session where last_write < unix_timestamp() - $maxlifetime";

// sessionBegin() -> 初始化操作，如数据库连接，保证会在最开始的时候执行

// 语法细节：
// 1.先设置，在开启。
// session_set_save_handler() 先于 session_start();
// 2.PHP所使用的存储机制：
// session.save_handler = files; 改为 user，表示用户自定义

@session_start();
$_SESSION["test"] = "TEST";
var_dump($_SESSION);

/*
 *  不仅仅使用 cookie 传输数据：
 *  ini_set("session.use_only_cookies","0");
 *  自动通过url或者表单数据传输session_id
 *  ini_set("session.use_trans_sid","1");
 *
 *  在浏览器禁用cookie后会自动带上session_id
 *  不安全，不建议使用。
 */

// 实现记住密码：
/*
 *  不记住密码的情况：
 *      每次进行请求时，验证是否有对应的session，如果没有，则重定向到首页，如果有就渲染相应的视图。
 *  session是在点击登录后生成的
 *  记住密码的情况：
 *      记住密码的作用：跳过登录页面，直接进入到相应的视图。
 *      这里由于没有点击登录，因此是没有分配session的，在上一次登录的时候，将用户id和密码（或者其他，最好不要
 *  将用户名和密码同时存放在cookie中）经过md5加密后（可以使用盐值）存放在cookie中，下次登录的时候，直接输入
 *  相应的url，这里不产生cookie，就将cookie中存放的id和密码与数据库中进行比对，如果相同，则跳转。
 *
 *
 */