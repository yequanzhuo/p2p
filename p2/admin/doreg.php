<?php
require "./config.php";
$name=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];

if(empty($name)){
	//echo "用户名不能为空";
	exit("用户名不能为空");
}

if(empty($phone)){

	exit("电话不能为空");
}
if(empty($email)){
	//echo "用户名不能为空";
	exit("邮箱不能为空");
}
if(empty($pass)){
	//echo "用户名不能为空";
	exit("密码不能为空");
}

if($pass == $pass1){
	
	$sql = "insert into user (username,phone,email,pass) values ('{$name}','{$phone}','{$email}','{$pass}')";
	$res = mysql_query($sql,$link);
	if(mysql_affected_rows($link)>0){
		echo "注册成功";
	}
}else{
	echo "两次密码不一样，请重新注册";
	header("Location:../index.php");
}