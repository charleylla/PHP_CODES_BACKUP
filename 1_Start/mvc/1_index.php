<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 17:40
 */

$file = "1_index_red.html";
if(!empty($_GET["background"])){
    $bg = $_GET["background"];
    $file = "1_index_".$bg.".html";
}

//这是一个简单的控制器-视图模型
//根据$_GET的数据来决定显示哪一个文件

//在页面上的呈现：是url中的query发生了变化，但是实质上是 require 的视图发生了变化
//可以认为：控制视图变化的底层就是require或者include

require $file;

?>