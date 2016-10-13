<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>start</title>
</head>
<body>
    <?php
        echo "<h1>funny</h1>";
    ?>
    <?php
        //获取浏览器信息
//        echo $_SERVER['HTTP_USER_AGENT'];
        if(strpos($_SERVER['HTTP_USER_AGENT'],"MSIE")){
            echo "<p>这是IE</p>";
            // IE11+的用户代理串中已经没有MISE了
        }else{
            echo "<p>这不是IE</p>";
        }

        $str = "远水解不了近火";
//        echo $str.length;
        echo strlen($str)."<br>";
        echo strtoupper("lowercase?");
    ?>

   <!--  一个丑陋的模板引擎 -->
    <?php
        //拆分了标签
        //下面的段落会在循环的次数内进行输出

       for($i = 0;$i < 5;$i++){
    ?>
        <p>0.0<p>
    <?php
    }
    ?>

    <?php
        //解决IE11+没有MSIE的问题
        if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE")||strpos($_SERVER["HTTP_USER_AGENT"],"Trident")||strpos($_SERVER["HTTP_USER_AGENT"],"Edge")){
            echo "这是IE";
        }else{
            echo "这不是IE";
        }
    ?>
</body>
</html>