<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我的博客</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/abc/Public/Css/basic.css">
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
			<li><a href="<?php echo U('Index/start');?>">首页</a></li>
			<li><a href="<?php echo U('Content/aboutme');?>">关于我</a></li>
			<li><a href="#">个人日记</a></li>
			<li><a href="<?php echo U('Content/diary');?>">学习笔记</a></li>
			<li><a href="#">留言板</a></li>
		</ul>
    </div>
    <div class="head"></div>

    <div class="clude">
    	<div class="recommoned">文章推荐</div>
    	<div class="msgleft">
	    	<?php if(is_array($content)): foreach($content as $k=>$v): ?><div>
	    			<div class="title"><a href="<?php echo U('Content/message',array('id'=> $v['id']));?>" style="text-decoration:none"><?php echo ($v["title"]); ?></a></div>
	    			<div>
	    				<div class="msgcore"><img src="<?php echo ($v['img']); ?>" width="200px" height="200px"></div>
	    				<div class="msgcore" style="position:absolute;width:400px;margin:10px 0 0 30px"><div style="overflow:hidden;text-overflow:ellipsis;max-height:144px"><?php echo ($v["content_part"]); ?></div>
	    				<div style="text-align:right;margin-top:10px;"><a href="<?php echo U('Content/message',array('id'=> $v['id']));?>" style="text-decoration:none;border:2px solid #F4A460;padding:5px;background-color:#F4A460;color:#fff;border-radius:5px;">阅读全文</a></div>
	    				</div>
	    			</div>
	    			<div class="remark">发布时间: <?php echo ($v["time"]); ?>&nbsp作者: <?php echo ($v["author"]); ?></div>
	    		</div><?php endforeach; endif; ?>
	   		 <input name="num" type="hidden" value="<?php echo ($num); ?>" id="num">
	   		 <input name="npage" type="hidden" value="<?php echo ($npage); ?>" id="npage">
	   		 <div id="page"></div>
	    </div>
	    <div class="msgright"></div>
	</div>
</body>
<script type="text/javascript">
	window.onload = function(){
		var num = document.getElementById('num').value;
		var page = document.getElementById('page');
		var npage = document.getElementById('npage').value;
		if (npage) {
			var l = npage - 1;
			var r = npage*1 + 1;
			var x = document.createElement('a');
			var span = document.createTextNode('<');
			var div = document.createElement('div');
			x.setAttribute('href',"<?php echo U('Content/diary/p/"+l+"');?>");
			x.appendChild(span);
			div.appendChild(x);
			page.appendChild(div);
			for (var i = 0; i < num; i++) {
				var x = document.createElement('a');
				var span = document.createTextNode(i+1);
				var div = document.createElement('div');
				x.setAttribute('href',"<?php echo U('Content/diary/p/"+(i+1)+"');?>");
				x.appendChild(span);
				div.appendChild(x);
				page.appendChild(div);
			}
			var x = document.createElement('a');
			var span = document.createTextNode('>');
			var div = document.createElement('div');
			x.setAttribute('href',"<?php echo U('Content/diary/p/"+r+"');?>");
			x.appendChild(span);
			div.appendChild(x);
			page.appendChild(div);
		}
	}
</script>
</html>