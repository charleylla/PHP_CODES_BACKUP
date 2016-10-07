<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/6
 * Time: 16:12
 */

// session的属性
// 有效期：默认为0
// 有效域名：仅在当前域名下有效

// session属性的来源：cookie中存储的session_id的属性，决定了session的属性
// 设置session的属性：设置cookie中的session_id属性

// 方案一：php.ini中配置
// session.cookie_lifetime = 0，关于session_id的配置，都可以在php.ini中进行

// 方案二：在开启session之前配置
// ini_set(配置项,值);
// ini_set("session.cookie_lifetime","3600");

// 方案三：Session_set_cookie_params(有效期,有效路径,有效域名,是否安全,是否HTTPONLY)
// 建议使用该方法，仅仅影响当前脚本周期，不影响其他项

// 严重建议：实际开发环境中，很少去改session的有效期属性，顶多改一下有效域