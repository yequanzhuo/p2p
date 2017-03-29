<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/houtaiguanli.css">
</head>
<body>
<?php
require "./menu.php";
require "./fastmenu.php";
?>

<!--最新活動-->
<section id="news">
    <div class="container">
        <div class="row news-position">
            <div class="col-xs-12 col-md-6">
                <label><i class="glyphicon glyphicon-th-list"></i><span>最新消息</span></label>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-default" data-toggle="modal" data-target="#new-01">2017.1.1在北京有義賣...<i class="glyphicon glyphicon-comment text-right"></i></a>
                    <a href="#" class="list-group-item " data-toggle="modal" data-target="#new-02">2017.1.1在北京有義賣...<i class="glyphicon glyphicon-comment text-right"></i></a>
                    <a href="#" class="list-group-item list-group-item-default" data-toggle="modal" data-target="#new-02">2017.1.1在北京有義賣...<i class="glyphicon glyphicon-comment text-right"></i></a>
                    <a href="#" class="list-group-item " data-toggle="modal" data-target="#new-04">2017.1.1在北京有義賣...<i class="glyphicon glyphicon-comment text-right"></i></a>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <label><i class="glyphicon glyphicon-th-list"></i><span>之前消息</span></label>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-default">2017.1.1在北京有義賣</a>
                    <a href="#" class="list-group-item ">2017.1.1在北京有義賣</a>
                    <a href="#" class="list-group-item list-group-item-default">2017.1.1在北京有義賣</a>
                    <a href="#" class="list-group-item ">2017.1.1在北京有義賣</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/最新活動-->

<!--后台数据-->
<section id="data">
    <div class="container data-position">
        <div class="row">
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#data-01" role="tab" data-toggle="tab">数码产品</a></li>
                    <li role="presentation"><a href="#data-02" role="tab" data-toggle="tab">教学资料</a></li>
                    <li role="presentation"><a href="#data-03" role="tab" data-toggle="tab">交通工具</a></li>
                    <li role="presentation"><a href="#data-04" role="tab" data-toggle="tab">生活物品</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="data-01">
                        <table class="table table-bordered">							
                            <tr>
                                <td>商品编号</td>
                                <td>商品名称</td>
                                <td>审核状态</td>
                                <td>交易情况</td>
                            </tr>
							<?php
							require "./admin/config.php";
							$sql = "select * from goods where gType = '数码'";
							$result = mysql_query($sql,$link);
							//var_dump($result);
							if($result < 0){
								die("没有找到相关商品信息");
							}else{
								while($row = mysql_fetch_assoc($result)){
							?>	
							
                            <tr>
                                <td class="ID"><?php echo $row['gid'];?></td>
                                <td class="Name"><?php echo $row['gName'];?></td>
                                <td class="State"><?php echo $row['gStat'];?></td>
                                <td class="Case">待定</td>
                            </tr>
						<?php
							}}
						?>
                        </table>
                    </div>
					
					<!--测试-->
                    <div role="tabpanel" class="tab-pane" id="data-02">
                        <table class="table table-bordered">
                            <tr>
                                <td>商品编号</td>
                                <td>商品名称</td>
                                <td>审核状态</td>
                                <td>交易情况</td>
                            </tr>
							<?php
							require "./admin/config.php";
							$sql = "select * from goods where gType = '学习教材'";
							$result = mysql_query($sql,$link);
							//var_dump($result);
							if($result < 0){
								die("没有找到相关商品信息");
							}else{
								while($row = mysql_fetch_assoc($result)){
							?>			
                            <tr>
                                <td class="ID"><?php echo $row['gid'];?></td>
                                <td class="Name"><?php echo $row['gName'];?></td>
                                <td class="State"><?php echo $row['gStat'];?></td>
                                <td class="Case">待定</td>
                            </tr>
						<?php
							}}
						?>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="data-03">
                        <table class="table table-bordered">
                         
                            <tr>
                                <td>商品编号</td>
                                <td>商品名称</td>
                                <td>审核状态</td>
                                <td>交易情况</td>
                            </tr>
							<?php
							require "./admin/config.php";
							$sql = "select * from goods where gType = '交通工具'";
							$result = mysql_query($sql,$link);
							//var_dump($result);
							if($result < 0){
								die("没有找到相关商品信息");
							}else{
								while($row = mysql_fetch_assoc($result)){
						?>			
							
							
                            <tr>
                                <td class="ID"><?php echo $row['gid'];?></td>
                                <td class="Name"><?php echo $row['gName'];?></td>
                                <td class="State"><?php echo $row['gStat'];?></td>
                                <td class="Case">待定</td>
                            </tr>
						<?php
							}}
						  ?> 
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="data-04">
                        <table class="table table-bordered">
                       
                            <tr>
                                <td>商品编号</td>
                                <td>商品名称</td>
                                <td>审核状态</td>
                                <td>交易情况</td>
                            </tr>
							 <?php
							require "./admin/config.php";
							$sql = "select * from goods where gType = '生活物品'";
							$result = mysql_query($sql,$link);
							//var_dump($result);
							if($result < 0){
								die("没有找到相关商品信息");
							}else{
								while($row = mysql_fetch_assoc($result)){
						?>			
                            <tr>
                                <td class="ID"><?php echo $row['gid'];?></td>
                                <td class="Name"><?php echo $row['gName'];?></td>
                                <td class="State"><?php echo $row['gStat'];?></td>
                                <td class="Case">待定</td>
                            </tr>
                        <?php
							}}
						?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/后台数据-->
<!--页脚-->

<!--/页脚-->

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
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="请输入邮箱">
                        </div>
                    </div>
                    <div class="form-group-lg">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码">
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
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="Name" placeholder="请输入姓名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="Phone" placeholder="请输入电话号码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="Email" placeholder="请输入邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Password" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="Re-Password" placeholder="请重新输入密码">
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