<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- 以上代码告诉IE浏览器，IE8/9及以后的版本都会以最高版本IE来渲染页面。 -->  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>图书馆座位管理系统——违纪记录查询</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/notice.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="../images/logo1.jpg" alt="BNUlogo" class="logo-img vertical-center">
			<h1 class="vertical-center">座位预约管理系统</h1>
		</div>
		<div class="logoff">
			<a href="index.php">
			<span>
			<em class="username">
				<?php
					if(isset($_SESSION["u_name"]) && !empty($_SESSION["u_name"]) )
						echo $_SESSION["u_name"];
					else
						echo "error";
				?>
			</em>（ 
			<em class="usernum">
				<?php
					if (isset($_SESSION['u_id']) && !empty($_SESSION['u_id']))
						echo $_SESSION['u_id'];
				?>
			</em> ）
			</span>
			</a>
			<a href="./login.php" id="logout">
				<img src="../images/out.png" alt="注销登录">
			</a>
		</div>
	</header><!-- header结束 -->
	<div class="container" style="margin:20px auto;">
		<nav class="nav-list">
			<a href="index.php" class="nav-item" id="nav-item1">
				<span class="iconfont">&#xe63e;</span>
				<span class="item-info">主页</span>
			</a>
			<a href="seat_select.php" class="nav-item" id="nav-item2">
				<span class="iconfont">&#xe604;</span>
				<span class="item-info">预约座位</span>
			</a>
			<a href="seat_register.php" class="nav-item" id="nav-item3">
				<span class="iconfont">&#xe601;</span>
				<span class="item-info">签到</span>
			</a>
			<a href="cancel_reserve.php" class="nav-item" id="nav-item4">
				<span class="iconfont">&#xe64a;</span>
				<span class="item-info">取消预约</span>
			</a>
			<a href="seat_release.php" class="nav-item" id="nav-item5">
				<span class="iconfont">&#xe751;</span>
				<span class="item-info">释放座位</span>
			</a>
			<a href="reserve_record.php" class="nav-item" id="nav-item6">
				<span class="iconfont">&#xe610;</span>
				<span class="item-info">预约记录</span>
			</a>
			<a href="default_record.php" class="nav-item" id="nav-item7">
				<span class="iconfont">&#xe65f;</span>
				<span class="item-info" style="display: none;">违纪记录</span>
			</a>
			<a href="notice.php" class="nav-item" id="nav-item8">
				<span class="iconfont">&#xe600;</span>
				<span class="item-info">公告栏</span>
			</a>
			<span class="triangle" style="left: 861px;"></span>
		</nav>
		<div class="notice-content">
			<div id="content1">
				<a href="">
					<span class="notice-title vertical-center">早退记录</span>
					<span class="notice-date vertical-center">2017/3/15</span>
				</a>
				<a href="">
					<span class="notice-title vertical-center">未履行预约</span>
					<span class="notice-date vertical-center">2017/4/16</span>
				</a>
				<a href="">
					<span class="notice-title vertical-center">早退记录</span>
					<span class="notice-date vertical-center">2017/5/15</span>
				</a>
			</div>
			<!-- <div id="content2">
				<a href="">
					<span class="notice-title vertical-center">关于北京师范大学图书馆2017.3.18闭馆通知</span>
					<span class="notice-date vertical-center">2017/3/10</span>
				</a>
			</div> -->
			<div class="page-select">
				<div class="page selected" id="page1">1</div>
				<!-- <div class="page" id="page2">2</div> -->
			</div>
		</div>
	</div>

	

	<script type="text/javascript" src="../script/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../script/common.js"></script>
	<script type="text/javascript" src="../script/notice.js"></script>
</body>
</html>