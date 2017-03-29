<?php

require "./config.php";
$email=$_POST['email'];
$pass=$_POST['pass'];

if(empty($email)){
	//echo "用户名不能为空";
	exit("邮箱不能为空");
}
if(empty($pass)){
	//echo "用户名不能为空";
	exit("密码不能为空");
}

if(isset($email)&&isset($pass)){
	
	$sql = "select *from user where email='{$email}' and pass='{$pass}'";
	$res = mysql_query($sql,$link);
	if(mysql_affected_rows($link)>0){
		echo "登录成功";
	}
}else{
	echo "不正确，请重新登录";
	header("Location:../index.php");
}