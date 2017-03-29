
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<script language="javascript" src="./js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	function show(url){
	
		var xhr = new XMLHttpRequest();
		
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4){
				document.getElementById("result").innerHTML = xhr.responseText;
			}
		}
		xhr.open("GET",url);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
		xhr.send(null);
	
	}

	</script>
</head>

<body>
<?php
require "./menu.php";
?>


<!--广告通栏-輪播圖-->
<section id="main_ad">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- 輪播圖的三個點 -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- 輪播圖的圖片 -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#"><img src="imgs/lun1.jpg" style="width: 2000px;height: 410px;" alt="第一張圖"></a>
            </div>
            <div class="item">
                <a href="#"><img src="imgs/lun2.jpg" style="width: 2000px;height: 410px;" alt="第二張圖"></a>
            </div>
            <div class="item">
                <a href="#"><img src="imgs/lun4.jpg" style="width: 2000px;height: 410px;" alt="第三張圖"></a>
            </div>
        </div>

        <!-- 翻頁控制 -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--/广告通栏-輪播圖-->

<?php
require "./fastmenu.php";
?>
<div id="result">
<!--產品-->
<section id="products">
    <div class="container">
        <!--商品-->
        <div class="row">
            <div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade in" >
                        <div class="row">
							<?php
								require "./admin/config.php";
								
								$page = $_GET['p'];
								$pageSize = 4;//每页8个
								$pp=($page-1)*$pageSize;							
								$type = $_GET['type'];
								
								$sql = "select * from goods where gType = $type limit {$pp},{$pageSize}";
								$result = mysql_query($sql,$link);
								//var_dump($result);
								if($result < 0){
									die("没有找到相关商品信息");
								}else{
									while($row = mysql_fetch_assoc($result)){
								
											
							?>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="./admin/uploads/s_<?php echo "{$row['gPic']}";?>" alt="..." >
                                    <div class="caption">
                                        <h3><?php  echo "{$row['gName']}";?></h3>
                                        <p><?php  echo "{$row['gDes']}";?><i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.php?id=<?php  echo "{$row['gid']}";?>" class="btn btn-default" role="button">详情</a></p>
									
									</div>
                                </div>
                            </div>
							<?php 		
									}}					
							?>	
								
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
			
			$older = $page-1;
			$next = $page+1;
			$u = $_SERVER['HTTP_REFERER'];	
			$sql1 = "select count(*) from goods where gType= $type";
			$res = mysql_fetch_array(mysql_query($sql1,$link));
			$total = $res[0];

			//计算页数
			$total_pages = ceil($total/$pageSize);

			$url = substr($u,0,-1);//-1
			//echo $url;
			if($older<1){
				$older = 1;
			}
			if($next>$total_pages){
				$next = $total_pages;
			}
			//echo $type;
		?>
       
        <!--/商品-->
          <div class="row">
            <div class="col-xs-12  text-center">
                <nav aria-label="Page navigation">
                    <ul class="pager">
					<!--<li class="previous"><a href='<?php // echo "{$url}{$older}"; ?>'><span aria-hidden="true">&larr;</span> Older</a></li>-->
                    <!--<li class="next"><a href='<?php  //echo "{$url}{$next}"; ?>'><span aria-hidden="true">&rarr;</span>Newer</a></li>-->
					<?php	

					$gg = "";
					$gg .=  "<a href='javascript:show(\"{$url}{$older}\")'>Older</a>";
                    $gg .=  "<a href='javascript:show(\"{$url}{$next}\")'>Newer</a>";
					echo $gg;
					
					?>
                    </ul>
					
                </nav>
            </div>
        </div>
		
		
		
		
    </div>
  </div>
</section>

<!--/產品-->

<!--脚部区域-->
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 text-center">
                <p>這是一個校園二手物品交易網站 <a href="#" target="_blank">at www.index.com</a> | <a href="#">SKyLab.org</a> © 2017 Start-Up<br> <a rel="nofollow" href="http://www.templatemonster.com/" target="_blank" class="link">Designed</a>  by MR.Zhuang</p>
            </div>
            <div class="col-xs-12 text-center">
                <div class="soc-icons"><span>聯係我們:</span><a href="#"><img src="imgs/icon-1.jpg" alt=""></a><a href="#"><img src="imgs/icon-2.jpg" alt=""></a><a href="#"><img src="imgs/icon-3.jpg" alt=""></a></div>
            </div>
        </div>
    </div>
</footer>
<!--/脚步区域-->
<script src="libs/jquery/jquery-3.1.1.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script>
    function check() {
        if(document.getElementById("Password").valueOf() != document.getElementById("Re-Password").valueOf()){
            alert("密码不一样");
            return false;
        }
        else {
            return true;
        }
    }
</script>
<!-- Modal -->
<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-labelledby="login_form_title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="login_form_title">登录</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="./admin/dologin.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="请输入邮箱">
                        </div>
                    </div>
                    <div class="form-group-lg">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="register_form" tabindex="-1" role="dialog" aria-labelledby="register_form_title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="register_form_title">注冊</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="./admin/doreg.php" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Name" name="username" placeholder="请输入姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Phone" name="phone" placeholder="请输入电话号码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="Email" name="email" placeholder="请输入邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Password" name="pass" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Re-Password" name="pass1" placeholder="请重新输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 text-right">
                            <button type="submit" class="btn btn-danger" onclick="check()">jion us</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="buy_end" tabindex="-1" role="dialog" aria-labelledby="buy_end_title">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="buy_end_title">注意</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_ID" placeholder="请输入对方ID">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10 text-right">
                            <button type="submit" class="btn btn-danger">确定</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new-01" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" >詳情</h4>
            </div>
            <div class="modal-body">
                <h3 class="text-left">活動時間</h3>
                <h5 class="text-left">8:00-18:00</h5>
                <h3 class="text-left">活動地點</h3>
                <h5 class="text-left">北京西邊的一個小廣場</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary " data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new-02" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" >詳情</h4>
            </div>
            <div class="modal-body">
                <h3 class="text-left">活動時間</h3>
                <h5 class="text-left">9:00-18:00</h5>
                <h3 class="text-left">活動地點</h3>
                <h5 class="text-left">北京西邊的一個小廣場</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary " data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new-03" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" >詳情</h4>
            </div>
            <div class="modal-body">
                <h3 class="text-left">活動時間</h3>
                <h5 class="text-left">10:00-18:00</h5>
                <h3 class="text-left">活動地點</h3>
                <h5 class="text-left">北京西邊的一個小廣場</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary " data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new-04" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" >詳情</h4>
            </div>
            <div class="modal-body">
                <h3 class="text-left">活動時間</h3>
                <h5 class="text-left">11:00-18:00</h5>
                <h3 class="text-left">活動地點</h3>
                <h5 class="text-left">北京西邊的一個小廣場</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary " data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>