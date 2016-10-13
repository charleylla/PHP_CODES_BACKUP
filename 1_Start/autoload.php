<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 10:55
 */

function __autoload($className){
//    echo "<br>加载了类：".($className::class)."<br>";
    require_once "./{$className}.class.php";
    var_dump($className);
}

$a1 = new AutoLoadTest();
var_dump($a1 -> arr);