<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 11:02
 */

class Base{
    function __construct()
    {
        echo "<br>__construct in Base<br>";
    }
}

class Sub extends Base{
    function __construct()
    {
        echo "<br>__construct in Sub<br>";
    }
}

class Sub_sub extends  Sub{
    function __construct_()
    {
        echo "<br>__construct in Sub_sub<br>";
    }

    //析构函数：在对象被销毁时调用
    function __destruct()
    {
        echo "<br> --> XIAOHUILE<br>";
    }
}

$s1 = new Sub();//如果子类中有构造函数，就不会调用父类的构造函数
$ss1 = new Sub_sub();//如果子类中不存在构造函数，而父类中存在的话，就会调用父类的构造函数
$ss1 = NULL;//用不用这行代码效果都是一样的，因为页面加载完成也会销毁对象

$s2 = new Base();
$s3 = new Base();

echo "<br>".($s2 == $s3?"YES":"NO")."<br>";//YES -> 按照属性值进行比较
echo "<br>".($s2 === $s3?"YES":"NO")."<br>";//NO -> 按照地址比较