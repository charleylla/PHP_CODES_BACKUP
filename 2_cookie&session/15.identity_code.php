<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/6
 * Time: 19:42
 */

// 验证码技术
// 防止机器人，如登录页面暴力破解

// 技术：生成图片，验证验证码（将此存放在session中）
// 绘图技术：使用GD扩展
// extension = php_gd2.dll
//phpinfo();

// 制作一个图片：
// 1.创建新的画布
/*
 *  画布资源 = imagecreate(宽,高) -> 创建基于调色板的画布 -> 支持的颜色较少
 *  画布资源 = imagecreatetruecolor(宽,高) -> 创建正彩色 -> 支持的颜色较多
 */
// 2.基于已有图像创建花布
/*
 *  画布资源 = imagecreatefromjpeg(路径);
 *  画布资源 = imagecreatefrompng(路径);
 *  画布资源 = imagecreatefromgit(路径);
 *  ....
 */

$width = 500;
$height = 500;
$validate_stage = imagecreatetruecolor($width,$height);
//var_dump($validate_stage);//resource(2) of type (gd)

// 3.操作画布
// 为花布分配颜色
//$unknown_color = imagecolorallocate($validate_stage,0,0,255);

// 4.填充画布
// 花布 位置 颜色
// 从0开始，因此右下角：$width-1,$height-1
//imagefill($validate_stage,0,0,$unknown_color);

// 5.导出图片
// imagepng() imagejpeg() imagegif() ...
// 如果不使用第二个参数，表示直接输出
//imagepng($validate_stage,"./validate/3.png");

for($i = 0;$i < 20;$i++){
//    $flag = $i*10;
    $color = array($i*10,$i*20,$i*30);
    $c1 = $color[mt_rand(0,2)];
    $c2 = $color[mt_rand(0,2)];
    $c3 = $color[mt_rand(0,2)];
    $unknown_color = imagecolorallocate($validate_stage,$c1,$c2,$c3);
    imagefill($validate_stage,0,0,$unknown_color);
    imagepng($validate_stage,"./validate/{$i}.png");
}

//phpinfo();
//header("Content-Type:image/png;");
//imagepng($validate_stage);
// 乱码原因：一个php页面在输出图片时，是不能输出文字等其他内容的。
// <img />标签的src为相应的php文件，这里的php文件整个都是当做图片处理的。

// 6.销毁资源
imagedestroy($validate_stage);