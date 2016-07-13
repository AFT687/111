<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我的博客</title>
	<meta charset="utf-8">
	<style type="text/css">
		.step{
			width: 500px;
			height: 300px;
			border: 1px solid;
			box-shadow: 0 0 10px #000;
			text-align: center;
			line-height: 300px;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="impress-not-supported"></div>
	<div id="impress">
		<div class="step" data-x="0" data-y="0"><h2>欢迎来到我的博客</h2>请用空格键</div>
		<div class="step" data-x="0" data-y="500" data-z="400" data-rotate-x="90"><h2>太阳当空照,花儿对我笑</h2></div>
		<div class="step" data-x="600" data-y="500" data-scale="0.3"><h2>小鸟说：</h2></div>
		<div class="step" data-x="0" data-y="-600" data-rotate-x="90" data-rotate-y="90" data-scle="0.2"><h2>好好学习，天天向上</h2></div>
		<div class="step" data-x="1300" data-y="600" data-rotate-x="90" data-rotate-z="90" data-scle="0.1"><a href="<?php echo U('Index/start');?>" style="text-decoration:none"><h2>点击进入</h2></a></div>
	</div>
</body>
	<script type="text/javascript" src="/abc/Public/Js/impress.js"></script>
	<script type="text/javascript">
		impress().init();
	</script>
</html>