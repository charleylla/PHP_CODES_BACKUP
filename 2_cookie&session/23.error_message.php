<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/7
 * Time: 13:57
 */

// error信息
// 0 -> 没有错误
// 1 -> 文件过大，超过了PHP中对上传文件的大小设置
// 2 -> 文件过大，超过了表单中的元素
// 3 -> 文件没有上传完
// 4 -> 没有上传文件
// 5 -> 上传的文件大小为0，为空文件 （约定，不是错误）
// 6 -> 临时上传的目录未找到
// 7 -> 临时目录写入失败（没有写入权限）

// PHP 中允许在每个表单中设置最大尺寸
// 在表单中使用一个隐藏域，name值设置为MAX_FILE_SIZE，大小就是限制的大小
?>
<form action="#">
    <input type="hidden" name="MAX_FILE_SIZE" value = "10241024">;
</form>

<?php
// 其他配置
// 1.上传数量 max_file_uploads = 20
// 2.post数据大小 post_max_size = 8M，超过了总大小，php不处理post数据，$_POST 和 $_FILES都是空数组
// 文件仅仅可以使用post提交。PS.HTTP不适合超大型文件

?>