<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>管理系统</title>
	<meta charset="utf-8">
</head>
<body>
	欢迎你&nbsp<?php echo ($name); ?>
	<a href="<?php echo U('Index/logout');?>">退出</a>
	<a href="<?php echo U('Content/msg');?>">文章管理</a>
	<a href="<?php echo U('Index/passport');?>">注册子账号</a>
</body>
</html>