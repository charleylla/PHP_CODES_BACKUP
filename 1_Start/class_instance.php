<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 10:25
 */

class Test{
    public $arr = array(1,2,3);
}

$i1 = new Test();
$i2 = $i1;
$i3 = &$i1;

$i1 = NULL;

var_dump($i1);//NULL
echo "<br>";
var_dump($i2);//非 NULL
echo "<br>";
var_dump($i3);//NULL

//可见：PHP中的对象也不是按引用传递的，除非明确指定

class A{
    public static function echoo(){
        echo "<br>echoo in A<br>";
    }
}

class B extends A{
    public static function getA(){
        parent::echoo();
    }
}

B::getA();

echo A::class;

//类常量
class C{
    //声明类常量不需要使用cons
    const cons = "MEMEDA";
    public function getCons(){
        echo "<br>".self::cons."<br>";
        echo "<br>".C::cons."<br>";
        //self 表示当前类
    }
}

$c_ins = new C();
$c_ins -> getCons();
//$c_ins -> cons;
//类常量是属于类的，只能通过类名访问，实例是不能访问的