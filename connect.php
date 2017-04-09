<?php
//require()函数会将目标档案的内容读入，并且把自己本身代换成这些读入的内容。
//equire_once() 函数会先检查目标档案的内容是不是在之前就已经导入过了
//如果是的话，便不会再次重复导入同样的内容
require_once("config.php");
//连库
if(!($con=mysql_connect(HOST,USERNAME,PASSWORD))){
	echo mysql_error();
}
//选择demo这个数据库
if(!mysql_select_db("demo")){
	echo mysql_error();
}
//字符集
if(!mysql_query("set names utf8")){
	echo mysql_error();
}
?>