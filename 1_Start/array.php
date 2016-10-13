<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 9:01
 */

$arr = array("first" => 1,"second" => 2, "last" => 3);
$arr2 = array(1=>1,5.5=>5.5,"1" => "str_1",true => 4);
var_dump($arr2);//array(2) { [1]=> int(4) [5]=> float(5.5) }\
//"1" 和 true 都会被转化为1 起到覆盖作用
echo "<br>";
echo $arr2[5.5]."<br>";
echo $arr2[5];
//key 为 5.5时，实际上是转换成5进行存储，仅此使用$arr[5.5]和$arr[5]都能访问到相应的元素

//多维数组
$muti_arr = array(
    5.5,
    "memeda",
    "muti" => array(
      "heheda",
        "xixida" => array("hahada"),
    ),
);

echo "<br>".sizeof($muti_arr);
echo "<br>".count($muti_arr);
//sizeof 和 count 方法可以判断数组的长度

//数组间接访问

function getArr(){
    return array(1,2,3);
}

//5.4之后：
echo "<br>".getArr()[1]."<br>";
//previous
$temp_arr = getArr();
echo "<br>".$temp_arr[1]."<br>";

//增加元素
$arr_add = array(1 => 1,12 => 12);
$arr_add[] = 13;
$arr_add[] = 14;

var_dump($arr_add);
//如果不指定索引，则为当前最大索引之后的索引元素进行赋值

//移出数组元素，相当于js中的splice
unset($arr_add[1]);
echo "<br>";
var_dump($arr_add);

echo "<br>".sizeof($arr_add);
//移出元素后，数组的长度减一

//最大索引的问题：不一定在当前数组中，只要在此数组中曾经出现过就ok

$arr_reset = array(1,2,3,4,5);
print_r($arr_reset);
foreach ($arr_reset as $key => $val){
    unset($arr_reset[$key]);
}
print_r($arr_reset);
$arr_reset[] = "memeda";
print_r($arr_reset);//Array ( [5] => memeda )
//尽管数组被清空了，由于最大索引4曾今在这个数组中存在过 此次赋值还是在原先最大索引的基础上进行操作的
//数组中元素不论怎么变化，其内部的最大索引值都会保留，使用[]要注意
$arr_reset[] = "heheda";
echo "<br>";
print_r($arr_reset);//Array ( [5] => memeda [6] => heheda )
//使用 array_values()进行重新索引

$arr_reset = array_values($arr_reset);
echo "<br>";
print_r($arr_reset);//Array ( [0] => memeda [1] => heheda )
//数组元素unset后不会重新建立索引，可以使用array_values重新建立索引



