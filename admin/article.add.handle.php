<?php
require_once("../connect.php");
//把传过来的信息入库,在入库之前对所有的信息进行校验
//如果文章不存在 并且为空
if(!(isset($_POST["title"])&&(!empty($_POST["title"])))){
	echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
}
	$title=$_POST["title"];
	$author=$_POST["author"];
	$description= $_POST["description"];
	$content=$_POST["content"];
	$dateline=time();//获取时间戳
	//写入数据
	$insertsql="insert into text(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
//	echo $insertsql;
	//数据入库
	if(mysql_query($insertsql)){
		echo "<script>alert('文章发布成功');windows.location.href='article.add.php'</script>";
	}else{
		echo "文章发布失败";
	}
?>