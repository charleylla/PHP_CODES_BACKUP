<?php

/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 11:14
 */

// 基础模型类
class Model
{
    // Mysql 类对象
    protected $db;
    protected $table; //表名
    protected $fields = array();//字段

    public function __construct($table)
    {
        // 写入 $GLOBALS 对象中的配置信息
        $dbconfig["host"] = $GLOBALS["config"]["host"];
        $dbconfig["user"] = $GLOBALS["config"]["user"];
        $dbconfig["password"] = $GLOBALS["config"]["password"];
        $dbconfig["dbname"] = $GLOBALS["config"]["dbname"];
        $dbconfig["port"] = $GLOBALS["config"]["port"];
        $dbconfig["charset"] = $GLOBALS["config"]["charset"];

        // 使用配置信息，新建一个数据库对象
        $this -> db = new Mysql($dbconfig);
        // 在初始化对象的时候，就已经连接成功了
        $this -> table = $GLOBALS["config"]["prefix"].$table;
        $this -> getFields();
    }

    // 该方法私有，不能在外部调用，这里只能通过构造方法调用
    private function getFields(){
        $sql = "DESC ".$this -> table;
        // 结果为包含所有字段信息的二维数组
        $result = $this -> db -> getAllAssoc($sql);
        // 遍历该二维数组
        foreach ($result as $v){
            // 将二维数组的字段存入 fields
            $this -> fields[] = $v["Field"];
            // 看是否是主键
            if($v["Key"] == "PRI"){
                $primary_key = $v["Field"];
            }

            if(isset($primary_key)){
                // 获取出主键，并将主键存放在 fields 中
                $this -> fields["primary_key"] = $primary_key;
            }
        }
    }

    // 插入函数
    // 向数据库中插入行，参数是一个数组
    // 数组的形式：array("字段":"值");
    public function insert($list){
        $field_list = '';  //field list string
        $value_list = '';  //value list string
        //
        foreach ($list as $k => $v) {
            // 看这个字段是否在 fields 中，这也是刚开始获取 fields 的作用~
            if (in_array($k, $this->fields)) {
                $field_list .= "`".$k."`" . ',';
                $value_list .= "'".$v."'" . ',';
            }
        }
        // Trim the comma on the right
        $field_list = rtrim($field_list,',');
        $value_list = rtrim($value_list,',');
        // Construct sql statement
        $sql = "INSERT INTO `{$this->table}` ({$field_list}) VALUES ($value_list)";
        if ($this->db->query($sql)) {
            // Insert succeed, return the last record&rsquo;s id
            return $this->db->getInsertID();
            //return true;
        } else {
            // Insert fail, return false
            return false;
        }
    }

    // 修改函数
    public function update($list){
        $uplist = ''; //update fields
        $where = 0;   //update condition, default is 0
        foreach ($list as $k => $v) {
            if (in_array($k, $this->fields)) {
                if ($k == $this->fields['pk']) {
                    // If it&rsquo;s PK, construct where condition
                    $where = "`$k`=$v";
                } else {
                    // If not PK, construct update list
                    $uplist .= "`$k`='$v'".",";
                }
            }
        }

        // Trim comma on the right of update list
        $uplist = rtrim($uplist,',');
        // Construct SQL statement
        $sql = "UPDATE `{$this->table}` SET {$uplist} WHERE {$where}";
        if ($this->db->query($sql)) {
            // If succeed, return the count of affected rows
            if ($rows = mysql_affected_rows()) {
                // mysql_affected_rows — 取得前一次 MySQL 操作所影响的记录行数
                // Has count of affected rows
                return $rows;
            } else {
                // No count of affected rows, hence no update operation
                return false;
            }
        } else {
            // If fail, return false
            return false;
        }
    }

    // 删除函数
    public function delete($pk){
        $where = 0; //condition string
        //Check if $pk is a single value or array, and construct where condition accordingly
        if (is_array($pk)) {
            // array
            $where = "`{$this->fields['pk']}` in (".implode(',', $pk).")";
        } else {
            // single value
            $where = "`{$this->fields['pk']}`=$pk";
        }
        // Construct SQL statement
        $sql = "DELETE FROM `{$this->table}` WHERE $where";
        if ($this->db->query($sql)) {
            // If succeed, return the count of affected rows
            if ($rows = mysql_affected_rows()) {
                // Has count of affected rows
                return $rows;
            } else {
                // No count of affected rows, hence no delete operation
                return false;
            }
        } else {
            // If fail, return false
            return false;
        }
    }

    // 查找函数
    public function selectByPk($pk){
        $sql = "select * from `{$this->table}` where `{$this->fields['pk']}`=$pk";
        return $this->db->getRowAssoc($sql);
    }

    // 获取总数
    public function total(){
        $sql = "select count(*) from {$this->table}";
        return $this->db->getOneRow($sql);
    }

    // 查找结果，作出限制
    public function pageRows($offset, $limit,$where = ''){
        if (empty($where)){
            $sql = "select * from {$this->table} limit $offset, $limit";
        } else {
            $sql = "select * from {$this->table}  where $where limit $offset, $limit";
        }
        return $this->db->getAllAssoc($sql);
    }

}