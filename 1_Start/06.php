<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/28
 * Time: 14:32
 */

$int_val = 1;
$str_val = "Tianya";
$double_val = 8.0;

print var_dump($int_val)."<br>";
print var_dump($int_val)."<br>";
print var_dump($int_val)."<br>";
echo "<br>";

echo gettype($int_val)."<br>";
echo gettype($str_val)."<br>";
echo gettype($double_val)."<br>";
print "<br>";

echo is_int($int_val);
echo is_int($str_val)."";

/**
 * var_dump 返回数据的值和类型
 * gettype 返回数据的类型
 * is_type 判断数据的类型
 *
 */