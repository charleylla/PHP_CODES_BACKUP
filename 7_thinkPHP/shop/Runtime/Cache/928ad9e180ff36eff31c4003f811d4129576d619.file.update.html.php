<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 14:15:57
         compiled from "D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\User\update.html" */ ?>
<?php /*%%SmartyHeaderCode:1117557ff0461e5db17-62062037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '928ad9e180ff36eff31c4003f811d4129576d619' => 
    array (
      0 => 'D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\\User\\update.html',
      1 => 1476339355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1117557ff0461e5db17-62062037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ff0461e934c',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ff0461e934c')) {function content_57ff0461e934c($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        div{
            margin-top:10px;
        }
        span{
            width:100px;
            display: inline-block;
        }
    </style>
</head>
<body>
<form action="<?php echo @__SELF__;?>
" method="POST">
    <div>
        <span>name: </span><input type="text" value = "<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" name="name">
    </div>
    <div>
        <span>age: </span><input type="text" value = "<?php echo $_smarty_tpl->tpl_vars['info']->value['age'];?>
" name="age">
    </div>
    <div>
        <span>address:</span><input type="text" value = "<?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
" name="address">
    </div>
    <div>
        <span></span><input type="submit" value="提交">
    </div>
    <div>
        <span></span><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" name="id" hidden>
    </div>
</form>
</body>
</html><?php }} ?>