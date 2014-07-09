<?php
class NewsControl extends Control{
	function show(){
		$db=M("news");
		$count= $db->count();
        $page=new Page($count,2);
        
        $this->assign("page",$page->show());
         
		$data=$db->where($page->limit())->all();
		$this->assign("data",$data);
		//P($data);
		$this->display();
	}
	function add(){
		if(IS_POST){
			$db=M('news');
			if($db->add()){
				 $this->success('添加成功','show');
				 
			}else{
				$this->error('失败了!','show');
			}
			//P($_POST);

		}else{
			$this->display();
		}
		 
		
	}
}