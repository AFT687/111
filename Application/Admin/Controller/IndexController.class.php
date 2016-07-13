<?php
namespace   Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if (empty($_SESSION)) {
            $this->success("请登录",U('Index/login'));
        } else {
            $this->assign("name",$_SESSION['username']);
            $this->display();
        }
     }
     public function register(){
     	$User = M('aft_pam_account');
    	$data['username'] = $_POST['user'];
    	$data['password'] = md5($_POST['pwd']);
    	if ($User -> add($data)) {
    		session_start();
    		$_SESSION['username'] = $_POST['user'];
     		$_SESSION['password'] = $_POST['pwd'];
    		$this->success("注册成功",U('Index/index'));
    	}
     }
     public function passport(){
     	$this->display();
     }
     public function login(){
     	$this->display();
     }
     public function logincheck(){
     	session_start();
     	$User = M('aft_pam_account');
     	$data['username'] = $_POST['user'];
     	$result = $User->where($data)->select();
     	if (md5($_POST['pwd']) == $result[0]['password']){
     		$_SESSION['username'] = $_POST['user'];
     		$_SESSION['password'] = $_POST['pwd'];
     		$this->success("成功",U('Index/index'));
     	}else {
     		$this->error("失败");
     	}
     }
     public function logout(){
     	if (session_destroy()){
     		$this->success("",U('../index.php/Index/index'));
     	}
     }
}