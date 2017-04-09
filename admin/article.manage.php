<?php
	require_once('../connect.php');
	$sql = "select * from text order by dateline desc";
	/*
	 select *  查询出所有列
		from text 从表text中取数据
		无 where   不限定条件，则取出所有数据
		order by dateline desc： 根据时间戳倒序排序
	 */
	$query  = mysql_query($sql);
	//如果sql语句正确 并且 sql语句的条数不为零 执行while循环
	if($query&&mysql_num_rows($query)){
		while($row =mysql_fetch_assoc($query)){
			////mysql_fetch_assocs数组指针
			//mysql_fetch_assoc关联2数组
			//把所有的字段都输出
			//$row本身就是一维数组数组 加上[]表示二维数组
			$data[]= $row;
		}
	}else{
		$data= array();
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
  </tr>
  <tr>
    <td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99"><p><a href="article.add.php">发布文章</a></p>
    <p><a href="article.manage.php">管理文章</a></p></td>
    <td width="837" valign="top" bgcolor="#FFFFFF"><table width="743" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
      <tr>
        <td colspan="3" align="center" bgcolor="#FFFFFF">文章管理列表</td>
        </tr>
      <tr>
        <td width="37" bgcolor="#FFFFFF">编号</td>
        <td width="572" bgcolor="#FFFFFF" style="text-align: center;">标题</td>
        <td width="82" bgcolor="#FFFFFF">操作</td>
      </tr>
	<?php 
	//判断数组是否为空
		if(!empty($data)){
			foreach($data as $value){
	?>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['title']?></td>
        <td bgcolor="#FFFFFF">
        	<a href="article.del.handle.php?id=<?php echo $value['id']?>">删除</a> 
        	<a href="article.modify.php?id=<?php echo $value['id']?>">修改</a>
        </td>
      </tr>
        <?php
        		}
		}
        ?>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
  </tr>
</table>
</body>
</html>
