<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 14:11:02
         compiled from "D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\User\showuser.html" */ ?>
<?php /*%%SmartyHeaderCode:3232557ff25769f7dc1-31137349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0876abe4784757e6360362794b7ff1dff67dd053' => 
    array (
      0 => 'D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\\User\\showuser.html',
      1 => 1476328722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3232557ff25769f7dc1-31137349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ff2576a369d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff2576a369d')) {function content_57ff2576a369d($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['userinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
    <div>
        <span><?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
</span>
        <span><?php echo $_smarty_tpl->tpl_vars['value']->value["name"];?>
</span>
        <span><?php echo $_smarty_tpl->tpl_vars['value']->value["age"];?>
</span>
        <span><?php echo $_smarty_tpl->tpl_vars['value']->value["address"];?>
</span>
        <span><a href="<?php echo @__CONTROLLER__;?>
/update/name/<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
">修改</a></span>
    </div>
    <?php } ?>
</body>
</html><?php }} ?>