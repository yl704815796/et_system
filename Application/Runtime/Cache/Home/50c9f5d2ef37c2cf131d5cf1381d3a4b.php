<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" href="/et_system/Public/Home/css/style.css" />
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="/et_system/Public/Home/css/movie.css">
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>教务管理系统</title>

		<link rel="stylesheet" type="text/css" href="/et_system/Public/Home/css/movie.css">

		<script type="text/javascript" src="/et_system/Public/Home/js/jquery.min.js"></script>
		<script type="text/javascript" src="/et_system/Public/Home/js/vector.js"></script>

	</head>

	<body  class="login">
	  <section>
		<div id="container">
			<div id="output">
				<div class="containerT">

					<div class="content">
					

						<td>
							<h1 style="color:black; text-align:center">教务管理系统</h1></td>
						<form method="post" >
						   <div class="select">
								<select name="usertp">          
                        <option data-toggle="tab" value ="teacher">教师</option>
                        <option data-toggle="tab" value ="admin">管理员</option>
                                 </select>
                           </div>
							<div class="container-fluid">
								<div class="navbar-header">
								</div>
								<div id="myexample">

								</div>
							</div>
							<br>
							<input type="text" name="userID" placeholder="用户名"/>
							<input type="password" name="pwd" placeholder="密码"/>
							<input type="text" name="captcha" placeholder="验证码" />
							<img src="/et_system/Home/Login/captcha" onclick="this.src='/et_system/Home/Login/captcha/'+Math.random()" />
							<input class="blue" type="submit" value="登　录" />

						</form>
						<br>
						<p>
							<a href="#">忘记密码?</a>
						</p>
						</section>
					</div>

					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript">

$(function(){
	$('.login button').click(function(e){ 
		// 连接url
		var toLoad = $(this).attr('href');  
 
		$(this).addClass("loading"); 
 

			setTimeout(function(){window.location = toLoad}, 10000);	  
 
		e.preventDefault
	});
	
	$('input').each(function() {

       var default_value = this.value;

       $(this).focus(function(){
               if(this.value == default_value) {
                       this.value = '';
               }
       });

       $(this).blur(function(){
               if(this.value == '') {
                       this.value = default_value;
               }
       });

});
});
$(function() {
			Victor("container", "output"); //登陆背景函数
				$("#entry_name").focus();
				$(document).keydown(function(event) {
					if(event.keyCode == 13) {
						$("#entry_btn").click();
					}
				});
			});
		</script>

	</body>

</html>