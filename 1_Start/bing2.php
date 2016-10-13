<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 11:28
 */

class A{
    public static $a = "A";
    public static function getA(){
        echo "<br>".(self::$a)."<br>";
    }

    public static function  getA_static(){
        echo "<br>".(static::$a)."<br>";

    }

    public static function start(){
        self::getA();
    }

    public static function  start_static(){
        static::getA_static();
    }
}

class B extends  A{
    public static $a = "B";
}

B::getA();//A
B::getA_static();//B

//self -> 在哪里定义，就在哪里找
//static -> 在哪里调用，就在哪里找

//再次测试对象拷贝
class CPY{
    public $a;
}

$c1 = new CPY;
$c2 = $c1;
$c1 ->a = 1;
echo "<br>";
echo $c2 ->a;//1
echo "<br>";

$c2 -> a = 2;
echo "<br>";
echo $c1 ->a;//2
echo "<br>";

//改变了，因此php总的对象是按照引用传递的

$c3 = &$c1;
var_dump($c3);

$c3 = NULL;
var_dump($c1);

