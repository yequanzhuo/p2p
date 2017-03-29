<!--头部区域-->
<header id="header">
    <div class="topbar hidden-sm hidden-xs "><!--可以改爲visible-md，可見在md的情況下-->
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center">
                    <a href="#" class="mobile-link">
                        <i class="glyphicon glyphicon-phone"></i>
                        <span>联系方式</span>
                        <i class="glyphicon glyphicon-chevron-down"></i>
                        <img src="imgs/c_06.jpg" alt="see a see">
                    </a>
                </div>
                <div class="col-md-5 text-center">
                    <i class="glyphicon glyphicon-earphone"></i>
                    <span>123-456-789(服务时间8:00-17:00)</span>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#" class="nomal-question">
                        <span>常见问题</span>
                    </a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="#" class="btn btn-jion btn-sm" data-toggle="modal" data-target="#register_form">点击注册</a>
                    <a href="#" class="btn btn-link btn-sm" data-toggle="modal" data-target="#login_form">登陆</a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-top navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!--漢堡菜單-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">切換菜單</span><!--屏幕閲讀器專用類-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--/漢堡菜單-->
                <a class="navbar-brand" href="index.php">
                    <i class="glyphicon glyphicon-globe"></i>
                    <i class="glyphicon-old">二手網</i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="digital.php?type='数码'&p=1">数码产品</a></li>
                    <li><a href="digital.php?type='学习教材'&p=1">大学教材</a></li>
                    <li><a href="digital.php?type='交通工具'&p=1">交通工具</a></li>
                    <li><a href="digital.php?type='生活物品'&p=1">生活物品</a></li>
                    <li><a href="apply.php">卖二手申请</a></li>
                    <li><a href="houtaiguanli.php">后台管理</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-sm">
                    <li><a href="personal.php">个人中心</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--/头部区域-->