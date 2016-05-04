<?php if (!defined('THINK_PATH')) exit();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<!--<script type="text/javascript" src="/js/cookies.js"></script>-->
<body>
<form method="post" action="http://localhost/eclipse/XSStest/index.php/Home/Back/check">
    用户名：
    <input name='username' type='text'>
    <br>
    <br>
    密码：
    <input name='password' type='password'>
    <input type="submit" value="登录" />
</form>
</body>
</html>