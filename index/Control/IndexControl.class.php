<?php
//测试控制器类
class IndexControl extends Control{
    function index(){
         $db=M('news');
         p($db->find());
         p($db->find());
    }
}
?>