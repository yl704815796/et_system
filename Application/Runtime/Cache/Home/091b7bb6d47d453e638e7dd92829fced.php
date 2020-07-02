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
        <div class="panel-heading page-title">个人信息</div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="MODULE/User/user">基础信息</a>
                </li>
                <!--  <li>
                  <a href="#" role="button" data-toggle="modal" data-target="#myModal">修改信息</a>
                </li>-->
              </ul>
             

              <table class="table table-hover">
              
                <tbody>
                  <tr>
                    <th scope="row">工号</th>
                    <td><?php echo ($dt["tid"]); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">姓名</th>
                    <td><?php echo ($dt["tname"]); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">手机</th>
                    <td><?php echo ($dt["tphone"]); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">QQ</th>
                    <td><?php echo ($dt["tQQ"]); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">邮箱</th>
                    <td><?php echo ($dt["temail"]); ?></td>
                  </tr>
                </tbody>
                
              </table>
             
            </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
    
    <script src="/et_system/Public/Home/js/jQuery.min.js"></script>
    <script src="/et_system/Public/Home/js/bootstrap.min.js"></script>
    <script src="/et_system/Public/Home/js/jquery.singlePageNav.min.js"></script>
    <script src="/et_system/Public/Home/js/metisMenu.min.js"></script>
    <script src="/et_system/Public/Home/js/custom.js"></script>
</body>
</html>