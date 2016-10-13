<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 11:28
 */

class A{
    public static $a = "A";
    public function getA(){
        echo "<br>".(self::$a)."<br>";
    }

    public function  getA_static(){
        echo "<br>".(static::$a)."<br>";

    }

    public function start(){
        //这个$this是父类实例的this，自然子类的相应方法不会被调用
        $this ->getA();
    }

    public function  start_static(){
        $this -> getA_static();
    }
}

class BB extends  A{
    public static $a = "B";

    public function getA(){
        echo "<br>".(self::$a)."<br>";
    }

    public function  getA_static(){
        echo "<br>".(static::$a)."<br>";

    }
}

$a = new A;
$a -> start();//A
$a -> start_static();