<?php
/**
 * Created by PhpStorm.
 * User: charley
 * Date: 2016/10/5
 * Time: 17:20
 */


// 是否仅安全连接（https）传输，使用setcookie的第六个参数，默认为false
setcookie("unsafe","gaga",0,"","",false);
setcookie("safe","safe",0,"","",true);

//HTTPONLY -> 是否在http
//cookie 可以在javascript中获取到，默认为false，表示除了http请求，其他地方（如js）也可以使用

// 这是第七个参数了
setcookie("http","http",0,"","",false,false);
setcookie("httpobly","httponly",0,"","",false,true);
//设置为true后，在除去http请求之外不能使用。


?>

<script>
    document.onclick = function(){
        console.log(document.cookie);
    }
</script>