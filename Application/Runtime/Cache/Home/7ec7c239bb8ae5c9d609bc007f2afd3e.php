<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我的博客</title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
        *{
            margin: 0;
            padding: 0;
            border: 0;
        }
        .nav li{
        	display: inline-block;
        	list-style-type: none;
        	line-height: 42px;
        	font-family: "微软雅黑";
        	cursor: pointer;
        	height: 42px;
        	width: 140px;
        	text-align: center;
        	margin-left: -7px;
        	font-size: 21px;
        }
        .nav{
        	background:url(/abc/Public/Images/header.png) no-repeat;
        	width: 980px;
        	height: 98px;
        	margin: 0 auto;
        }
        .nav ul{
        	text-align: center;
        	position: absolute;
        	padding: 0;
        	margin: 0 0 0 300px;
        	height: 98px;
        	line-height: 98px;
        }
        .nav a{
            text-decoration: none;
            color: #000;
        }
        .head{
            background:url(/abc/Public/Images/head2.jpg) no-repeat;
            width: 1346px;
            height: 410px;
            margin: 0 auto;
        }
</style>
	<div class="nav">
		<ul>
			<li><a href="<?php echo U('Index/index');?>">首页</a></li>
			<li><a href="<?php echo U('Index/aboutme');?>">关于我</a></li>
			<li><a href="#">个人日记</a></li>
			<li><a href="<?php echo U('Index/diary');?>">学习笔记</a></li>
			<li><a href="#">留言板</a></li>
		</ul>
    </div>
    <div class="head"></div>

	<div>代凡棋</div>
</body>
</html>