<?php 
	require_once('connect.php');
	$sql = "select * from text order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[]= $row;
		}
	}
	//print_r($data);
	//echo $data[0][title];
	//看php书本第88页
	/*少了一个[ ] 是应为 foreach($data as $value)中
		$data就代表索引
	  */
	 
		
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
<!-- 头部-->
<div id="header">
	<div id="logo">
		<h1><a href="#">心灵鸡汤<sup></sup></a></h1>
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
	<?php
		if(empty($data)){	
			echo "当前没有文章，请管理员在后台添加文章";
		}else{
			/*少了一个[ ] 是应为 foreach($data as $value)中
				$data就代表索引
	  		*/
			foreach($data as $value){
	?>
		<div class="post">
			<h1 class="title"><?php echo $value['title']?><span style="color:#ccc;font-size:14px;">　　作者：<!--作者放置到这里--><?php echo $value['author']?></span></h1>
			<div class="entry">
				<?php echo $value['description']?>
			</div>
			<div class="meta">
				<p class="links"><a href="article.show.php?id=<?php echo $value['id']?>" class="more">查看详细</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
			</div>
		</div>
	<?php
			}
		}
	?>
	</div>
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="get" action="article.search.php">
					<fieldset>
					<input type="text" id="s" name="key" value="" />
					<input type="submit" id="x" value="搜索文章" />
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