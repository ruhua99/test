<?php 
class NewsControl extends Control{
	private $_db;
	public function __init(){
		$this->_db=K('news');
		 
	}
	//显示文章内容
	function content(){
		//P($_REQUEST);
		 $id=Q("get.id",null,"intval");
		 if($id){
		 	$row=$this->_db->find($id);
		 	$this->assign("row",$row);
		 	//$this->row=$row;
		 	$this->display('cc');
		 }else{
		 	 
		 }
		  
		 

	}
}