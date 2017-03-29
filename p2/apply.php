<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/apply.css">
</head>
<body>
<?php
require "./menu.php";
require "./fastmenu.php";
?>


<!--申请区域-->
<section id="apply-to">
    <div class="container">
        <div class="row">
            <div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    數碼產品申請
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <form class="form-horizontal" action="./admin/dogoods.php?action=thing" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-name" name="gName" placeholder="请输入产品名称">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品价格</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-price" name="gPrice" placeholder="请输入价格">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">上架时间</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-time" name="gTime" placeholder="请输入时间">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">联系方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-phone" name="gPhone" placeholder="请输入号码">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">交易方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-deal" name="gWay" placeholder="请输入交易方式">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品描述</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-descrip" name="gDes" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品照片<br/>(300*300)</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="digital-photo" name="pic" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                            <button type="submit" class="btn btn-info">申请</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    學習教材申請
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                   <form class="form-horizontal" action="./admin/dogoods.php?action=study" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-name" name="gName" placeholder="请输入产品名称">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品价格</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-price" name="gPrice" placeholder="请输入价格">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">上架时间</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-time" name="gTime" placeholder="请输入时间">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">联系方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-phone" name="gPhone" placeholder="请输入号码">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">交易方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-deal" name="gWay" placeholder="请输入交易方式">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品描述</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-descrip" name="gDes" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品照片<br/>(300*300)</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="digital-photo" name="pic" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                            <button type="submit" class="btn btn-info">申请</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    交通工具申請
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                   <form class="form-horizontal" action="./admin/dogoods.php?action=tool" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-name" name="gName" placeholder="请输入产品名称">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品价格</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-price" name="gPrice" placeholder="请输入价格">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">上架时间</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-time" name="gTime" placeholder="请输入时间">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">联系方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-phone" name="gPhone" placeholder="请输入号码">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">交易方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-deal" name="gWay" placeholder="请输入交易方式">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品描述</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-descrip" name="gDes" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品照片<br/>(300*300)</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="digital-photo" name="pic" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                            <button type="submit" class="btn btn-info">申请</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    生活物品申請
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                   <form class="form-horizontal" action="./admin/dogoods.php?action=life" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-name" name="gName" placeholder="请输入产品名称">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">产品价格</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-price" name="gPrice" placeholder="请输入价格">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">上架时间</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-time" name="gTime" placeholder="请输入时间">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">联系方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-phone" name="gPhone" placeholder="请输入号码">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">交易方式</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-deal" name="gWay" placeholder="请输入交易方式">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品描述</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="digital-descrip" name="gDes" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">商品照片<br/>(300*300)</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="digital-photo" name="pic" placeholder="请说明">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                            <button type="submit" class="btn btn-info">申请</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--/申请区域-->

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

<!--產品推薦-->
<section id="products">
    <div class="container">
        <div class="row">
            <div>
                <!-- 選項卡標題 -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab">數碼產品</a></li>
                    <li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab">教學資料</a></li>
                    <li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab">交通工具</a></li>
                    <li role="presentation"><a href="#tab-4" role="tab" data-toggle="tab">生活物品</a></li>
                </ul>

                <!-- 選項卡面板 -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade in" id="tab-1">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/apple.jpg" alt="...">
                                    <div class="caption">
                                        <h3>二手手机</h3>
                                        <p>这是一部九成新的手机，需要的同学请联系我<i class="glyphicon glyphicon-phone"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-2">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/book.jpg" alt="book">
                                    <div class="caption">
                                        <h3>学霸是怎么炼成的</h3>
                                        <p>这是一本学霸用过的书，据说看了会变成学霸<i class="glyphicon glyphicon-book"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/cycle.jpg" alt="cycle">
                                    <div class="caption">
                                        <h3>自行车</h3>
                                        <p>这是一架质量不错的自行车，奔驰的<i class="glyphicon glyphicon-plane"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab-4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="imgs/table.jpg" alt="table">
                                    <div class="caption">
                                        <h3>小桌子</h3>
                                        <p>这是一张很漂亮的桌子，转让<i class="glyphicon glyphicon-paperclip"></i></p>
                                        <p> <a href="buy.html" class="btn btn-default" role="button">详情</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/產品推薦-->



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