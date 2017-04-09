<?php 
	require_once('connect.php');
	//intval()本函数可将变量转成整数类型
	$id = intval($_GET['id']);
	$sql = "select * from text where id=$id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}else{
		echo "这篇文章不存在";
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>文章发布系统</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#">php与mysql<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="article.list.php">文章</a></li>
			<li><a href="about.php">关于我们</a></li>
			<li><a href="contact.php">联系我们</a></li>
		</ul>
	</div>
</div>
</div>

<div id="page">
	<div id="content">
		<div class="post">
			<h1 class="title"><!--文章标题放置到这里--><?php echo $row['title']?>
				<span style="color:#ccc;font-size:14px;">　　作者：<!--作者放置到这里-->
					<?php echo $row['author'];?>
				</span>
			</h1>
			<div class="entry">
				<!--文章内容放置到这里-->
				<?php echo $row['content']?>
			</div>
		</div>
	</div>
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="get" action="">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">
	<p id="legal"></p>
</div>
</body>
</html>