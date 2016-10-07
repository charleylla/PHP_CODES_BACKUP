<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/6
 * Time: 20:29
 */

//1.生成码值
// 点击更换背景图片，在有限的几张图片中进行选择
// 码值：字母+数字，颜色可变，居中显示
$char_list = "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
$char_list_len = strlen($char_list);
$code_len = 4;
$code = "";
for($i = 0;$i < $code_len;$i ++){
    // 返回0 到 $char_list_len - 1之间的随机数，作为索引
    $code .= $char_list[mt_rand(0,$char_list_len-1)];
}

//var_dump($code);

// 2.将码值存放在session中
@session_start();
$_SESSION["validate_code"] = $code;

// 3.将码值写入图片中
// 获取图片
$code_bg = "./validate/".mt_rand(0,19).".png";
// 基于图片创建画布
$validate_stage = imagecreatefrompng($code_bg);
// 操作画布
// 随机分配颜色
if(mt_rand(1,2) === 1){
    $text_color = imagecolorallocate($validate_stage,0,0,0);
}else{
    $text_color = imagecolorallocate($validate_stage,255,255,255);
}

// 将文字写在图片中
//imagestring($validate_stage,5,100,100,$code,$text_color);
/*
 *  图片宽度：imagesx(画布)
 *  图片高度：imagesy(画布)
 *  文字宽度：imagefontWidth(字体)
 *  文字高度：imagefontHeight(字体)
 */
$imageW = imagesx($validate_stage);
$imageH = imagesy($validate_stage);
$strW = imagefontwidth(5) * 4;
$strH = imagefontheight(5);
// 使验证码居中
imagestring($validate_stage,5,($imageW - $strW)/2,($imageH - $strH)/2,$code,$text_color);
header("Content-Type:image/png;");
imagepng($validate_stage);

imagedestroy($validate_stage);