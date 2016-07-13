<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>管理系统</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/abc/Public/Css/msg.css">
	<style type="text/css">
		td{font-family: "微软雅黑"}
		tr{margin-bottom: 10px;}
	</style>
</head>
<body>
	<div class="ctl_left">
		<div>
			<div style="height:30px;width:280px;z-index:9;background-color:#fff;position:relative;"></div>
			<div id="msg" class="msg">文章管理</div>
			<div id="f_msg" class="f_msg" style="background-color:#fff;z-index:8;">
				<div onclick="change(0)" class="fl_1">文章发布</div>
				<div onclick="change(1)" class="fl_1">文章列表</div>
				<div onclick="change(2)" class="fl_1">文章分页</div>
			</div>
		</div>
		<div>
			<div class="msg">文件管理</div>
			<div id="f_msg2" class="f_msg">
				<div onclick="change(3)" class="fl_1">文件管理</div>
				<div class="fl_1">文章列表</div>
				<div class="fl_1">文章分页</div>
			</div>
		</div>
	</div>
	<div class="ctl_right">
		<div class="r_msg">
			<div>文章发布</div>
	 		<form method="post" action="<?php echo U('Content/publishnew');?>" enctype="multipart/form-data">
	 			<table width="800px" style="margin:0 auto;">
	 			<tr>
	   				<td>标题</td>
	   				<td><input name="title" type="text" style="width:573px;height:40px;font-size:16px;text-indent:16px;"></td>
	   			</tr>
	   			<tr style="height:6px;"></tr>
	   			<tr>
	    			<td>文章概要</td>
	    			<td><textarea name="content_part" style="width:575px;height:80px;resize:none"></textarea></td>
	    		</tr>
	    		<tr style="height:6px;"></tr>
	   			<tr>
	    			<td>内容</td>
	    			<td><textarea name="content" style="width:575px;height:280px;resize:none"></textarea></td>
	    		</tr>
	    		<tr style="height:6px;"></tr>
	    		<tr>
	    			<td>作者</td>
	    			<td><input name="author" type="text" style="width:573px;height:40px;font-size:16px;text-indent:16px;"></td>
	    		</tr>
	    		<tr style="height:6px;"></tr>
	    		<tr>
	    			<td><label for="file">图片上传</label></td>
					<td><input type="file" name="file" id="file" /></td>
				</tr>
	    		<tr>
	    			<td colspan="2" align="center"><input type="submit" value="发布" style="height: 50px;width: 200px;font-size: 25px;border-radius: 5px;border: 0;box-shadow: 3px 3px 10px;margin-top:16px;">
	    			</td>
	    		</tr>
	    		</table>
	    	</form>
		</div>
		<div class="r_msg">
			<div>文章列表</div>
			<div>
				<form>
					<table>
						<tr>
							<th>编号</th>
							<th>标题</th>
							<th>文章概要</th>
							<th>操作</th>
						</tr>
						<?php if(is_array($list)): foreach($list as $k=>$v): ?><tr>
								<td><?php echo ($k+1); ?></td>
								<td><?php echo ($v["title"]); ?></td>
								<td><?php echo ($v["content_part"]); ?></td>
								<td><a href="">修改</a><a href="">删除</a></td>
							</tr><?php endforeach; endif; ?>
					</table>
				</form>
			</div>
		</div>
		<div class="r_msg">
			<div>分页修改</div>
			<form method="post" action="<?php echo U('Content/pagelimit');?>">
				<input name="pagelimit" type="text"><br>
				<input type="submit" value="修改">
			</form>
		</div>
		<div class="r_msg">
			<a href="#" onclick="send()">查看文件</a>
			<div id="folder"></div>
		</div>
	</div>
	<script type="text/javascript" src="/abc/Public/Js/msg.js"></script>
	<script type="text/javascript" src="/abc/Public/Js/jquery.min.js"></script>
	<script type="text/javascript">
		function send(){
			$.ajax({
				data:"",
				method:"post",
				url:'<?php echo U('Content/folder');?>',
				success:function(data){
					document.getElementById('folder').innerHTML = data;
				}
			})
		}
	</script>
</body>
</html>