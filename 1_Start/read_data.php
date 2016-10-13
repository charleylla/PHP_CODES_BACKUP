<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 15:50
 */

$connec = new mysqli("localhost","root","root");
$sql = "use charley_test";
$connec -> query($sql);
$sql = "select * from person";
//保存查询的结果
$result = $connec -> query($sql);
//PHP这个变态使用的是 -> 而不是 .

//读取查询的结果
//判断是否有数据
if($result -> num_rows > 0){
    while($res = $result -> fetch_assoc()){
        echo "<pre>";
        echo "ID:".$res["id"]." NAME:".$res["name"];
        echo "</pre>";
    }
}