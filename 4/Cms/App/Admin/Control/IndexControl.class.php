<?php
//测试控制器类
class IndexControl extends AuthControl{

    function index(){
        $this->display();
    }
    public function welcome(){
		echo '欢迎';
	}
}
?>