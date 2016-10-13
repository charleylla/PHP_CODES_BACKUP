<?php /* Smarty version Smarty-3.1.6, created on 2016-10-13 15:53:02
         compiled from "D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1372757fe09f6a87726-49305444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffbf68a38974dd3a780d95d0f76850be3c500a8a' => 
    array (
      0 => 'D:/WWW/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/Home/View\\User\\login.html',
      1 => 1476345070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1372757fe09f6a87726-49305444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57fe09f6ab02f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe09f6ab02f')) {function content_57fe09f6ab02f($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        div{
            margin-top:10px
        }
        div span{
            display: inline-block;
            width:100px;
        }

        div:nth-child(3) span{
            height:48px;
            vertical-align: middle;
        }

        div:nth-child(3) input{
            vertical-align: baseline;
        }

        div:nth-child(3) div{
            border:1px solid #999999;
            width:150px;
            display: inline-block;
        }

        div:nth-child(3) div img {
            cursor: pointer;
        }

    </style>
</head>
<body>
    <form action="<?php echo @__ACTION__;?>
" method="POST">
        <div>
            <span>用户名</span><input type="text" name="username" value="">
        </div>
        <div>
            <span>密码</span><input type="password" name="password" value="">
        </div>
        <div>
            <span>输入验证码</span>
            <input type="text" name="capcha">
            <div>
                <img id = "verify_img" src="<?php echo @__CONTROLLER__;?>
/verifyImg"  onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()" alt="请输入验证码">
            </div>
        </div>
        <div>
            <span></span><input type="submit" value="登录">
        </div>
    </form>
    
    <!--<script>-->
        <!--const verifyImg = document.getElementById("verify_img");-->
        <!--verifyImg.addEventListener("click",function(){-->
            <!--this.src += "/";-->
            <!--this.src += Math.random();-->
        <!--},false)-->
    <!--</script>-->
    
</body>
</html><?php }} ?>