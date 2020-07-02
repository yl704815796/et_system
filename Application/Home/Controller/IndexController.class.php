<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Login/login'));
		}
	}
    public function index(){
        $this->display();
    }
}