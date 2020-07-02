<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	//用户登录
	public function login() {
		//处理表单
		if (IS_POST) {
			//判断验证码
			//$this->checkVerify(I('post.captcha'));
			//获取用户名和密码
			$userID = I('post.userID','','trim');
			$pwd = I('post.pwd','','trim');	
			//获取用户类型
			$userType= I('post.usertp','','trim');
			//教师登陆验证
			if ($userType==='teacher'){
			  $dt=D('teacher')->find($userID);
			if($dt===null){
			    $this->error("找不到该教师工号");
			}
			  //验证密码
			  $tPwd=$dt["tpassword"];
              if($pwd!==$tPwd ){
              	$this->error("密码错误");
              }
              $userName=$dt['tname'];//查找用户名
			  $this->success('登录成功，页面跳转中',U('Home/Index/index'));
			
			}
			//管理员登陆验证
			else {
			  $dt=D('administrator')->find($userID);;：；;
			  
			  if($dt===null){
			 	$this->error("找不到该管理员账号");
			  }
			  $userName=$dt['aname'];//查找用户名
			//验证密码
			  $tPwd=$dt["apassword"];
              if($pwd!==$tPwd ){
              	$this->error("密码错误");
              }
			$this->success('登录成功，页面跳转中',U('Admin/Index/index'));			  
			}					
			  session_start();
			  $_SESSION['user_id']=$userID;
			  $_SESSION['user_name']=$userName;
			  $_SESSION['user_type']=$userType;
			  return;
		}
		$this->display();

	}  
    //生成验证码
    public function captcha(){
        $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'codeSet'=>'0123456789' //数字验证码
        );
        $verify = new \Think\Verify($config);
        return $verify->entry();
    }
	//检查验证码
    private function checkVerify($code, $id = '', $clear = true) {
        $verify = new \Think\Verify();
        $verify->reset = $clear;
        $rst = $verify->check($code, $id);
        if ($clear) {
            if ($rst !== true) {
                $this->error('验证码输入有误');
            }
        } else {
            if ($rst !== true) {
                return '0';
            }
        }
    }
}
