<?php
require "./admin/config.php";
$id = $_GET['id'];//echo $id;
$sql="update goods set gStat = 1 where gid = $id";
$result = mysql_query($sql,$link);
//var_dump($result);
if($result == true){
	echo "<script>alert('交易成功');parent.location.href='./personal.php';</script>";
}else{
	echo "<script>alert('交易失败');parent.location.href='./personal.php';</script>";
}

?>