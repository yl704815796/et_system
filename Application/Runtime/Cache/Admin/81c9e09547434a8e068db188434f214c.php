<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content=" ">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>教务管理系统</title>
    <link rel="stylesheet" href="/et_system/Public/Admin/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/et_system/Public/Admin/css/bootstrap-sisenet-admin.css" type="text/css">
    <link rel="stylesheet" href="/et_system/Public/Admin/css/animate.css" type="text/css">
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
        <a href="">欢迎 工号：<span>教务员</span></a>
      </li>
      <li>
        <a href="/et_system/Admin/User/logout">
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
            <a href="#">
              <i class="glyphicon glyphicon-file"></i>
              教学常规
            </a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/et_system/Admin/Work/work_table">
                  <i class="glyphicon glyphicon-upload"></i>
                  编辑学期工作表
                </a>
              </li>
              <li>
                <a href="/et_system/Admin/Work/management_work_status">
                  <i class="glyphicon glyphicon-upload"></i>
                  管理工作表状态
                </a>
              </li>
            </ul>
          <li>
            <a href="#">
              <i class="glyphicon glyphicon-flag"></i>
              新闻公告
            </a>
            <!-- 二级菜单 -->
            <ul class="nav nav-second-level">
              <li>
                <a href="content.html">
                  <i class="glyphicon glyphicon-list"></i>
                  内容管理
                </a>
              </li>
              <li>
                <a href="content_post.html">
                  <i class="glyphicon glyphicon-edit"></i>
                  添加内容
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class="glyphicon glyphicon-file"></i>
              文件管理
            </a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/et_system/Admin/Upload/upload_file">
                  <i class="glyphicon glyphicon-upload"></i>
                  文件上传
                </a>
              </li>
              <li>
                <a href="/et_system/Admin/Catalog/catalogList">
                  <i class="glyphicon glyphicon-upload"></i>
                  文件分类
                </a>
              </li>
              <li>
                <a href="/et_system/Admin/Download/download_file">
                  <i class="glyphicon glyphicon-download"></i>
                  文件下载
                </a>
              </li>
            </ul>
            <!-- 二级菜单-->
          </li>
          <li>
            <a href="#">
              <i class="glyphicon glyphicon-list-alt"></i>
              教师信息
            </a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/et_system/Admin/User/lst">
                  <i class="glyphicon glyphicon-list-alt"></i>
                  用户列表
                </a>
              </li>
              <li>
                <a href="/et_system/Admin/User/add">
                  <i class="glyphicon glyphicon-edit"></i>
                  添加用户
                </a>
              </li>
            </ul>
            <!-- 二级菜单-->
          </li>
          <li class="logout">
            <a href="/et_system/Admin/User/logout">
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
    <meta charset="UTF-8">
    <meta name="Author" content=" ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>欢迎登陆网络技术系教务管理系统</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-sisenet-admin.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <style type="text/css">
        *{margin: 0;padding: 0;}
        a{text-decoration: none;}
        ul,li{list-style: none;}
        body{font-size: 14px;font-family: "微软雅黑";}
    </style>
</head>
<body>

  <!-- page-wrapper开始 -->
  <div id="page-wrapper">
    <div class="graphs">
      <div class="panel panel-default">
        <div class="panel-heading page-title">用户列表</div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table" id="page-table">
              <thead>
                <tr>
                  <th>工号</th>
                  <th>姓名</th>
                  <th>邮箱</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($data as $k => $v):?>
                <tr>
                  <th scope="row"><?php echo $v['tid']?></th>
                  <td><?php echo $v['tname']?></td>
                  <td><?php echo $v['temail']?></td>
                  <td>
                    <div role="presentation" class="dropdown">
                      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                          操作<span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#" id="revise" role="button" data-toggle="modal" data-target="#myModal1">编辑</a></li>
                        <li><a href="#">删除</a></li>
                        <li><a href="#">锁定</a></li>
                        <li><a href="#" role="button" data-toggle="modal" data-target="#myModal2">修改密码</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <?php endforeach;?>
                <tr>
                  <td>
                  <?php echo $page?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- page-wrapper结束 -->
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">修改用户信息</h4>
              </div>
              <div class="modal-body">
                  <form action="#">
                      <div class="form-group">
                          <label for="name">姓名：</label>
                          <input type="text" id="name" class="form-control" placeholder="请输入修改的姓名" />
                      </div>
                      <div class="form-group">
                          <label for="number">工号：</label>
                          <input type="text" id="number" class="form-control" placeholder="请输入修改的性别" />
                      </div>
                      <div class="form-group">
                          <label for="e-mail">邮箱：</label>
                          <input type="text" id="e-mail" class="form-control" placeholder="您要修改的密码"/>
                      </div>
                      <div class="form-group">
                          <label for="sex">性别:</label>
                          <input type="radio" name="sex" value="男" class="gcs-radio" id="男">男
                          <label for="男"></label>
                          <input type="radio" name="sex" value="女" class="gcs-radio" id="女">女
                          <label for="女"></label>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                  <button type="button" class="btn btn-primary">提交</button>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">修改密码</h4>
              </div>
              <div class="modal-body">
                  <form action="#">
                      <div class="form-group">
                          <label for="old-keyword">原密码</label>
                          <input type="password" id="old-keyword" class="form-control" placeholder="请输入原本的密码或通用密码" />
                      </div>
                      <div class="form-group">
                          <label for="npwd">新密码</label>
                          <input type="password"  class="form-control" placeholder="请输入新密码" name="npwd" id="npwd"/>
                      </div>
                      <div class="form-group">
                          <label for="npwd1">确认密码</label>
                          <input type="password"  class="form-control" placeholder="请再次确认密码"  name="npwd" id="npwd1" onkeyup="validate()"><span id="tishi"/></span>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                  <button type="button" class="btn btn-primary">提交</button>
              </div>
          </div>
      </div>
  </div>
    <script src="js/jQuery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <script>

    </script>
</body>
</html>
    
    <script src="/et_system/Public/Admin/js/jQuery.min.js"></script>
    <script src="/et_system/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/et_system/Public/Admin/js/jquery.singlePageNav.min.js"></script>
    <script src="/et_system/Public/Admin/js/metisMenu.min.js"></script>
    <script src="/et_system/Public/Admin/js/custom.js"></script>
</body>
</html>