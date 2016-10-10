<?php

/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 10:03
 */

class Charley
{
    // 仅向外暴露出一个公共方法，其他方法私有，在此公共方法中调用
    public static function run(){
        Charley::init();
        Charley::autoload();
        Charley::dispatch();
    }

    //private static methods
    private static function init(){
        // 定义分隔符，在 windows 下是 '/' ，在 linux 下是 '//'
        define("DS",DIRECTORY_SEPARATOR);
        // 获取当前的工作目录，绝对路径
        // getcwd() -> 获取当前的工作目录
        define("ROOT",getcwd().DS);
        // 获取 三大 目录
        define("APP_PATH",ROOT.DS."application".DS);
        define("REAMEWORK_PATH",ROOT.DS."framework".DS);
        define("PUBLIC_PATH",ROOT.DS."public".DS);

        // 获取application下的子目录
        define("CONFIG_PATH",APP_PATH."config".DS);
        define("CONTROLLER_PATH",APP_PATH."controllers".DS);
        define("MODEL_PATH",APP_PATH."model".DS);
        define ("VIEW_PATH",APP_PATH."view".DS);

        // 获取framework下的子目录
        define("CORE_PATH",FRAMEWORK_PATH."core".DS);
        define("DATABASE_PATH",FRAMEWORK_PATH."database".DS);
        define("HELPERS_PATH",FRAMEWORK_PATH."helpers".DS);
        define("LIBRARIES_PATH",FRAMEWORK_PATH."libraries".DS);

        // 定义platform controller action 及其默认值
        // 这里使用$_REQUEST获取
        define("PLATFORM",isset($_REQUEST["p"])?$_REQUEST["p"]:"home");
        // 获取 controller值
        define("CONTROLLER",isset($_REQUEST["c"])?$_REQUEST["c"]:"Index");
        define("ACTION",isset($_REQUEST["a"])?$_REQUEST["a"]:"index");

        // 定义当前的控制器路径
        define("CURRENT_CONTROLLER_PATH",CONTROLLER_PATH.CONTROLLER.DS);
        // 根据PLATFORM定义当前的view路径
        define("CURRENT_VIEW_PATH",VIEW_PATH.PLATFORM.DS);

        // 加载核心类
        // 基础控制器类，模型类，MySQL类
        require CORE_PATH."Controller.class.php";
        require CORE_PATH."Loader.class.php";
        require DATABASE_PATH."Mysql.class.php";
        require CORE_PATH."Model.class.php";

        // 引入配置文件
        // config 也是一个php文件
        $GLOBALS["config"] = include CONFIG_PATH."config.php";

        // 开启session
        session_start();
    }

    private static function autoload(){
        // 自动加载，在用到某个类的时候不需要手动require
        // 该方法用来替代 __autoload
        // 可以接受一个数组，表示在调用某个类的时候去执行哪一个加载函数
        spl_autoload_register(array(__CLASS__,"load"));
        /*
         *  __CLASS__ 是 PHP 的一个魔术常亮
         *      表示被调用的类的名称
         */
    }

    // 定义load函数
    private static function load($classname){
        // 这里为什么是10
        // 区别对待类名和文件名
        // 比如：一个类如果叫 GoodsController
        // 那么文件名就是 GoodsController.class.php
        // 我们在调用的时候是调用的某一个类名，而不是文件名。 因此就是为什么下面的索引使用 -10 和 -5 的原因
        // 自动加载的作用：我们在调用某一个类的时候，根据类名去找相应的文件名，然后加载这个文件。
        if(substr($classname,-10) == "Controller"){
            require_once CURRENT_CONTROLER_PATH."$classname.php";
        }else if(substr($classname,-5) == "Model"){
            require_once MODEL_PATH."$classname.php";
        }
    }

    // 路由分发
    private static function dispatch(){
        // 当前控制器的名称 也是当前控制器类的名称
        $controller_name = CONTROLLER."Controller";
        // 当前行为的名称
        $action_name = ACTION."Action";
        // 初始化当前控制器类，使用到了PHP中魔术变量
        $controller = new $controller_name();
        // 初始化控制器后，调用控制器中的相应行为方法，也使用到了魔术变量
        $controller -> $action_name();
        // dispatch 将请求从index.php分发到了对应的Controller中
    }
}

//Charley::run();