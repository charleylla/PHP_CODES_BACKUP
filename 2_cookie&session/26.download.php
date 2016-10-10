<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/9
 * Time: 11:36
 */

// 文件下载
// 同样是通过响应头完成

//header("Content-Disposition:attachment;");
//echo "MEMEDA";

// 下载的文件存放的是主体，不包含响应头
// 存放的是将要显示在浏览器中的响应主体，并不是所有的文件代码
// 这里存放的是 MEMEDA

// 下载图片演示
 $path = "./validate/6.png";
// 处理响应头，并指定下载的文件名
//header("Content-Disposition:attachment;filename=MEMEDA.jpg;");

// basename -> 取得path中的文件名部分，这样就是下载到原始的文件名了
header("Content-Disposition:attachment;filename=".basename($path));

// 有必要告诉浏览器文件的类型

// 获取任意文件的MIME类型
// 需要打开相应的扩展
$finfo = new Finfo(FILEINFO_MIME_TYPE);
$mime = $finfo -> file($path);
header("Content-Type:".$mime);

// 有必要告诉浏览器文件的大小
header("Content-Length:".filesize($path));

$handle = fopen($path,"r");

//feof -> 检测是否到达了文件的末尾
//如果没有到达末尾，返回false，以流的形式输出图片
while(!feof($handle)){
    echo fgets($handle,1024);
}

// 这样就可以将文件下载下来了

// 关闭资源
fclose($handle);


