<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/store.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/service.js"></script>   
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=67jMQ5DmYTe1TLMBKFUTcZAR"></script>
    <script src="js/bdMap.js"></script>
    <script src="js/store.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <?php include 'header.php';?>
    <div class="banner">
        <div class="img pc"><img src="images/about_01.jpg" alt=""></div>
        <div class="img mobile"><img src="images/images/banner_about.jpg" alt=""></div>
    </div>
    <!-- 菜单导航 -->
    <div class="menu_nav pc">
        <div class="container">
            <ul>
                <li class="active"><a href="about.php">企业简介</a></li>
                <li><a href="culture.php">品牌文化</a></li>
                <li><a href="course.php">发展历程</a></li>
                <li><a href="team.php">创始团队</a></li>
                <li><a href="store.php">门店查询</a></li>
                <li><a href="join_we.php">加入我们</a></li>
            </ul>
        </div>
    </div>
    <!-- 门店查询 -->
    <div class="store pc">
        <div class="container">
            <h2>门店查询</h2>
            <p>风里雨里，我们在管车所等你</p>
            <div>
                <ul class="store_nav">
                    <li><h4>管车所资产管理有限公司深圳总部</h4><p>广东省深圳市福田区滨河大道滨河时代大厦A座3108</p></li>
                    <li><h4>管车所资产管理有限公司华南运营中心</h4><p>广东省东莞市元美路华凯广场C座105</p></li>
                    <li><h4>管车所资产管理有限公司常平直营店</h4><p>广东省东莞市常平镇255省道东深路（陈屋贝村路段）</p></li>
                </ul>
                
                <div id="map"></div>      
            </div>
        </div>
    </div>
    <div class="store mobile">
        <div class="container">
            <h2>门店查询</h2>
            <p>风里雨里，我们在管车所等你</p>
            <div>
                <div id="map"></div> 
                <ul class="store_nav">
                    <li><h4>管车所资产管理有限公司深圳总部</h4><p>广东省深圳市福田区滨河大道滨河时代大厦A座3108</p></li>
                    <li><h4>管车所资产管理有限公司华南运营中心</h4><p>广东省东莞市元美路华凯广场C座105</p></li>
                    <li><h4>管车所资产管理有限公司常平直营店</h4><p>广东省东莞市常平镇255省道东深路（陈屋贝村路段）</p></li>
                </ul>   
            </div>
        </div>
    </div>

    <?php include 'footer.php';?>
</body>
</html>