<?php
namespace Admin\Model;
use Think\Model;
class TeacherModel extends Model
{
    //添加时调用create方法允许接收的字段
    protected $insertFields='tid,tname,tpassword,tsex,ttitle,tphone,tQQ,temail';
    //定义验证规则
    protected $_validate=array(
        array('tid','require','教师工号不能为空',1),
        array('tname','require','教师名称不能为空',1),
        array('tpassword','require','登录密码不能为空',1)
    );
    public function search($perPage=5)
    {
        /*翻页*/
        //取出总的记录数
        $count=$this->count();
        $pageObj=new \Think\Page($count,$perPage);
        //设置样式
        $pageObj->setConfig('next','下一页');
        $pageObj->setConfig('prev','上一页');
        //生成上一页下一页的字符串
        $pageString=$pageObj->show();
        /*取某一页的数据*/
        $data=$this->limit($pageObj->firstRow.','.$pageObj->listRows)->select();
        /*返回数据*/
        return array(
            'data'=>$data,//数据
            'page'=>$pageString,//翻页字符串
        );
    }
}