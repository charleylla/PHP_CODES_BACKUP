<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 11:28
 */

echo "123";

class AA{
    public static $a = "A";
    public function getA(){
        echo "<br>".(self::$a)."<br>";
    }
}

class BB extends  AA{

}

$a = new AA;
$a -> getA();