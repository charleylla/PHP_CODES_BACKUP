<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 17:15:06
         compiled from "D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\User\showUser.html" */ ?>
<?php /*%%SmartyHeaderCode:2751857fefbd3015329-90159607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5240f205fe41f6bbfb420588c08f1eea44a020ca' => 
    array (
      0 => 'D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\\User\\showUser.html',
      1 => 1476349501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2751857fefbd3015329-90159607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57fefbd304c73',
  'variables' => 
  array (
    'userinfo' => 0,
    'value' => 0,
    'pageList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fefbd304c73')) {function content_57fefbd304c73($_smarty_tpl) {?><!DOCTYPE html>
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
    <div>
        <?php echo $_smarty_tpl->tpl_vars['pageList']->value;?>

    </div>
</body>
</html><?php }} ?>