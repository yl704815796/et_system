<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>教务管理系统</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="/project/Public/css/style.css" media="all" />
	
</head>
<body class="login">
	<section>
		<h1>教务管理系统</h1>
		<form method="post" >
			<input type="text" name="userID" />
			<input type="password" name="pwd"  />
			<input class="blue" type="submit" value="登　录" />
		</form>
		<p><a href="#">忘记密码?</a></p>
	</section>

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
</script>
</body>
</html>