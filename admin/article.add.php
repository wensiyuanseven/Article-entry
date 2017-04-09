<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>发布文章</title>
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
    <td  style="height="287"; align="left"; valign="top"; bgcolor="#FFFF99";" ><p><a href="article.add.php">发布文章</a></p>
    <p><a href="article.manage.php">管理文章</a></p>      <a href="article.add.php"></a></td>
    <td width="837" valign="top" bgcolor="#FFFFFF">
   <!-------------------- method="post"---action="article.add.handle.php"----------------------------->
    <form id="form1" name="form1" method="post" action="article.add.handle.php">
      <table width="779" border="0" cellpadding="8" cellspacing="1">
        <tr>
          <td colspan="2" align="center">发布文章</td>
          </tr>
        <tr>
          <td width="119">标题</td>
          <td width="625"><label for="title"></label>
            <input type="text" name="title" id="title" /></td>
        </tr>
        <tr>
          <td>作者</td>
          <td><input type="text" name="author" id="author" /></td>
        </tr>
        <tr>
          <td>简介</td>
          <td><label for="description"></label>
            <textarea name="description" id="description" cols="60" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>内容</td>
          <td><textarea name="content" cols="60" rows="15" id="content"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF99"><strong>版权所有</strong></td>
  </tr>
</table>
</body>
</html>
