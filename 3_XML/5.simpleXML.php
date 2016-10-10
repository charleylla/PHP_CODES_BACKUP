<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/9
 * Time: 18:10
 */
$xmlDOC = simplexml_load_file("./4.test.xml");
var_dump($xmlDOC);
echo "<pre>";
var_dump($xmlDOC->name);
var_dump($xmlDOC->location);

echo "<hr>";

foreach ($xmlDOC->children() as $child){
    echo $child->getName() . ":" .$child,"<br>";
}

echo "<hr>";

$arr[] = "A";
$arr[] = "B";
$arr[] = "C";
$arr[] = "D";

foreach ($arr as $value){
    echo $value,"<br>";
}