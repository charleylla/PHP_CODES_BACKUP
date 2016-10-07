<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/6
 * Time: 21:39
 */

// 文件上传
// 表单数据有两种类型：字符串型和文件类型，默认情况下，浏览器会将所有的数据都当做字符串类型。
// 如果需要上传文件，需要告诉浏览器，表单中的数据存在多种类型（字符串和文件型），通过在form增加属性：
// Enctype = "multipart/form-data"

// 如果接收到文件，则会默认存放在操作系统的临时目录中
// 该临时文件的有效期为脚本周期
// 上传操作的本身和php没有关系，是有浏览器上传到服务器的临时目录的，php要做的工作就是在文件为消失前将文件持久性存储

// move_uploaded_file(临时文件地址,目标文件地址)

//var_dump($_GET);
//var_dump($_POST);
//@session_start();
//$_SESSION["1"] = 2;

var_dump($_FILES);

// 上传文件出现问题：php版本的坑，使用php5.3就没有什么问题

//sleep(100);
$tmp_dir = $_FILES["img"]["tmp_name"];
$dest_dir = "./{$_FILES['img']['name']}";

// 移动上传文件的位置
move_uploaded_file($tmp_dir,$dest_dir);
// 如果上传的文件尺寸不对的话，也会失败