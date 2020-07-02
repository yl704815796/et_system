<?php
namespace Admin\Controller;
use Think\Controller;
class WorkController extends CommonController {
    public function __construct() {
		parent::__construct();
		if($this->userInfo === false){
			$this->error('请先登录。',U('Home/Login/login'));
		}
	}
    
	public function work_table(){
		$msw=M('semester_work');
        $sql_year="select swyear from __TABLE__";
       
        $res = $msw->query($sql_year);//获取学年
        
        $term='1';//默认学期
       
        //学年去重
        foreach ($res as $v) {//降维
           $v=join(",",$v);          
           $temp[]=$v;
        }     
        $temp=array_unique($temp); //去重
        asort($temp) ;//按值升序排列
        $year=end($temp);//默认学年
        foreach ($temp as $k => $v) {//重组
            $temp[$k]=explode(",", $v);        
        }

        $sql_data="select * from __TABLE__
        where swyear= '".$year."' and swterm='".$term."'";
        $data=$msw->query($sql_data);//获取内容信息

        if(is_post){
          $year=$_POST['year'];
          $term=$_POST['term'];
           session_start();
            $_SESSION['year']=$year;
            $_SESSION['term']= $term;
          $sql_data="select * from __TABLE__
          where swyear= '".$year."' and swterm='".$term."'";
          $data=$msw->query($sql_data);//获取内容信息
 
        }

        $this->assign('years',$temp);
        $this->assign('dt',$data);
        $this->display();
    }
    
    public function make_work_table(){
        
        if(is_post){
        	$year=$_POST['year'];//学年
        	$semester=$_POST['semester'];//学期
        	$uploadFile_type=$_POST['uploadFile_type'];//提交文件类型
        	$date=$_POST['date'];//完成截止日期
        	$content=$_POST['content'];//内容 
            $msw=M('semester_work'); 
            //避免重复写入相同学年学期的工作表
            $sql_year="select swyear,swterm from __TABLE__";
            $data_year_term= $msw->query($sql_year);
            foreach ($data_year_term as $v) {
            //降维                                
             if(in_array($year, $v)!=null&&in_array($semester, $v)!=null) {
                $this->error('已存在该表，请重新选择学年和学期！',U('make_work_table'));
                break; 
             }
            }  
            
        	for($i=1;$i<=count($content);$i++){
        		$data= array(
        			'swcontent' => $content[$i-1], 
                    'ftid' => $uploadFile_type[$i-1],
                    'swyear'=>$year,
                    'swterm'=>$semester,
                    'swweek'=>$i,
                    'swfinishdate'=>$date[$i-1]
        	);  

        		$res=$msw->add($data);
  
        		if (!$res){
        			$this->error($res,U('make_work_table'));
        		}elseif ($i==count($content)) {
                    $this->success('保存成功！',U('Work/work_table'));exit;
                }             
        	}
                        
        }
    	$this->display();
    }
    
    public function change_work_table(){
        $msw=M('semester_work');
        $year=$_SESSION['year'];//获取学年
        $term=$_SESSION['term'];//获取学期
        $sql_data="select * from __TABLE__
        where swyear= '".$year."' and swterm='".$term."'";
        $data=$msw->query($sql_data);//获取内容信息

        if(is_post){
            //$swweek=$_POST['swweek'];//周
            $ftid=$_POST['ftid'];//提交文件类型
            $swfinishdate=$_POST['swfinishdate'];//完成截止日期
            $swcontent=$_POST['swcontent'];//内容 
            $res= array();
            for($i=1;$i<=count($swcontent);$i++){
                $sql_change_data="update __TABLE__ SET swcontent='".$swcontent[$i-1]."',ftid='".$ftid[$i-1]."',swfinishdate='".$swfinishdate[$i-1]."' where swyear= '".$year."' and swterm='".$term."' and swweek='".$i."'" ;
                $res[$i]=$msw->execute($sql_change_data);
                
                            
            }
            if($res!=null){

                if (in_array("1", $res)){
                   $this->success('保存成功！',U('Work/work_table'));exit;
                  
                }else {
                    $this->error("修改行数为0",U('change_work_table'));
                }
                 
            }

        }

        $this->assign('dt',$data);
        $this->display();
    }
    
    public function make_work_status(){
        $msw=M('semester_work');
        $year=$_SESSION['year'];//获取学年
        $term=$_SESSION['term'];//获取学期
        $number=1;

        //修改是否前端显示的状态
        $sql_change_zero="update __TABLE__ SET fid=null " ;
        $res_zero=$msw->execute($sql_change_zero);
        $sql_change_one="update __TABLE__ SET fid=1 where swyear= '".$year."' and swterm='".$term."'" ;     
        $res_one=$msw->execute( $sql_change_one);
        
        //获取所有教师 
        $data_teacher=M('teacher')->query("select tid from __TABLE__");
        //var_dump( $data_teacher);
        
        //获取工作表id
        $sql_content="select swid  from __TABLE__
        where swyear= '".$year."' and swterm='".$term."'";
        $data_content=$msw->query($sql_content);
        //var_dump( $data_content);
        //echo count($data_teacher);
        
        //降维
        foreach ($data_content as $v) {
            $v=join(",",$v);
            $temp_content[]=$v;
        }
        foreach ($data_teacher as $v) {
            $v=join(",",$v);
            $temp_teacher[]=$v;
        }
        //var_dump( $temp_content);
        //var_dump( $temp_teacher);
        //工作表id
        $work_id=$temp_content[0];
        //echo $work_id;
        
        //判断表对应的任务是否已存在
        $data_ws=M('work_status')->where('swid='.$work_id)->find();
        //var_dump($data_ws);
        if($data_ws==null){
            //插入数据
           for($i=0;$i<count( $temp_teacher);$i++){
              for ($n=0; $n < count( $temp_content); $n++) { 
               $arr= array(
                'tid' =>$temp_teacher[$i] ,
                'swid' =>$temp_content[$n] , 
           );   

                $res=M('work_status')->add($arr);
                if (!$res){
                    $this->error('数据写入错误！',U('work_table'));
                }

           }
           }
           $this->success('发布成功！',U('work_table'));exit;
        }else{
            $this->error('相同学年学期的工作表只能发布一次任务！',U('work_table'));
        }        
    }

    public function management_work_status(){
        $display_type=0;
        $mws=M('work_status');
        $sql_status="select work_status.wsid,t.name form work_status 
        join teacher  on work_status.tid=teacher.tid";

        $data_status=$mws->select();
        //$data_status=$mws->query($sql_status);
        //var_dump($data_status);
        // var_dump($data_status);
        // if(is_post){           
        //    $display_type=$_POST['display_type'];
        //    if($display_type=='1'){
        //     //$data_status=$mws->where('');
        //    }elseif($display_type=='1'){

        //    }
        // }

        $this->assign("ds",$data_status);
        $this->display();
    }
    //Ajax
    public function ajax_change_status(){
        $mws=M('work_status');
        $mession_id=$_GET['mession_id'];
        $user_type=$_GET['user_type'];
        $a_status=$_GET['status'];     
        //查询对应任务
        $data_status=$mws->where('wsid='.$mession_id)->find();
        //根据用户类型操作不同状态
        if($a_status<3){
              $a_status=$a_status+1;
              //审核不通过，修改教师状态
              if($a_status==3){
                $sql_change_status='update __TABLE__ SET tstatus=0 where wsid='.$mession_id;
                $res_t=$mws->query($sql_change_status);
                $t_status=0;
              }
              if($a_status==2){
                $sql_change_status='update __TABLE__ SET tstatus=2 where wsid='.$mession_id;
                $res_t=$mws->query($sql_change_status);
                $t_status=2;
              }
         }else{
              $a_status=0;
        }
        $sql_change_status='update __TABLE__ SET astatus='.$a_status.' where wsid='.$mession_id;

        $res_a=$mws->query($sql_change_status);
        //错误
        if($res_a!=null||$res_t!=null){
            $res='insert_error';
            $this->ajaxreturn($res);
        }
        $status=array(
            "t_status"=>$t_status,
            "a_status"=>$a_status
        );
        //$res=$mws->where('wsid='.$mession_id)->('astatus',$status);
        $this->ajaxreturn($status);
    }

}