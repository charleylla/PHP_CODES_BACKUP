<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/28
 * Time: 14:49
 */

$sc = '"You Are Choosen!!",Mike says,"disk C:\ is clear now"';
$dc = "\"You Are Chossen!\",Mike says,\"dusk C:\\ is clear now\"";

echo $sc."<br>";
echo $dc."<br>";

//$long_str = <<<LSTR
//Heredoc 结构就象是没有使用双引号的双引号字符串，
//这就是说在 heredoc 结构中单引号不用被转义，
//但是上文中列出的转义序列还可以使用。
//变量将被替换，
//但在 heredoc 结构中含有复杂的变量时要格外小心。
//LSTR;
//
//var_dump($long_str);
//print_r($long_str);

class Test{
    static $name = "Charley";
    public $age = "22";
    public $country = array("America","China","England");
}

//echo Test::$name;

$myname = Test::$name;
echo $myname;

echo "<br>";
echo "The static prop name of the class Test is {$myname}";

$t = new Test();


//echo "{t->$age}";
//直接调用，错误

$n = "name";
$a = "age";
//可以操作实例
echo "--> {$t->age}";
echo "--> {$t->$a}";
echo "--> {$t->country[1]}";

//echo "--> {Test::name}";//这样访问会失败
/*
 * 函数、方法、静态类变量和类常量只有在 PHP 5 以后才可在 {$} 中使用。
 * 然而，只有在该字符串被定义的命名空间中才可以将其值作为变量名来访问。
 * 只单一使用花括号 ({}) 无法处理从函数或方法的返回值或者类常量以及类静态变量的值。
 *
 * ↑↑↑↑
 * 不能直接访问类的静态成员，只有使用魔术变量
 */

class Person{
    public static $name = "mike";
}

$mike = "250";

echo "<br>";
echo "Mike is {${Person::$name}}";
//恶心 后头遇到了再看吧
//需要使用两层花括号

$strr = "我是一个好人";

echo "<br>";
//乱码
echo $strr[0];

echo "<br>";
$strrr = "I'm a good man.";
echo $strrr[0];
echo $strrr[strlen($strrr)-1];
