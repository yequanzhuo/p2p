<?php
//数据库配置信息
error_reporting(0);
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DBNAME","used");
$link = mysql_connect(HOST,USER,PASS) or die("数据库失败！");
mysql_select_db(DBNAME,$link);
mysql_set_charset('utf8');


?>