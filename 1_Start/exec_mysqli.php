<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 15:20
 */

$connec = new mysqli("localhost","root","root");

//判断连接是否成功
if($connec -> connect_error){
    die("连接失败：".$connec -> connect_error);
}

//执行数据库语句
$connec -> query("use charley_test");
$sql_query = "
    INSERT INTO person(id,name) VALUES (99,'MIKE');
";
$connec -> query($sql_query);

//echo "<pre>";
//var_dump($connec);
//echo "</pre>";

//如果有多条insert语句，我们可以使用预处理语句
$preload = $connec -> prepare("INSERT INTO person(id,name) VALUES (?,?)");

//?就是我们要插入的变量

//将?和相应的变量进行绑定
$preload -> bind_param("is",$id,$name);
//i -> integer
//s -> string
//d -> double
//b -> BLOB -> 二进制大对象

echo "<pre>";
var_dump($preload);
echo "</pre>";

$persons = array(
    array("id" => 1,"name" => "Anny"),
    array("id" => 2,"name" => "Jack"),
    array("id" => 3,"name" => "Turk"),
    array("id" => 4,"name" => "Json"),
    array("id" => 5,"name" => "Wite"),
    array("id" => 6,"name" => "Marphy"),
    array("id" => 7,"name" => "Penny"),
);

foreach ($persons as $p){
//    foreach ($p as $id => $name){
//        //执行操作
//        $preload -> execute();
//    }
//    上面这个遍历由问题

    $id = $p["id"];
    $name = $p["name"];
    $preload -> execute();
}

echo "<h1>批量插入完成！</h1>";

//先关闭预处理，在关闭链接
//$preload -> close();
//$connec -> close();

