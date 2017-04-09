<?php
/*
	define() 函数定义一个常量。
		常量类似变量，不同之处在于：
		在设定以后，常量的值无法更改
		常量名不需要开头的美元符号 ($)
		作用域不影响对常量的访问
		常量值只能是字符串或数字
 */
header("Content-type=text/html;charset=utf-8");
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "root");
?>