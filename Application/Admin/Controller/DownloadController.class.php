<?php
namespace Admin\Controller;
use Think\Controller;
class DownloadController extends CommonController {
    public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Home/Login/login'));
		}
	}

	public function download_file(){
	  //获取文件目录
	  $mfs=M("filesort");
      $filesort=$mfs->select();

      if(IS_POST){
        $fsid=$_POST['fsid'];//文件夹id
        $fsname=M('filesort')->find($fsid);
        $filelist=M('file')->where('fsid='.$fsid)->select();
        session_start();
        $_SESSION['fsname']=$fsname['fsname'];

      }

      $this->assign('fs',$filesort);
      $this->assign('fl',$filelist);
      $this->display();
	}
	public function download(){
        
    $file_name =$_GET['f'];     //下载文件名
        $file_name=iconv("UTF-8","gb2312", $file_name);
        $path = "./file/";  //下载文件存放根目录
    $file_dir=$_SESSION['fsname'];

    $file_dir=iconv("UTF-8","gb2312", $file_dir);        //下载文件存放目录     
    //检查文件是否存在    
    if (! file_exists ( $path.$file_dir.'/' . $file_name )) {
      header('HTTP/1.1 404 NOT FOUND'); 


    } else {
      //以只读和二进制模式打开文件   

      $file = fopen ( $path.$file_dir.'/' . $file_name, "rb" ); 

      //告诉浏览器这是一个文件流格式的文件    

      Header ( "Content-type: application/octet-stream" ); 

      //请求范围的度量单位  

      Header ( "Accept-Ranges: bytes" );  

      //Content-Length是指定包含于请求或响应中数据的字节长度    

      Header ( "Accept-Length: " . filesize ( $path.$file_dir.'/' . $file_name ) );  

      //用来告诉浏览器，文件是可以当做附件被下载，下载后的文件名称为$file_name该变量的值。

      Header ( "Content-Disposition: attachment; filename=" . $file_name );    

      //读取文件内容并直接输出到浏览器    

      echo fread ( $file, filesize ($path.$file_dir.'/' . $file_name ) );    

      fclose ( $file );    

      exit ();    
        }
	}
//删除文件
	public function delete(){
        
	    }
}