<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 9:55
 */
//callback
function simple(){
    echo "<br>simple<br>";
}

class Complex{
    public static function comp(){
        echo "<br>complex<br>";
    }
    public function comp_instance(){
        echo "<br>comp_instance<br>";
    }
}

class Sub_Complex extends Complex {
    public static function comp(){
        echo "<br>complex_sub<br>";
    }
}

$complex = new Complex();

call_user_func("simple");
call_user_func("Complex::comp");
call_user_func(array("Complex","comp"));
call_user_func(array($complex,"comp_instance"));
//调用类的静态方法，可以写在字符串中也可以写在数组中
//调用实例的方法，只能写在数组中，并且，实例变量名不能使用引号

call_user_func(array("Sub_Complex","comp"));//调用自身的静态方法
call_user_func(array("Sub_Complex","parent::comp"));//调用父类的静态方法
