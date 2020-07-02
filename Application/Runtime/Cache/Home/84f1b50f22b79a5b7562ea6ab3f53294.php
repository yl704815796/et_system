<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content=" ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>教务管理系统</title>
    <link rel="stylesheet" href="/et_system/Public/Home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/et_system/Public/Home/css/bootstrap-sisenet.css" type="text/css">
    <link rel="stylesheet" href="/et_system/Public/Home/css/animate.css" type="text/css">
    <style type="text/css">
        *{margin: 0;padding: 0;}
        a{text-decoration: none;}
        ul,li{list-style: none;}
        body{font-size: 14px;font-family: "微软雅黑";}
    </style>
</head>
<body>
<div id="wrapper">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!--nav开始-->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand">教务管理系统</a>
    </div>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control searchform" placeholder="请输入需要查找信息">
      </div>
      <button type="submit" class="btn btn-default">提交</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="">欢迎 工号：<span><?php echo ($tid); ?>-<?php echo ($tname); ?></span></a>
      </li>
      <li>
        <a href="/et_system/Home/User/logout">
          <span class="glyphicon glyphicon-off"></span>退出
        </a>
      </li>
    </ul>
    <!-- nav结束 -->
    <!-- sidebar开始 -->
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li>
            <a href="/et_system/Home/Index/index" id="Index_index">
              <i class="glyphicon glyphicon-flag"></i>
              新闻公告
            </a>
          </li>
          <li>
            <a href="#">
              <i class="glyphicon glyphicon-file"></i>
              文件管理
            </a>
            <ul class="nav nav-second-level">
              <li>
                <a href="upload_file.html">
                  <i class="glyphicon glyphicon-upload"></i>
                  文件上传
                </a>
              </li>
              <li>
                <a href="download_file.html">
                  <i class="glyphicon glyphicon-download"></i>
                  文件下载
                </a>
              </li>
            </ul>
          <!-- 二级菜单-->
          </li>
          <li>
            <a href="/et_system/Home/Work/work_table">
              <i class="glyphicon glyphicon-tasks"></i>
              学期工作表
            </a>
          </li>
          <li>
            <a href="/et_system/Home/User/user">
              <i class="glyphicon glyphicon-user"></i>
              个人信息
            </a>
          </li>
          <li class="logout">
            <a href="/et_system/Home/User/logout">
              <span class="glyphicon glyphicon-off"></span>
              退出登录
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- sidebar结束 -->
  </nav>

<!-- mainbody -->
    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
 <div id="page-wrapper">
    <div class="graphs">
      <div class="panel panel-default">
        <div class="panel-heading page-title">学期工作表</div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            	<div class="panel panel-default snewsTitle">
                <div class="panel-heading">
                  <div id="divcss5">
                    <select>
                      <option value="1"selected="selected">2016-2017</option>
                      <option value="2">2017-2018</option>
                      <option value="3">2018-2019</option>
                    </select>
                    <select>
                      <option value="1"selected="selected">第一学期</option>
                      <option value="2">第二学期</option>
                    </select>
                    <select>
                      <option value="1"selected="selected">第一周</option>
                      <option value="2">第二周</option>
                      <option value="3">第三周</option>
                      <option value="4">第四周</option>
                      <option value="5">第五周</option>
                      <option value="6">第六周</option>
                      <option value="7">第七周</option>
                      <option value="8">第八周</option>
                      <option value="9">第九周</option>
                      <option value="10">第十周</option>
                      <option value="11">第十一周</option>
                      <option value="12">第十二周</option>
                      <option value="13">第十三周</option>
                      <option value="14">第十四周</option>
                      <option value="15">第十五周</option>
                      <option value="16">第十六周</option>
                      <option value="17">第十七周</option>
                      <option value="18">第十八周</option>
                      <option value="19">第十九周</option>
                      <option value="20">第二十周</option>
                      <option value="21">第二十一周</option>
                    </select>
                  </div>
                </div>
                <div>
                  <br>
                  <br>
                      <h3>&nbsp;&nbsp;教学文件模板提示：</h3><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;空心圆表示未完成的任务<br>
                          &nbsp;&nbsp;&nbsp;&nbsp;实心圆表示已完成的任务<br>
                      <br>
                </div>
            </div>
          </div>
          <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                工作表

                </div>
                <ul class="list-group">
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的社会实践报告完成情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                     </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的挂科和重修情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                     </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;上学期教师指标完成情况
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的社会实践报告完成情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的挂科和重修情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;上学期教师指标完成情况
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li><li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的社会实践报告完成情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的挂科和重修情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;上学期教师指标完成情况
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li><li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的社会实践报告完成情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;检查学生的挂科和重修情况。
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">
                      <span class=""></span>&nbsp;&nbsp;上学期教师指标完成情况
                      <input type="radio" id="finish" name="finish" required value="完成">完成
                      <input type="radio" id="finish" name="finish" required value="未完成">未完成
                      </span>
                    </a>
                  </li>
                  <li>
                  <a href="" role="button" class="pull-right"role="button" data-toggle="modal" data-target="#submit"><input class="button" type="submit" value="提 交" style=" width:100px; height:30px;border-radius: 10px;color: #337ab7;"/></a>

                </li>

                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page-wrapper结束 -->
</body>
</html>
    
    <script src="/et_system/Public/Home/js/jQuery.min.js"></script>
    <script src="/et_system/Public/Home/js/bootstrap.min.js"></script>
    <script src="/et_system/Public/Home/js/jquery.singlePageNav.min.js"></script>
    <script src="/et_system/Public/Home/js/metisMenu.min.js"></script>
    <script src="/et_system/Public/Home/js/custom.js"></script>
</body>
</html>