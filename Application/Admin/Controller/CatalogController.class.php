<?php
namespace Admin\Controller;
use Think\Controller;
class catalogController extends CommonController {
    public function __construct() {
        parent::__construct();
        if($this->userInfo === false){
            $this->error('请先登录。',U('Home/Login/login'));
        }
    }

    public function catalogList(){
        //获取文件目录
        $filesort=M("filesort")->select();
        //添加文件目录
        if(IS_POST){
        $catalogName=I('post.addCatalog','','trim');
         if($catalogName!=null){
         $fsupload=I('post.fsupload');
          $data=array('fsname' => $catalogName,'fsupload'=>$fsupload);//获取文件上传权限的的值，用来区分上传权限
         
          $res=M('filesort')->add($data);
          if (!$res) {
                $this->error('添加目录失败');
            }
         $dir = iconv("UTF-8", "GBK", "file/".$catalogName);
         if (!file_exists($dir)){
            mkdir ($dir,0777,true);
         } else {
            $this->error('创建目录失败');
         }
        $this->success('添加并创建目录成功', U('Catalog/catalogList'));
        return;
        }
        }
        $this->assign('fs',$filesort);
        $this->display();
    }
}