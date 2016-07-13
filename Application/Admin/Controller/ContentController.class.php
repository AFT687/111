<?php
namespace   Admin\Controller;
use Think\Controller;
class ContentController extends Controller {
	public function publishnew(){
		$content = M('aft_message_content');
		$data['title'] = $_POST['title'];
		$data['content'] = $_POST['content'];
		$data['content_part'] = $_POST['content_part'];
		$data['author'] = $_POST['author'];
		$data['createtime'] = time();
		move_uploaded_file($_FILES['file']['tmp_name'], './Uploads/'.$_FILES['file']['name']);
		$url = '../../Uploads/'.$_FILES['file']['name'];
		$data['img'] = $url;
		if($content->add($data)) {
			$this->success("发布成功",U('Index/index'));
		}
	}
	public function msg(){
		if (!empty($_SESSION)) {
			$msg_content = M('aft_message_content');
			$data = M('aft_message_content')->where()->select();
			$this->assign('list',$data);
			$this->display();
		} else {
			$this->success("请登录",U('Index/index'));
		}
	}
	public function pagelimit(){
		$limit['id'] = '1';
		$limit['limit'] = $_POST['pagelimit'];
		$apage = M('aft_page_limit');
		if($apage->save($limit)) {
			$this->success("修改成功",U('Index/index'));
		}
	}
	public function folder(){
		$dir = './Uploads';
		$dh = opendir($dir);
		while (($file = readdir($dh)) !== false) {
			if ($file != "." && $file != ".."){
				echo '<a href="./delete?name='.$file.'"><img src="../.'.$dir.'/'.$file.'"/></a>';
			}
		}
		closedir($dir);
	}
	public function delete($name){
		$url = "./Uploads/".$name;
		$del = unlink($url);
		if ($del) {
			$this->success("删除成功",U('Content/msg'));
		}
	}
}