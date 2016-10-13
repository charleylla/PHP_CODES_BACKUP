<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/13
 * Time: 9:06
 */

namespace Model;
use Think\Model;

class NoPrefixTbl extends Model{
    protected $trueTableName = "no_prefix_tbl";
}