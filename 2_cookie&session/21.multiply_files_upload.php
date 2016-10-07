<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/7
 * Time: 13:28
 */
// 多文件上传
// 1.情况一：不同的file域有不同的name
//↑结果：每个name都对应一个独立的数组
// 2.情况二：使用数组形式的file域
// ↑结果：每个name，tmp_name，type...都对应一个数组，其中包含三个文件的对应信息

echo "<pre>";
var_dump($_FILES);
echo "<pre>";

// 多文件上传：提取出每个文件的各项信息，然后调用单文件上传方法
