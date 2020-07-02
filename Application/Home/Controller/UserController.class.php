<?php
namespace Home\Controller;
class UserController extends CommonController {
   public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Login/login'));
		}
	}
	//个人信息
    public function user(){
    	$tid = $this->userInfo['tid'];  	    	 
    	$data = D('teacher')->find($tid);   	
    	$this->assign('dt',$data);
        $this->display();        
    }
}