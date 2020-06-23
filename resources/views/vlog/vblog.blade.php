<!DOCTYPE html>
<!-- saved from url=(0033)http://cms.qisoweb.com/index.html -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title> VBLOG | 路路畅通</title>

    <meta name="keywords" content="关键词1,关键词2">
    <meta name="description" content="站点描述信息">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/assets/css/ionicons.min.css" rel="stylesheet">
    <link href="/assets/css/blog.css" rel="stylesheet" >

    <script src="/assets/js/jquery.min.js"></script>
    
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>

    <div class="container">
    <nav class="navbar justify-content-between navbar-expand-lg nav-box">
            <a class="navbar-brand float-left" href="http://wwww.luluct.cn">路路畅通</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
                <span class="ion-md-menu navbar-toggler-icon">
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="bs-navbar-collapse">
                <ul class="navbar-nav main-nav">
                    <li class="nav-item " data-model="index">
                        <a class="nav-link" href="http://www.luluct.cn" target="">首页</a>
                    </li>
                    <li class="nav-item dropdown" data-model="article-page">
                        <a href="http://www.luluct.cn" target="" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">衣食住行<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" target="" href="http://cms.qisoweb.com/article/1.html">衣</a>
                            <a class="dropdown-item" target="" href="http://cms.qisoweb.com/article/1.html">食</a>
                            <a class="dropdown-item" target="" href="http://cms.qisoweb.com/article/1.html">住</a>
                            <a class="dropdown-item" target="" href="http://cms.qisoweb.com/article/1.html">行</a>
                                                       
                        </div>
                    </li> 
                    <li class="nav-item active" data-model="article-VBLOG">
                        <a class="nav-link" href="http://cms.qisoweb.com/article/1.html" target="">VBLOG</a>
                    </li>                                      
                </ul>
            </div>
    </nav>

    </div>
</header>

<div class="container index-body">
    <div class="row">
        <div class="col-lg-9">
            <ul class="list-group article-list">
                <li class="list-group-item">
                    <div class="art-view">
                        <h3><a href="http://cms.qisoweb.com/article/2.html">打卡：2020年06月23日</a></h3>
                        <div class="desc">
							<p>运动：跑步 03公里</p>
							<p>运动：深蹲 36个</p>
							<p>运动：俯卧撑 32个</p>
						</div>
                        
                        <div class="text-muted">
                            <span><i class="ion-md-time"></i> 22020-06-23 </span>
                        </div>
                    </div>
                </li>
                    <li class="list-group-item">
                        <div class="art-view">
                        <h3><a href="http://cms.qisoweb.com/article/1.html">test</a></h3>
                        <div class="desc">
                            test监控维护工入门总结监控井下工作主要包括,安全监控系统,人员定位系统,无线系统,广播系统等。安全监控系统安全监控系统主要功能是负责监测各作业点的甲烷、一氧化碳、二氧化碳、氧气、风速、负压、温度、风机开停、馈电状态等数据，以保证安全生产图1：监...                        
                        </div>
                        <div class="text-muted">
                            <span><i class="ion-md-time"></i> 2019-07-18 03:41:18</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 sidecolumn">
            <div class="card">
                <div class="card-header">支持一下</div>
                <div class="card-body text-center">
                    <img style="max-width: 100%" src="#">
                </div>
            </div>
            <div class="card">
                <div class="card-header">推荐阅读</div>
                <div class="card-body">
                    <div class="list-side">
                        <a href="http://cms.qisoweb.com/article/2.html">打卡-2020年06月23日</a>
                        <a href="http://cms.qisoweb.com/article/1.html">打卡-2020年06月22日</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="container">
        <hr class="my-4">
        <div class="copyright-row text-center">
            <div class="mt-3">
                ©2020-2025 luluct &nbsp;
                <a href="#" target="_blank">vblog</a>
            </div>
        </div>
    </div>
</div>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/init.min.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        setNav('index');
        $('.list-group-item').click(function(e){
            var target=$(e.target);
            if(target.is('a'))return;
            if(target.parents('a').length>0)return;
            var link=$(this).find('a')[0]
            link && link.click();
        });
    })
</script>

</body>
</html>
