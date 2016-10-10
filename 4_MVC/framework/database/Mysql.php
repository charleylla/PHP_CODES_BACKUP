<?php

/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 11:14
 */

// 数据库操作类
class Mysql
{
    protected $conn = false;
    protected $sql;

    // constructor, to connect database, select database and set charset
    public function __construct($config = array())
    {
        $host = isset($config["host"]) ? $config["host"] : "localhost";
        $user = isset($config["user"]) ? $config["user"] : "root";
        $password = isset($config["password"]) ? $config["password"] :"";
        $dbname = isset($config["dbname"]) ? $config["dbname"] : "";
        $port = isset($config["port"]) ? $config["port"] : "3306";
        $charset = isset($config["charset"]) ? $config["charset"] : "utf-8";

        // 连接数据库
        // 如果连接失败（返回false）就终止程序
        $this -> conn = mysql_connect("$host:$port",$user,$password) or die("Database Connect Error");

        // 设置 charset
        $this.setCharSet($charset);
    }

    // 设置 charset 的方法
    private function setCharSet($charset){
        $sql = "set names" . $charset;
        // 调用 query 方法，执行查询
        $this -> query(sql);
    }

    // 执行 SQL 语句的方法
    public function query($sql){
        $this -> sql = $sql;
        // PHP_EOL -> 换行符，unix -> \n windows -> \r\n mac -> \r
        $str = $sql . "[" . date("Y-m-d H:i:s") ."]" .PHP_EOL;

        // 记录日志操作到日志文件中
        // FILE_APPEND -> 如果文件已经存在，则在文件中追加内容而不是覆盖原来的文件
        file_put_contents("log.txt",$str,FILE_APPEND);

        // 执行查询操作
        $result = mysql_query($this -> sql,$this -> conn);

        if(!$result){
            die("ERROR !"."<br>" . $this -> sql);
        }

        return $result;
    }

    // 获取查询结果的第一行
    public function getOneRow($sql){
        $result = $this -> query($sql);
        $row = mysql_fetch_row($result);
        // mysql_fetch_row -> 返回根据所取得的行生成的数组，如果没有更多行则返回 FALSE。
        // 查询的结果是（$result）是以表格的形式返回的
        // mysql_fetch_row 的作用就是去除这个表中的第一行，这是一个包含了查询结果的数组
        if($row){
            return $row;
        }else{
            return false;
        }
    }

    // 获取第一行关联数组
    // mysql_fetch_assoc -> 返回具有相应列键值的数组， mysql_fetch_row 返回的是数字键值
     public function getRowAssoc($sql){
         $result = $this -> query($sql);
         $row = mysql_fetch_assoc($result);
         $list = array();
         if($row){
             return $row;
         }
         return false;
     }

    // 获取所有的关联数组
    // 返回一个二位数组，子元素是每一行的关联数组
     public function getAllAssoc($sql){
         $result = $this -> query($sql);
         $lists = array();
         while($row = mysql_fetch_assoc($result)){
             $lists[] = $row;
         }
         return $lists;
     }

    // 获取所有的行，返回一个二维数组
     public function getAllRow($sql){
         $result = $this -> query($sql);
         $lists = array();
         while($row = mysql_fetch_row($result)){
            $lists[] = $row;
         }
         return $lists;
     }

     // 获取上一步 insert 操作产生的id
    public function getInsertID(){
        return mysqli_insert_id($this -> conn);
    }

    // 获取errno
    // mysql_errno — 返回上一个 MySQL 操作中的错误信息的数字编码 -> 数字信息
    // 返回上一个 MySQL 函数的错误号码，如果没有出错则返回 0（零）。
    // 从 MySQL 数据库后端来的错误不再发出警告，要用 mysql_errno() 来提取错误代码。
    public function getErrno(){
        return mysql_errno($this -> conn);
    }

    // 返回error - 返回上一个 MySQL 操作中错误信息的文本信息 -> 文本错误信息
    public function getError(){
        return mysql_error($this -> conn);
    }



}