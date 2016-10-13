<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 9:35
 */
$colors = array(
    "red",
    "green",
    "blue",
    "yellow"
);

foreach ($colors as $color){
    $color = strtoupper($color);
}

print_r($colors);

//php中数组默认不是引用传递
$arr = array(1,2,3,4);
$arr2 = $arr;
$arr2[] = 5;
echo "<br>";
print_r($arr);//不变

//取地址符 引用传递
$arr3 = &$arr;
$arr3[] = 6;
echo "<br>";
print_r($arr3);
echo "<br>";
print_r($arr);//changed

