<?php
//设置默认显示新闻的条数
$number = 20 ;
//从GET参数判断是否需要对显示新闻条数进行修改
if (count($_GET)>0){
	$number = $_GET['number'];
}
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];


//连接数据库
$con = mysqli_connect("localhost","root","","et_system");
//设置数据库的编码方式，一定要与数据库的编码方式相同
mysqli_set_charset($con,"utf8");
//下面一大段代码均是为了拼接出JSON格式的字符串并显示
echo "var json = [";
if($con){
	//选择要使用的数据库
	//mysqli_select_db("android",$con);
	//数据库查询语句
	$query = "SELECT * FROM news_list,news_content WHERE news_list.id = news_content.id ORDER BY news_list.id DESC";
	//通过参数设置查询数据的条目
	$query = $query." LIMIT ".$number;
	$result = mysqli_query($con,$query);//执行查询操作
	var_dump($result);
	$i = 0;
	while ($row = mysqli_fetch_array($result)){
		if($i != 0){
			echo ",";
			//fwrite($fp, ",");
		}else
		{
			$i =  1;
		}
		echo '{ "';
		echo 'title":';
		echo '"';
		echo $row['title'];
		echo '",';
		echo '"';
		echo 'author":';
		echo '"';
		echo $row['author'];
		echo '",';
		echo '"';
		echo 'date":';
		echo '"';
		echo $row['date'];
		echo '",';
		echo '"';
		echo 'content":';
		echo '"';
		echo $row['content'];
		echo '"}';
	}
}else{
	//如果连接失败，任然可以返回一条json数据
	echo '{"title":"服务器出错了","author":"waylon","data":"2019-03-14","content":重启吧，亲！"}';
}
echo "]";
mysqli_close($con);

?>