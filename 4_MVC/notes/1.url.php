<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 9:18
 */

/*
 *  URL 例子
 *      http://www.charleyshop.com/index.php?p=admin&c=goods&a=add
 *      向商城中添加一个商品的例子
 *
 *  .htaccess
 *      服务器分布式配置，告诉 Apache 重定向到 index.php 入口文件。
 *      <IfModule mod_rewrite.c>
            Options + FollowSymLinks
            RewriteEngine on
            # Send request via index.php
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule ^(.*)$ index.php/$1 [L]
        </IfModule>
 *
 */