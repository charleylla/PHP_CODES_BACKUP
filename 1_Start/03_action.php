<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 16-9-28
 * Time: 上午11:33
 */

//$name = $_POST('name');
//$age = $_POST('age');

//$name = $_POST["name"];
//$age = $_POST["age"];


//htmlspecialchars
//防止注入，将html标签转义后输出

$name = htmlspecialchars($_POST["name"]);
$age = htmlspecialchars($_POST["age"]);


echo "<p>你好，$name</p>";
echo "<p>年龄：$age</p>";