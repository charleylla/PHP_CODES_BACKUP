<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $this -> display();

        // 访问其他控制器下的模板文件
//        $this -> display("Goods/getLists");
    }
}