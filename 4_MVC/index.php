<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 9:48
 */

require "./framework/core/Charley.php";

//Charley::run();

$conn = mysql_connect("localhost","root","root");
mysql_select_db("demo");
$sql = "select * from stu_msg";
$result = mysql_query($sql);

//$row = mysql_fetch_row($result);
//$row = mysql_fetch_assoc($result);

//var_dump($row);
var_dump(mysqli_insert_id($conn));