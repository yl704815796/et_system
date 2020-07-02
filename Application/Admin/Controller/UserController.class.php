<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
    public function __construct() {
        parent::__construct();
        if($this->userInfo === false){
            $this->error('请先登录。',U('Home/Login/login'));
        }
    }
    public function add()
    {   //判断用户是否提交了表单
        if(IS_POST){
            $model=D('teacher');
            if($model->create(I('post.'),1)){
                //插入到数据库中
                if($model->add())
                {
                    //显示成功信息并等待1秒之后跳转
                    $this->success('操作成功',U('lst'));
                    exit;
                }
            }
            //如果走到这说明上面失败了在这里处理失败的请求
            //从模型中取出失败的原因
            $error=$model->getError();
            //由控制器显示错误信息，并在3秒后跳回上一个页面
            $this->error($error);
        }
        //显示表单
        $this->display();
    }
    public function lst(){
        $model=D('teacher');
        //返回数据和翻页
        $data=$model->search();
        $this->assign($data);

        $this->display();
    }
}