<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	protected $userInfo = false;  //用户登录信息（未登录为false）
	//构造方法
	public function __construct() {
		parent::__construct();
		//登录检查
		$this->checkUser();
	}
	//检查登录
	public  function checkUser(){
		$user_type=$_SESSION['user_type'];
		if($user_type==="admin"){
			$userinfo = array(
				'tid' => session('user_id'),       //用户id
				'tname' => session('user_name'),  //用户名
			);
			$this->userInfo = $userinfo;    //保存登录后的信息
			$this->assign($userinfo);     //为模板分配用户信息变量
		}
	}
    //退出
	public function logout(){
		session('[destroy]');
		$this->success('退出成功',U('Home/Login/login'));
	}
}