<?php
require_once("../connect.php");
//通过隐藏标签传过来的id
//	$id = $_GET['id'];
	$id=$_POST["id"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$description= $_POST["description"];
	$content=$_POST["content"];
	$dateline=time();//获取时间戳
	//更新数据
	$updatesql="update text set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where id='$id'";
//	echo $insertsql;
	//数据入库
	if(mysql_query($updatesql)){
		echo "<script>alert('文章更新成功');windows.location.href='article.modify.php'</script>";
	}else{
		echo "<script>alert('文章更新失败');windows.location.href='article.modify.php'</script>";
	}
?>