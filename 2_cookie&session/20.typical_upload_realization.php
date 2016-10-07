<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/7
 * Time: 11:58
 */

// 典型的实现：判断文件是否满足实际的业务需求
// 1.是否存在错误 -> $_FILES["img"]["error"] != 0;
// 2.类型是否符合要求
// 3.大小是否符合要求
// 4.为目标文件生成合理的名字

// 判断文件类型：后缀名和MIME，单纯的后缀名并不能完全代表一个文件的类型
// 后缀名：在原始文件名中，MIME：$_FILES元素的type值
// strrchr

// 设置目标文件存放时的名称：不能存在特殊字符，不能重名
// 使用函数：uniqid(); 生成唯一的字符串，md5()更加唯一
/*
 *  uniqid() 函数基于以微秒计的当前时间，生成一个唯一的 ID。
 *  uniqid("memeda");
 *  uniqid("memeda",true); -> 第二个参数为true：使唯一性更好
 */

// 实际开发中，为了减少一个目录中文件过多，划分成不同的子目录
// 划分方案：1.按照业务逻辑 2.按照文件数量 3.时间划分

// 按照时间划分：
// 1.获取当前需要使用的子目录名，date()
// 2.判断需要的目录是否存在，is_dir()
// 3.如果存在，使用。如果不存在，创建。 mkdir();

// 安全限制：$_FILES中的type信息，不是PHP检测出来的，而是浏览器提供的。因此，PHP也需要可以检测图片信息才可以，不能
// 完全信赖浏览器。
// fileinfo() 相关函数，需要开启扩展

$file = "./validate/0.png";
// 实例化可以获取到fileinfo的Finfo对象
// 需要传入 FILEINFO_MIME_TYPE 参数
$file_info = new Finfo(FILEINFO_MIME_TYPE);
// 调用该对象的file方法，传入相关资源的路径
$mime_type = $file_info -> file($file);

var_dump($mime_type);// image/png