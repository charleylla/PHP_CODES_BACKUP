<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        html,body{
            font-family: "微软雅黑";
        }
        .active{
            color: red;
        }
        .native{
            color: darkslategrey;
        }
    </style>
</head>
<body>
    <?php
        $login = true;
        if($login):
    ?>
    <p>你是已经login的user</p>
    <?php else: ?>
    <p>你还没有登录</p>
    <?php endif;?>
<!--  比起echo和print，这可以输出大段的内容。  -->
<!--  if 和 else后面都需要: 条件结束后需要加行endif; -->

    <p <?php if(true):?>class = "active"<?php endif;?>>尽管这样做让代码十分的丑陋和难以阅读，但它仍然是生效的。</p>

<!--  除了phpif 之外 ，还有phpfor可选择  -->
    <?php for($i = 0; $i< 5;$i ++): ?>
        <p class="native">You Are Native!!</p>
    <?php endfor;?>

<?php
    //*
    $num = 1;
    $str = "abc";
    //*/
?>

<!--
    <?php
        echo "<p class = 'active'><?php?> tags can also work in HTML comments.But this p tag will not show in HTML document,because it's still in the HTML comments.However,if you echo a function of php,you can also delivery data to the HTML document.</p>";
    ?>
-->


</body>
</html>