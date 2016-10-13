<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 09:37:49
         compiled from "D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\User\model_test.html" */ ?>
<?php /*%%SmartyHeaderCode:3268057fee410c9dd02-82958491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6d8a35a293f50d626beecd8935dca0b7998c6d' => 
    array (
      0 => 'D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\\User\\model_test.html',
      1 => 1476322667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3268057fee410c9dd02-82958491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57fee410d2b6f',
  'variables' => 
  array (
    'msg' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fee410d2b6f')) {function content_57fee410d2b6f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        span{
            display: inline-block;
            width:100px;
            margin-right:30px;
        }
    </style>
</head>
<body>
    <p>message as follows:</p>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
?>
        <div>
            <span><?php echo $_smarty_tpl->tpl_vars['value']->index;?>
</span>
            <span><?php echo $_smarty_tpl->tpl_vars['value']->value["name"];?>
</span>
            <span><?php echo $_smarty_tpl->tpl_vars['value']->value["age"];?>
</span>
            <span><?php echo $_smarty_tpl->tpl_vars['value']->value["address"];?>
</span>
        </div>
    <?php } ?>
    <hr>
</body>
</html><?php }} ?>