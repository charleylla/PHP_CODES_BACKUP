<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 23:28
 */
// 服务器中存放会话数据，浏览器中存放session_id
// session_id 就是一个普通的cookie，并且保持了值的唯一性
/*
 * 在浏览器端没有保存session_id时，此时如果浏览器请求了服务器端，服务器也开启了session_start()，
 * 则会在服务器中存放一个session_id用做服务器端数据区的标识。
 */