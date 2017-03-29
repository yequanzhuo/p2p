<?php

require "./config.php";
require "./functions.php";

switch($_GET["action"]){
		case "thing": 
			//1. 获取添加信息
			$gName 	= $_POST["gName"];
			$gPrice = $_POST["gPrice"];
			$gTime 	= $_POST["gTime"];
			$gPhone = $_POST["gPhone"];
			$gWay 	= $_POST["gWay"];
			$gDes 	= $_POST["gDes"];
			$gType  = "数码";
			//$addtime = time();
			//2. 验证()省略
			if(empty($gName)){
				die("数码商品名称必须有值");
			}
			//3. 执行图片上传
			$upinfo = uploadFile("pic","./uploads/");
			if($upinfo["error"]===false){
				die("图片信息上传失败：".$upinfo["info"]);
			}else{
				//上传成功
				$pic = $upinfo[info];// 获取上传成功的图片名
			}
			//4. 执行图片缩放
			imageUpdateSize('./uploads/'.$pic,50,50);
			
			//5. 拼装sql语句，并执行添加
			$sql = "insert into goods (gName,gPrice,gTime,gPhone,gWay,gDes,gType,gPic) values('{$gName}','{$gPrice}','{$gTime}','{$gPhone}','{$gWay}','{$gDes}','{$gType}','{$pic}')";
			//echo $sql;
			mysql_query($sql,$link);
			
			//6. 判断并输出结果
			if(mysql_insert_id($link)>0){
				echo "数码商品发布成功！";
			}else{
				echo "数码商品发布失败！".mysql_error();
			}
			//echo "<br/> <a href='index.php'>查看商品信息<a>";
			
			
			break;
		case "study":
			//1. 获取添加信息
			$gName 	= $_POST["gName"];
			$gPrice = $_POST["gPrice"];
			$gTime 	= $_POST["gTime"];
			$gPhone = $_POST["gPhone"];
			$gWay 	= $_POST["gWay"];
			$gDes 	= $_POST["gDes"];
			$gType  = "学习教材";
			//$addtime = time();
			//2. 验证()省略
			if(empty($gName)){
				die("学习材料必须有值");
			}
			//3. 执行图片上传
			$upinfo = uploadFile("pic","./uploads/");
			if($upinfo["error"]===false){
				die("图片信息上传失败：".$upinfo["info"]);
			}else{
				//上传成功
				$pic = $upinfo[info];// 获取上传成功的图片名
			}
			//4. 执行图片缩放
			imageUpdateSize('./uploads/'.$pic,50,50);
			
			//5. 拼装sql语句，并执行添加
			$sql = "insert into goods (gName,gPrice,gTime,gPhone,gWay,gDes,gType,gPic) values('{$gName}','{$gPrice}','{$gTime}','{$gPhone}','{$gWay}','{$gDes}','{$gType}','{$pic}')";
			//echo $sql;
			mysql_query($sql,$link);
			
			//6. 判断并输出结果
			if(mysql_insert_id($link)>0){
				echo "学习材料发布成功！";
			}else{
				echo "学习材料发布失败！".mysql_error();
			}

			break;
		case "tool":
		
		//1. 获取添加信息
			$gName 	= $_POST["gName"];
			$gPrice = $_POST["gPrice"];
			$gTime 	= $_POST["gTime"];
			$gPhone = $_POST["gPhone"];
			$gWay 	= $_POST["gWay"];
			$gDes 	= $_POST["gDes"];
			$gType  = "交通工具";
			//$addtime = time();
			//2. 验证()省略
			if(empty($gName)){
				die("交通工具必须有值");
			}
			//3. 执行图片上传
			$upinfo = uploadFile("pic","./uploads/");
			if($upinfo["error"]===false){
				die("图片信息上传失败：".$upinfo["info"]);
			}else{
				//上传成功
				$pic = $upinfo[info];// 获取上传成功的图片名
			}
			//4. 执行图片缩放
			imageUpdateSize('./uploads/'.$pic,50,50);
			
			//5. 拼装sql语句，并执行添加
			$sql = "insert into goods (gName,gPrice,gTime,gPhone,gWay,gDes,gType,gPic) values('{$gName}','{$gPrice}','{$gTime}','{$gPhone}','{$gWay}','{$gDes}','{$gType}','{$pic}')";
			//echo $sql;
			mysql_query($sql,$link);
			
			//6. 判断并输出结果
			if(mysql_insert_id($link)>0){
				echo "交通工具发布成功！";
			}else{
				echo "交通工具发布失败！".mysql_error();
			}
			break;
		case "life":
		
		//1. 获取添加信息
			$gName 	= $_POST["gName"];
			$gPrice = $_POST["gPrice"];
			$gTime 	= $_POST["gTime"];
			$gPhone = $_POST["gPhone"];
			$gWay 	= $_POST["gWay"];
			$gDes 	= $_POST["gDes"];
			$gType  = "生活物品";
			//$addtime = time();
			//2. 验证()省略
			if(empty($gName)){
				die("生活物品名称必须有值");
			}
			//3. 执行图片上传
			$upinfo = uploadFile("pic","./uploads/");
			if($upinfo["error"]===false){
				die("图片信息上传失败：".$upinfo["info"]);
			}else{
				//上传成功
				$pic = $upinfo[info];// 获取上传成功的图片名
			}
			//4. 执行图片缩放
			imageUpdateSize('./uploads/'.$pic,50,50);
			
			//5. 拼装sql语句，并执行添加
			$sql = "insert into goods (gName,gPrice,gTime,gPhone,gWay,gDes,gType,gPic) values('{$gName}','{$gPrice}','{$gTime}','{$gPhone}','{$gWay}','{$gDes}','{$gType}','{$pic}')";
			//echo $sql;
			mysql_query($sql,$link);
			
			//6. 判断并输出结果
			if(mysql_insert_id($link)>0){
				echo "生活物品发布成功！";
			}else{
				echo "生活物品发布失败！".mysql_error();
			}
			break;
}
mysql_close($link);