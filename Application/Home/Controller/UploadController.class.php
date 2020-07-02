<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends CommonController {
    public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Home/Login/login'));
		}
	}

	public function upload_file(){
		

		  //获取文件目录
		  $mfs=M("filesort");
    	$filesort=$mfs->where(array("fsupload"=>"0"))->select();
      var_dump($filesort) //选择文件上传权限，限制老师上传内容
    	//$aid=$userInfo['aid'];管理员id

    	if(IS_POST){
        $fsid=$_POST['fsid'];//文件夹id
        //echo $fsid;         
        $fsname=$mfs->find($fsid);
        //var_dump($fsname);
        $fsname=$fsname['fsname'];//文件夹名
        //echo $fsname;  

    		//上传文件信息到数据库
    		$file_data=$_FILES['files'];//文件信息

        $arr=array(
               'fname' => $file_data['name'],
               /*'ftype' => $file_data['type'],*/
               'fsid' => $fsid,
               //'aid'=>$
        );
        $add_news=M("file")->add($arr);

        if($add_news!==false){
          //上传文件到文件夹
          $res=$this->data_manage($fsname);
        }else{
          $res="文件信息插入数据库失败!";
        }
    	}

    	$this->assign('fs',$filesort);
    	$this->assign('res',$res);
      $this->display();
    }
    //上传文件到文件夹
    public function data_manage($fsname){
    	//$allowtype = array("gif","png","jpg"); //允许上传的文件格式
        //$size = 1000000; //设置允许大小1M以内的文件
        $path=iconv("UTF-8","gb2312",$fsname);//设置上传后保存文件的路径
        $filename=iconv("UTF-8","gb2312",$_FILES['files']['name']);
         if (file_exists("file/".$path.'/'.$filename))
      {
      $res= $filename . " 已存在";
      }
    else
      {
      move_uploaded_file($_FILES["files"]["tmp_name"],
      "file/".$path.'/'.$filename);
      $res= "文件成功储存在:".$fsname.'/' . $filename;
      }
    return $res;
    }
}