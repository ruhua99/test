<?php
class LoginControl extends Control{
	private $_db;
	public function __init(){
		$this->_db=M('admin');
	}

	public function out(){
		$_SESSION=array();
		session_unset();
		session_destroy();
		$this->success('退出成功','login');
	}

	
	public function login(){

		if(IS_POST){
		   $username=Q('post.username');
		   if(!$user=$this->_db->where("username='$username'")->find()){
		   	$this->error('用户名输入错误');
		   }
		   if($user['password']!=$_POST['password']){
		   	$this->error('密码输入错误');
		   }
		   $_SESSION['aid']=$user['aid'];
		    $_SESSION['username']=$user['username'];
		   go('Index/index');
			/*p($this->_db->all());
			P($_POST);*/
		}else{
			$this->display();
		}
        
		
	}
	public function code(){
		$code=new Code();
		  $code->show();
	}
	public function checkCode(){
		$stat=$_POST['code']==$_SESSION['code']?1:0;
        $this->ajax($stat);
	}
}