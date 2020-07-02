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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="http://172.16.122.194/et_system/test.php"></script>
  <script type="text/javascript" charset="utf-8">
    function show_news(){
      var news = document.getElementById("news");
      news.style.display = "block";
    }
    // 用户点击新闻列表项后触发此操作,实现的功能是显示相应的新闻内容
    function show_new(i){
      // 显示新闻内容页
      show_news();
      // 将新闻内容加到页面上
      show(i);
    }
    // 将相应的新闻内容加载到屏幕上,其中id的值为新闻编号
    function show(id){
      // 显示新闻标题
      document.getElementById("news_Title").innerHTML=json[id].title;
      // 显示新闻内容
      document.getElementById("neirong").innerHTML=json[id].content;
      // 获取新闻作者以及发布时间信息
      var info = "作者: "+json[id].author+"&nbsp;&nbsp;发表日期: "+json[id].date;
      // 将新闻作者以及发布时间等信息显示出来
      document.getElementById("news_Info").innerHTML=info;
    }
  </script>
</head>
<body>

<!-- page-wrapper开始 -->
<div id="page-wrapper">
  <div class="graphs">
    <div class="panel panel-default">
      <div class="panel-heading page-title">新闻公告</div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default snewsTitle">
            <div class="panel-heading">
              最新公告
            </div>
            <div class="content" id="news">
              <h1 id="news_Title" class="news_Title">新闻题目</h1>
              <h4 id="news_Info" class="news_Info">作者: Waylon&nbsp;&nbsp;发表时间: 2019-3-14</h4>
              <div id="line"></div>
              <div id="neirong">正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容正文内容</div>
            </div>
          </div>
          <div class="panel panel-default snewsTitle">
            <div class="panel-heading">
              华软要闻
              <a href="#" class="pull-right">更多&gt;</a>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                <a href="index.html">
                  <span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;关于召开2017年教学质量年度报告数据内容分工工作会议。<small class="pull-right"> 2018-3-20</small>
                </a>
              </li>
              <li class="list-group-item">
                <a href="index.html">
                  <span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;关于召开2017年教学质量年度报告数据内容分工工作会议。<small class="pull-right"> 2018-3-20</small>
                </a>
              </li>
              <li class="list-group-item">
                <a href="index.html">
                  <span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;关于召开2017年教学质量年度报告数据内容分工工作会议。<small class="pull-right"> 2018-3-20</small>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              教师公告
              <a href="#" class="pull-right">更多&gt;</a>
            </div>
            <ul class="list-group">
              <script>
                for(i=0; i<json.length; i++) {
                  str = "";
                  // 生成<li class="list-group-item" onclick="show_new();">
                  str = str + '<li class="';
                  str = str + 'list-group-item';
                  str = str + '" onClick=';
                  str = str + '"show_new(';
                  str = str + i;
                  str = str + ');">';
                  str = str + '<a href="';
                  str = str + '#';
                  str = str + '">';
                  // 生成图标
                  str = str + '<span class="';
                  str = str + 'glyphicon glyphicon-list-alt';
                  str = str + '">';
                  //加入新闻标题
                  str = str + '&nbsp;'+json[i].title;
                  str = str + '</span>';
                  // 生成samll标签
                  str = str + '<small class="';
                  str = str + 'pull-right';
                  str = str + '">';
                  // 生成发表日期
                  str = str + json[i].date;
                  str = str + '</small></a></li>';
                  document.write(str);
                }
              </script>
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