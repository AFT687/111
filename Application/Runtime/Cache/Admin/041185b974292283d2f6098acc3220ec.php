<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta charset="utf-8">
	<style type="text/css">
		.loginbox{
			width: 300px;
			height: 200px;
			position: absolute;
			left: 40%;
			top: 30%;
		}
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-color: #ccc;
		}
		.loginbox td{
			font-family: '微软雅黑';
		}
		.submit{
			font-family: '微软雅黑';
			width: 100px;
			height: 25px;
			text-indent: 0;
			padding: 0;
		}
		td input{
			padding: 5px;
			text-indent: 5px;
		}
	</style>
</head>
<body>
    <form method="post" action="<?php echo U('Index/logincheck');?>">
    	<table class="loginbox">
    		<tr>
    			<td>用户名</td>
    			<td><input type="text" name="user"></td>
    		</tr>
    		<tr>
    			<td>密码</td>
    			<td><input type="password" name="pwd"><br></td>
    		</tr>
    		<tr>
    			<td colspan="2" align="center"><input type="submit" value="登录" class="submit"></td>
    		</tr>
    	</table>
    </form>
</body>
</html>