<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/9/29
 * Time: 12:14
 */

namespace entry{
    function show($msg){
        echo "<br>".$msg."<br>";
    }

    show("HEHE");
}

//\entry\show();//错误
//将全局的非命名空间中的代码与命名空间中的代码组合在一起，只能使用大括号形式的语法。全局代码必须用一个不带名称的 namespace 语句加上大括号括起来

//在命名空间之外使用，需要使用这种语法
namespace {
    \entry\show("HAHA");//ok
}

namespace hehe{
    //在命名空间中使用其他命名空间中的code
    \entry\show("XIXI");
}