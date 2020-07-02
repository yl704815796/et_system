<?php
namespace Home\Controller;
use Think\Controller;
class WorkController extends CommonController {
    public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Login/login'));
		}
	}
	public function work_table(){
        $this->display();
    }
}