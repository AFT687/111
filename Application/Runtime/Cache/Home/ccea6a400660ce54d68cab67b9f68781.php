<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta charset="utf-8">
</head>
<body>
    <form method="post" action="<?php echo U('Index/logincheck');?>">
    	<input type="text" name="user">用户名
    	<input type="password" name="pwd">密码
    	<input type="submit" value="登录">
    </form>
</body>
</html>