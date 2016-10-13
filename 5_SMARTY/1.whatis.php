<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/10
 * Time: 15:41
 */

/*
 *  原理：
 *      1.读取模板文件
 *      2.将模板文件替换成相应的php文件
 *  读取template中的文件，使用正则进行替换，写入到template_c中
 *  中间要用到缓存原理：如果该编译文件存在，不重新编译。如果该文件不存在，或者template中的文件的修改时间大于template_c中的修改时间，那么就重新生成。
 *  
 */