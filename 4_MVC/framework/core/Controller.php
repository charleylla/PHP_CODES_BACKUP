<?php

/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 11:02
 */

// 基础控制器类
class Controller
{
    // $loader 是 Loder 类的一个实例
    protected $loader;

    // 构造函数
    public function __construct()
    {
        // 为每个实例声明一个Loader实例属性
        // 取实例的属性值时不需要 $
        $this -> loader = new Loader();
    }

    // 重定向
    public function redirect($url,$message,$wait = 0){
        if($wait == 0){
            header("Location:".$url);
        }else{
            include CURRENT_VIEW_PATH."message.html";
        }

        exit();
    }
}