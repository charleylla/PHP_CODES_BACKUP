<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="./16.create_validate_code.php" alt="验证码" id = "vc" style="cursor: pointer">
    <script>
        var imgCode = document.getElementById("vc");
        imgCode.onclick = function(){
            // 只要src变了，就会重新请求
            this.src = "./16.create_validate_code.php?memeda=" + Math.random();
        }
    </script>
</body>
</html>