<?php

class AuthControl extends Control{
	public function __init(){
		if(!session('aid')){
			$this->error('请先登录，然后操作','Login/login');
		}
	}
}