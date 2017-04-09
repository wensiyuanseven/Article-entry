<?php
require_once('../connect.php');
//在浏览器的地址栏中传入id

	$id = $_GET['id'];
	$deletesql = "delete from text where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('删除文章成功');</script>";
	}else{
		echo "<script>alert('删除文章失败');</script>";
	}

?>