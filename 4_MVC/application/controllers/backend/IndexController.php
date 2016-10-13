<?php

/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 14:29
 */

// 这个类已经被自动导入进去了
class IndexController extends Controller
{
    public function mainAction(){
        include CURRENT_VIEW_PATH . "main.html";
        // 使用 loader 导入验证码类
        $this->loader->library("Captcha");
        $captcha = new Captcha;
        $captcha->hello();

        // 在控制器中使用User model
        $User = new User("user");
        $users = $User->getUsers();
    }

    // 根据不同的action 渲染不同的页面
    public function indexAction(){
        $User = new User("user");
        $users = $User->getUsers();
        // Load View template
        include  CURRENT_VIEW_PATH . "index.html";
    }

    public function menuAction(){
        include CURRENT_VIEW_PATH . "menu.html";
    }

    public function dragAction(){
        include CURRENT_VIEW_PATH . "drag.html";
    }

    public function topAction(){
        include CURRENT_VIEW_PATH . "top.html";
    }
}