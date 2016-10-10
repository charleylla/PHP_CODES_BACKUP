<?php

/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 11:08
 */
// 这个类用来加载
// 在Charley.php中封装了自动加载的方法，是加载对应用的控制器 Controller 和模型Model 的自动加载
// 但是如何自动加载在 framework 中的类呢？这就是我们定义 Loader 类的作用
class Loader
{
    // 加载libraries中的类
    public function library($lib){
        include LIB_PATH."$lib.php";
    }

    // 加载helpers中的类
    public function helpers($helper){
        include HELPERS_PATH."{$helper}_helper.php";
    }
}