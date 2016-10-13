<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/12
 * Time: 9:07
 */

namespace Home\Controller;
use Think\Controller;


class GoodsController extends Controller{
    public static $amount = 2000;
    function getGoodsMsg(){
        $am = self::$amount;
        echo "当前有{$am}件商品";
    }

    function getLists(){
        $this -> display();
    }

    function getDetails(){
        echo "获取详细信息";
    }
}