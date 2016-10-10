<?php

/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 14:26
 */

// User类，用来操作user表，继承基础模型类
class User extends Model
{
    public function getUsers(){
        $sql = "select * from {$this -> table}";
        $users = $this -> db ->getAllAssoc($sql);
        return $users;
    }
}