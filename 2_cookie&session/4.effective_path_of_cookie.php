<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 16:58
 */

// 有效路径
// 默认情况下，在其子目录之间设置的cookie可以相互访问。
// 在其上级目录中无法访问。

// 有效路径：cookie只在当前目录和当前目录下的子目录下可以访问。
// 通过setcookie的第四个参数，可以进行设置，设置为/下有效，表示整站有效，这样上级目录也可以访问下级目录的cookie了

setcookie("hahadada","kakadada",0,"/");

