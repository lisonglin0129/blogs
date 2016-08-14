<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="description" content="中国统一教育网是著名的中小学在线教学平台，主打视频在线教学，结合独创的五步学习法，通过课前预习，课后练习，单元复习，综合测试及在线答疑、智能题库等功能，快速帮助中小学生提高学习成绩，是家长与教师的好帮手。">
<meta name="keywords" content="在线教育,在线题库,智能组卷,在线答疑,网校,在线学习,中小学课外辅导,网络课堂">
<meta name="author" content="">
<!-- 动态基本信息 -->
<!-- 字符 -->
<meta charset="utf-8">
<title>教学平台</title>
<!-- 支持IE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 移动设备优先 -->
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<!-- Bootstrap -->
<link href="/home/css/bootstrap.min.css" rel="stylesheet">
<script src="/home/js/jquery.min.js"></script>
<script src="/home/js/jquery.SuperSlide.2.1.1.js"></script>
<script src="/home/js/jquery.cookie.js"></script>
<script src="/home/js/index.js"></script>
<script src="/home/js/bootstrap.js"></script>
<script src="/home/js/jquery.zoomImgRollover.js" type="text/javascript"></script>
<!--wapnav-->
<script src="/home/js/default.js" type="text/javascript"></script>
<!-- 公共样式 -->
<link href="/home/css/base.css" rel="stylesheet">
<!--wapnav-->
<link href="/home/css/default.css" rel="stylesheet">
<link href="/home/css/font-awesome.min.css" rel="stylesheet" />
<!-- 主体样式  -->
<link href="/home/css/style.css?rand=1077939939" rel="stylesheet">
<!-- -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="/home/js/html5shiv.min.js"></script>
    <script src="/home/js/respond.min.js"></script>
    <![endif]-->
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
</head>
<body>
	<script>
$(function(){
	$.ajax({
        type: "POST",
        url: "#.tongyi.com/index.php/index/checklogin",
        dataType: "json",
        success: function(data, dataType) {
			if (data.sess_uname) {
				$("#login_ok").show();
				$("#login_no").hide();
				$("#user_name").html(data.sess_uname);
			} else {
				$("#login_no").show();
				$("#login_ok").hide();
			}
			if (data.cookflag == 'open') {
				$("#cookflag").hide();
			} else {
				$("#cookflag").hide();
			}
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
			//alert('Error : ' + errorThrown);
        }
    });
	return;
});
function clickinfo (url) {
	window.location.href = url;
}
//热播暑假课，换一组
function refurbishlist () {
	var pagnum = 4244530;
	//alert(pagnum);
	if (!pagnum) {
		alert("空");
		return;
	} 
	var now_num = parseInt($("#flag_num").val())+1;
	//alert(now_num);
	if (now_num >= pagnum) {
		$("#flag_num").val(1);
	} else {
		$("#flag_num").val(now_num);
	}
	var data = {now_num:now_num};
	$.ajax({
        type: "POST",
        url: "#.tongyi.com/index.php/index/refurbishlisthot",
        data: data,
        dataType: "json",
        success: function(data, dataType) {		
            var elm = '<ul id="refurbishlist">';
        	$.each(data.data, function(i, item){
        		var url = "#.tongyi.com/index.php/elite/course/"+item.info_id;
        		elm += '<li onclick="clickinfo(\''+url+'\');"><i>独家</i>';
        		elm += '	<figure>';
        		elm += '		<span><span>';
        		elm += '		<p>';
        		elm +=				item.g_name+' '+item.subject_name+'<br> 讲师：'+item.teacher+'<br> 学校：'+item.school_name+'<br>';
        		elm += '		<b>￥'+item.fee+'</b>';
        		elm += '		</p> <img src="'+item.img_url+'" width="" height="" />';
        		elm += '		<h3>'+item.g_name+' '+item.subject_name+'</h3>';
        		elm += '		<figcaption>'+item.title+'</figcaption>';
        		elm += '	</figure>';
				elm += '</li>';
        	});
        	elm += '</ul>';
        	$('#refurbishlist').after(elm);
        	$('#refurbishlist').remove();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
		//	alert('Error : ' + errorThrown);
        }
    });
	return;
}
/*
$(function(){

	$(".hot-item li").hover(function(){

		$(this).find("p").stop().animate({top:"0"},400);

		$(this).find("h3").stop().animate({bottom:"-60px"},400);
	},function(){
		$(this).find("p").stop().animate({top:"-126px"},400);
		$(this).find("h3").stop().animate({bottom:"30"},400);
	});

});*/
</script>
	<!--header头部-->
	<div class="container-fluid p_0">
		<nav class="navbar navbar-inverse visible-xs-block p_0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span><span class="icon-bar"></span><span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand"
					href="index.html?PHPSESSID=kio44fig9ipluk15j76fqehh93"><a href="#">
						<img class="img-responsive wap-logo" src="/home/images/ty-logo.png "
						title="logo" alt="">
				</a></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<div class="wap-seach">
						<form action="#.tongyi.com/index.php/search" method="get">
							<input type="hidden" name="PHPSESSID"
								value="kio44fig9ipluk15j76fqehh93" /> <input type="text"
								name="keywords" placeholder="输入搜索内容"> <input type="submit"
								value="搜索">
						</form>
					</div>
					<li><a href="#.tongyi.com">网站首页</a></li>
					<li><a href="#.tongyi.com/baby">幼儿教育</a></li>
					<li><a href="#.tongyi.com/student/elementary">小学教育</a></li>
					<li><a href="#.tongyi.com/student/junior">初中教育</a></li>
					<li><a href="#.tongyi.com/student/senior">高中教育</a></li>
					<li><a href="#.tongyi.com/index.php/zhiboke/index">直播课堂</a></li>
					<li class="dropdown"><a aria-expanded="false" role="button"
						data-toggle="dropdown" class="dropdown-toggle">综合教育&nbsp;<span
						class="caret"></span></a>
						<ul role="menu" class="dropdown-menu">
							<li><a href="#.tongyi.com/parents/index.php">家长教育</a></li>
							<li><a href="#.tongyi.com/adult">成人教育</a></li>
							<li><a href="#.tongyi.com/computer">电脑教育</a></li>
							<li><a href="#.tongyi.com/elder">夕阳红教育</a></li>
							<li><a href="#.tongyi.com/art">艺术教育</a></li>
							<li><a href="#.tongyi.com/english">英语教育</a></li>
							<li><a href="#.tongyi.com/french">法语教育</a></li>
							<li><a href="#.tongyi.com/japan">日语教育</a></li>
							<li><a href="#.tongyi.com/korean">韩语教育</a></li>
							<li><a href="#.tongyi.com/china">汉语教育</a></li>
						</ul></li>
					<li class="dropdown"><a aria-expanded="false" role="button"
						data-toggle="dropdown" class="dropdown-toggle">其他&nbsp;<span
						class="caret"></span></a>
						<ul role="menu" class="dropdown-menu">
							<li><a href="#.tongyi.com/interaction/index.php/xxdr">学习达人</a></li>
							<li><a href="#.tongyi.com/teacherteam">名师团队</a></li>
							<li><a href="#.tongyi01.com/">数字化幼儿园</a></li>
							<li><a href="#.vsread.com/">江山文学</a></li>
						</ul></li>
					<li class="dropdown"><a aria-expanded="false" role="button"
						data-toggle="dropdown" class="dropdown-toggle"><i
							class="fa fa-user fa-fw"></i>&nbsp;游客&nbsp;<span class="caret"></span></a>
						<ul role="menu" class="dropdown-menu">
						<li><a
								href="http://member.tongyi.com/index.php/login/login_new/?from=http%3A%2F%2Fwww.tongyi.com%2Findex.php">请登录</a></li>
						<li><a href="http://member.tongyi.com/index.php/register">免费注册</a></li>
						</ul></li>
				</ul>
			</div>
		</nav>
		<header>
			<section class="head-top visible-md visible-lg">
				<div class="container" style="font-size: 12px;">
					<div class="fl">
						统一教育网欢迎您！ <span id="login_no"> <a style="text-decoration: none;"
							href="http://member.tongyi.com/index.php/login/">请登录</a><a
							style="text-decoration: none;"
							href="http://member.tongyi.com/index.php/register">免费注册</a>
						</span> <span style="display: none" id="login_ok"> <a
							style="text-decoration: none;" href="http://member.tongyi.com"
							id="user_name"></a>&nbsp;&nbsp;|&nbsp;&nbsp; <a
							style="margin-left: 0px; text-decoration: none;"
							href="http://member.tongyi.com/" target="_blank">会员中心 </a>
							&nbsp;&nbsp;|&nbsp;&nbsp; <a
							style="margin-left: 0px; text-decoration: none;"
							href="http://member.tongyi.com/index.php/myclass" target="_blank">我的课程</a>
							&nbsp;&nbsp;|&nbsp;&nbsp; <a
							style="margin-left: 0px; text-decoration: none;"
							href="http://member.tongyi.com/index.php/login/logout/">退出</a>
						</span> <a style="text-decoration: none; color: #ff0000;"
							href="#.tongyi.com/index.php/probation" target="_blank">申请试用账号</a>
					</div>
					<div class="fr">
						<a href="#.tongyi.com/kfonline.php" target="_blank"
							style="color: #ff0000;">在线客服</a> <a
							href="http://member.tongyi.com/index.php/service/pay/"
							target="_blank">价格说明</a> <a
							href="#.tongyi.com/index.php/help" target="_blank">帮助中心</a>
						<span>客服热线：400-680-9088</span>
					</div>
				</div>
			</section>
		</header>
		<!-- 头部广告条 -->
		<section class="side-banner  visible-md visible-lg">
			<a href="#.tongyi.com/index.php/elite"><img
				src="http://tyadmin.tongyi.com/uploads/ad/1466752485.gif"
				class="img-responsive" /></a>
		</section>
		<!-- logo/搜索/bag -->
		<section class="container p_0 mt15  visible-md visible-lg">
			<div class="col-sm-1 col-md-2">
				<a href="javascript:;"> <img alt="" title="logo"
					src="/home/images/logo.gif" class="img-responsive" />
				</a>
			</div>
			<div class="col-sm-2 col-md-2 p_0  visible-md visible-lg">
				<img alt="" title="logo" src="/home/images/logo-bas.gif"
					class=" visible-md visible-lg" />
			</div>
			<div class="search col-sm-8 col-md-5 ">
				<form action="#.tongyi.com/index.php/search" method="get">
					<input type="hidden" name="PHPSESSID"
						value="kio44fig9ipluk15j76fqehh93" /> <input type="text"
						name="keywords" placeholder="输入搜索内容"> <input type="submit"
						value="搜索">
				</form>
				<p class=" visible-md visible-lg">
					热点链接： <a href="http://answer.tongyi.com" target="_blank">答疑平台</a> <a
						href="http://banji.tongyi.com/jiajiao" target="_blank">网络家教</a> <a
						href="http://et.tongyi.com" target="_blank">智能题库</a> <a
						href="http://114.tongyi.com" target="_blank">知学爱问</a> <a
						href="#.tongyi.com/index.php/elite" target="_blank">名校课程
					</a>
				</p>
			</div>
			<div class="search-bag  col-md-3  visible-md visible-lg fr">
				<a href="#.tongyi.com/index.php/elite/detail/3"><img
					src="http://tyadmin.tongyi.com/uploads/ad/1466844787.png"
					class="fr" /></a>
			</div>
		</section>
		<section class="content">
			<div class="con-nav clearfix  visible-md visible-lg">
				<!--sidenav-->
				<div class="sidenav fl">
					<div class="hd titindex">
						<a href="javascript:;">网站首页</a>
					</div>
					<div class="bd">
						<div class="item layer">
							<div class="title">
								<a target="_self" href="#.tongyi.com/index.php/elite"
									class=""> <i class="icon icon_mxwk"></i>名校微课<b
									class="icon icon_jt"></b>
								</a>
							</div>
							<div class="subitem">
								<div class="my-tab-nav">
								<div class="my-tab-hd">
										<ul class="my-tab-nav">
											<div>
												<h3>名校微课</h3>
												<i class="">></i>
											</div>
											<li class="on"><a target="_blank"
											href="#.tongyi.com/index.php/elite/index/elementary">小学</a></li>
											<li class=""><a target="_blank"
												href="#.tongyi.com/index.php/elite/index/junior">初中</a></li>
											<li class=""><a target="_blank"
											href="#.tongyi.com/index.php/elite/index/senior">高中</a></li>
										</ul>
									</div>
									<div class="my-tab-bd">				
									<div class="my-tab-pal" style="display: block;">
											<div class="my-tab-bd-about">相关热门</div>
											<ul class="my-tab-list">
												<li><a
													href="#.tongyi.com/index.php/elite/course/361042"
													title="攀枝花市实验学校小学数学样课" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/14673665481539.png">
													<h3>攀枝花市实验学...</h3> <span>主讲教师：<i></i></span>
												</a></li>
												<li><a
													href="#.tongyi.com/index.php/elite/course/361026"
													title="攀枝花市实验学校小学语文样课" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/14673623804491.png">

														<h3>攀枝花市实验学...</h3> <span>主讲教师：<i></i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/elite/course/360494"
													title="上海教育版 数学 六年级下册（3）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/14625104188353.jpg">
														<h3>上海教育版 数...</h3> <span>主讲教师：<i>高鑫</i></span>
												</a></li>
											</ul>
										</div>
										<div class="my-tab-pal" style="display: none;">
											<div class="my-tab-bd-about">相关热门</div>
											<ul class="my-tab-list">
												<li><a
													href="#.tongyi.com/index.php/elite/course/362447"
													title="生活处处有电磁" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/14682139658139.jpg">
														<h3>生活处处有电磁...</h3> <span>主讲教师：<i>仝现标</i></span>
												</a></li>
												<li><a
													href="#.tongyi.com/index.php/elite/course/362446"
													title="语法智勇大冲关" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/14682140611445.jpg">
														<h3>语法智勇大冲关...</h3> <span>主讲教师：<i>王金敏</i></span>
												</a></li>
												<li><a
													href="#.tongyi.com/index.php/elite/course/362445"
													title="几何图形全解析" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/14682141025978.jpg">
														<h3>几何图形全解析...</h3> <span>主讲教师：<i>石洪英</i></span>
												</a></li>
											</ul>
										</div>		
										<div class="my-tab-pal" style="display: none;">
											<div class="my-tab-bd-about">相关热门</div>
											<ul class="my-tab-list">
												<li><a
													href="#.tongyi.com/index.php/elite/course/363493"
													title="高中英语" target="_blank"> <img width="150" height="100"
														alt="" src="/home/images/course-default.jpg">
														<h3>高中英语</h3> <span>主讲教师：<i></i></span>
												</a></li>
												<li><a
													href="#.tongyi.com/index.php/elite/course/363489"
													title="高中地理" target="_blank"> <img width="150" height="100"
														alt="" src="/home/images/course-default.jpg">
														<h3>高中地理</h3> <span>主讲教师：<i></i></span>
												</a></li>
												<li><a
													href="#.tongyi.com/index.php/elite/course/363475"
													title="高中历史" target="_blank"> <img width="150" height="100"
														alt="" src="/home/images/course-default.jpg">
														<h3>高中历史</h3> <span>主讲教师：<i></i></span>
												</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="item">

							<div class="title">

								<a target="_self"
									href="#.tongyi.com/student/elementary" class=""> <i
									class="icon icon_rmkc"></i>热门课程<b class="icon icon_jt"></b>

								</a>

							</div>

							<div class="subitem">

								<div class="my-tab-nav">

									<div class="my-tab-hd">

										<ul class="my-tab-nav">

											<div>

												<h3>热门课程</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a target="_blank" href="javascript:;">小学</a></li>

											<li class=""><a target="_blank" href="javascript:;">初中</a></li>

											<li class=""><a target="_blank" href="javascript:;">高中</a></li>

										</ul>

									</div>

									<div class="my-tab-bd">



										<div class="my-tab-pal" style="display: block;">

											<div class="my-tab-bd-about">相关热门</div>

											<ul class="my-tab-list">

												<li><a
													href="#.tongyi.com/index.php/course/index/211"
													title="三年级下学期外研社（一年级起）英语" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/211.jpg">

														<h3>三年级下学期外...</h3> <span>主讲教师：<i>闫璐璐</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/course/index/210"
													title="五年级下学期牛津译林版英语" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/210.jpg">

														<h3>五年级下学期牛...</h3> <span>主讲教师：<i>欧阳彤</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/course/index/209"
													title="六年级下学期人教新版英语" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/209.jpg">

														<h3>六年级下学期人...</h3> <span>主讲教师：<i>闫璐璐</i></span>

												</a></li>

											</ul>

										</div>





										<div class="my-tab-pal" style="display: none;">

											<div class="my-tab-bd-about">相关热门</div>

											<ul class="my-tab-list">

												<li><a
													href="#.tongyi.com/index.php/course/index/200"
													title="初一下学期鲁教五四制语文" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/200.jpg">

														<h3>初一下学期鲁教...</h3> <span>主讲教师：<i>李想</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/course/index/199"
													title="初一下学期长春版语文" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/199.jpg">

														<h3>初一下学期长春...</h3> <span>主讲教师：<i>邵伯俊</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/course/index/198"
													title="初一下学期外研社英语" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/198.jpg">

														<h3>初一下学期外研...</h3> <span>主讲教师：<i>王婷</i></span>

												</a></li>

											</ul>

										</div>





										<div class="my-tab-pal" style="display: none;">

											<div class="my-tab-bd-about">相关热门</div>

											<ul class="my-tab-list">

												<li><a
													href="#.tongyi.com/index.php/course/index/207"
													title="人教版政治必修三" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/207.jpg">

														<h3>人教版政治必修...</h3> <span>主讲教师：<i>韩瑞</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/course/index/206"
													title="人教新课标语文必修四" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/206.jpg">

														<h3>人教新课标语文...</h3> <span>主讲教师：<i>卢丽君</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/course/index/205"
													title="人教版语文必修三" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/205.jpg">

														<h3>人教版语文必修...</h3> <span>主讲教师：<i>卢丽君</i></span>

												</a></li>

											</ul>

										</div>



									</div>

								</div>

							</div>

						</div>

						<div class="item">

							<div class="title">

								<a target="_self" href="#.tongyi.com/sydby" class=""> <i
									class="icon icon_kzsys"></i>空中实验室<b class="icon icon_jt"></b>

								</a>

							</div>

							<div class="subitem">

								<div class="my-tab-nav">

									<div class="my-tab-hd">

										<ul class="my-tab-nav">

											<div>

												<h3>空中实验室</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a target="_blank" href="javascript:;">初中</a></li>

											<li class=""><a target="_blank" href="javascript:;">高中</a></li>

										</ul>

									</div>

									<div class="my-tab-bd">



										<div class="my-tab-pal" style="display: none;">

											<div class="my-tab-bd-about">相关热门</div>

											<ul class="my-tab-list">



												<li><a
													href="#.tongyi.com/sydby/index.php/collection/index/9?vid=0"
													title="初中物理实验系列（一）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/collection90.jpg">

														<h3>初中物理实验（...</h3> <span>主讲教师：<i>刘阳</i></span>

												</a></li>



												<li><a
													href="#.tongyi.com/sydby/index.php/collection/index/9?vid=1"
													title="初中物理实验系列（二）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/collection91.jpg">

														<h3>初中物理实验（...</h3> <span>主讲教师：<i>刘阳</i></span>

												</a></li>



												<li><a
													href="#.tongyi.com/sydby/index.php/collection/index/11?vid=0"
													title="初中化学实验系列（一）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/collection110.jpg">

														<h3>初中化学实验（...</h3> <span>主讲教师：<i>高颖新</i></span>

												</a></li>



											</ul>

										</div>



										<div class="my-tab-pal" style="display: none;">

											<div class="my-tab-bd-about">相关热门</div>

											<ul class="my-tab-list">



												<li><a
													href="#.tongyi.com/sydby/index.php/collection/index/7?vid=0"
													title="高中物理实验系列（一）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/collection70.jpg">

														<h3>高中物理实验（...</h3> <span>主讲教师：<i>李亚萍</i></span>

												</a></li>



												<li><a
													href="#.tongyi.com/sydby/index.php/collection/index/6?vid=0"
													title="高中化学实验系列（一）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/collection60.jpg">

														<h3>高中化学实验系...</h3> <span>主讲教师：<i>鲁颖</i></span>

												</a></li>



												<li><a
													href="#.tongyi.com/sydby/index.php/collection/index/6?vid=1"
													title="高中化学实验系列（二）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/203.jpg">

														<h3>高中化学实验系...</h3> <span>主讲教师：<i>鲁颖</i></span>

												</a></li>



											</ul>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="item">

							<div class="title">

								<a target="_self" href="javascript:void(0)" class=""> <i
									class="icon icon_tydjt"></i>统一大讲堂<b class="icon icon_jt"></b>

								</a>

							</div>

							<div class="subitem">

								<div class="my-tab-nav">

									<div class="my-tab-hd">

										<ul class="my-tab-nav">

											<div>

												<h3>统一大讲堂</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a href="javascript:;">初中</a></li>

										</ul>

									</div>

									<div class="my-tab-bd">

										<div class="my-tab-pal" style="display: none;">

											<div class="my-tab-bd-about">相关热门</div>

											<ul class="my-tab-list">

												<li><a
													href="#.tongyi.com/index.php/zhibo/detail/360495"
													title="中考必备：初中古诗词详解" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/360495.jpg">

														<h3>中考必备：初中...</h3> <span>主讲教师：<i>李松石，...</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/zhibo/detail/355131"
													title="初中语法专项突破（一）" target="_blank"> <img width="150"
														height="100" alt="" src="/home/images/355131.jpg">

														<h3>初中语法专项突...</h3> <span>主讲教师：<i>慕晓霞，...</i></span>

												</a></li>

												<li><a
													href="#.tongyi.com/index.php/zhibo/detail/350454"
													title="中考英语考点各个击破系列二---满分完型" target="_blank"> <img
														width="150" height="100" alt="" src="/home/images/350454.jpg">

														<h3>中考英语考点各...</h3> <span>主讲教师：<i>欧阳彤</i></span>

												</a></li>

											</ul>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="item">

							<div class="title">

								<a target="_self" href="javascript:void(0)" class=""> <i
									class="icon icon_mxms"></i>名校名师<b class="icon icon_jt"></b>

								</a>

							</div>



							<div class="subitem">

								<div class="my-tab-nav">

									<div class="my-tab-hd1">

										<ul class="my-tab-nav">

											<div>

												<h3>北京市</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a
												href="#.tongyi.com/index.php/elite/detail/3"
												target="_blank" title="清华大学附属中学">清华大学附属中学</a></li>



										</ul>

									</div>

									<div class="my-tab-hd1">

										<ul class="my-tab-nav">

											<div>

												<h3>沈阳市</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a
												href="#.tongyi.com/index.php/elite/detail/1"
												target="_blank" title="统一教育">统一教育</a></li>



										</ul>

									</div>

									<div class="my-tab-hd1">

										<ul class="my-tab-nav">

											<div>

												<h3>大连市</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a
												href="#.tongyi.com/index.php/elite/detail/7"
												target="_blank" title="大连市一〇三中学">大连市一〇三中学</a></li>

											<li><a href="#.tongyi.com/index.php/elite/detail/18"
												target="_blank" title="乐转微课堂">乐转微课堂</a></li>

											<li><a href="#.tongyi.com/index.php/elite/detail/23"
												target="_blank" title="大连市金州高级中学">大连市金州高级中学</a></li>

											<li><a href="#.tongyi.com/index.php/elite/detail/25"
												target="_blank" title="大连市一〇八中学">大连市一〇八中学</a></li>



										</ul>

									</div>

									<div class="my-tab-hd1">

										<ul class="my-tab-nav">

											<div>

												<h3>吉林市</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a
												href="#.tongyi.com/index.php/elite/detail/2"
												target="_blank" title="吉林永吉实验高中">吉林永吉实验高中</a></li>

											<li><a href="#.tongyi.com/index.php/elite/detail/8"
												target="_blank" title="吉林市第十八中学">吉林市第十八中学</a></li>



										</ul>

									</div>

									<div class="my-tab-hd1">

										<ul class="my-tab-nav">

											<div>

												<h3>松原市</h3>

												<i>&gt;</i>

											</div>

											<li class="on"><a
												href="#.tongyi.com/index.php/elite/detail/19"
												target="_blank" title="吉林油田第十一中学">吉林油田第十一中学</a></li>



										</ul>

									</div>

								</div>

							</div>





						</div>

						<div class="item">

							<div class="title">

								<a target="_self"
									href="#.tongyi.com/index.php/teaching/index/45/49/50"
									class=""> <i class="icon icon_jxzq"></i>教学专区

								</a>

							</div>

						</div>

						<div class="item">

							<div class="title">

								<a target="_self"
									href="#.tongyi.com/composition/all_list.php" class="">
									<i class="icon icon_zwpt"></i>作文平台

								</a>

							</div>

						</div>

					</div>

				</div>

				<!--topnav-->

				<ul class="nav fl " id="nav">

					<li class="nLi on">

						<h3>

							<a target="_blank" href="#.tongyi.com/baby">幼儿教育</a>

						</h3>

					</li>

					<li class="nLi">

						<h3>

							<a target="_blank"
								href="#.tongyi.com/student/elementary">小学教育</a>

						</h3>

					</li>

					<li class="nLi">

						<h3>

							<a target="_blank" href="#.tongyi.com/student/junior">初中教育</a>

						</h3>

					</li>

					<li class="nLi">

						<h3>

							<a target="_blank" href="#.tongyi.com/student/senior">高中教育</a>

						</h3>

					</li>

					<li class="nLi">

						<h3>

							<a target="_blank"
								href="#.tongyi.com/index.php/zhiboke/index">直播课堂</a>

						</h3>

					</li>

					<li class="nLi">

						<h3>

							<a target="_blank" href="javascript:;">综合教育<i></i></a>

						</h3>

						<ul class="sub" style="display: none;">

							<li><a href="#.tongyi.com/parents/index.php"
								target="_blank">家长教育</a></li>

							<li><a href="#.tongyi.com/adult" target="_blank">成人教育</a></li>

							<li><a href="#.tongyi.com/computer" target="_blank">电脑教育</a></li>

							<li><a href="#.tongyi.com/elder" target="_blank">夕阳红教育</a></li>

							<li><a href="#.tongyi.com/art" target="_blank">艺术教育</a></li>

							<li><a href="#.tongyi.com/english" target="_blank">英语教育</a></li>

							<li><a href="#.tongyi.com/french" target="_blank">法语教育</a></li>

							<li><a href="#.tongyi.com/japan" target="_blank">日语教育</a></li>

							<li><a href="#.tongyi.com/korean" target="_blank">韩语教育</a></li>

							<li><a href="#.tongyi.com/china" target="_blank">汉语教育</a></li>

							<!-- <li><a href="javascript:;">查看参数</a></li>

								<li><a href="javascript:;">查看参数</a></li>

								<li><a href="javascript:;">查看参数</a></li>

								<li><a href="javascript:;">查看参数</a></li> -->

						</ul>

					</li>

					<li class="nLi">

						<h3>

							<a target="_blank" href="javascript:;">其他<i></i></a>

						</h3>

						<ul class="sub" style="display: none;">

							<li><a href="#.tongyi.com/interaction/index.php/xxdr"
								target="_blank">学习达人</a></li>

							<li><a href="#.tongyi.com/teacherteam" target="_blank">名师团队</a></li>

							<!-- <li><a href="#.tongyi01.com/" target="_blank">数字化幼儿园</a></li> -->

							<li><a href="#.vsread.com/" target="_blank">江山文学</a></li>

						</ul>

					</li>

				</ul>

			</div>

			<!--banner-->

			<div id="slideBox" class="slideBox prel">

				<div class="hd">

					<ul class="banBut">

						<li class="on"></li>

						<li class=""></li>

					</ul>

				</div>

				<div class="bd">

					<ul>

						<li><a
							style="background: url(http://tyadmin.tongyi.com/uploads/ad/1467363609.jpg) center no-repeat"
							target="_blank"
							href="#.tongyi.com/index.php/zhiboke/item?id=360905"></a></li>

						<li><a
							style="background: url(http://tyadmin.tongyi.com/uploads/ad/1468035958.jpg) center no-repeat"
							target="_blank"
							href="#.tongyi.com/index.php/elite/detail/17"></a></li>

						<!-- <li style="display: list-item;"><a

								style="background: url(/home/images/banner.jpg) center no-repeat"

								target="_blank" href="javascript:void(0)"></a></li> -->

					</ul>

				</div>

				<div class="slidebox-right-box">

					<div class="slidebox-right">

						<dl>

							<dt>

								<a href="#.tongyi.com/index.php/elite/course/360610"> <img
									src="http://tyadmin.tongyi.com/uploads/ad/1466848875.jpg"/ >

								</a>

							</dt>

							<dd>

								<a href="#.tongyi.com/index.php/elite/course/360606"><img
									src="http://tyadmin.tongyi.com/uploads/ad/1466848739.jpg" /></a>

							</dd>

							<dd>

								<a href="#.tongyi.com/index.php/elite/course/360605"><img
									src="http://tyadmin.tongyi.com/uploads/ad/1466848810.jpg" /></a>

							</dd>

							<dd>

								<a href="#.tongyi.com/index.php/elite/course/360604"><img
									src="http://tyadmin.tongyi.com/uploads/ad/1466848795.jpg" /></a>

							</dd>

						</dl>

						<p>

							<i>·</i><a
								href="#.tongyi.com/index.php/article/news?id=4808">上海教育版数学二年级、三年级上学期视频</a>

						</p>

						<p>

							<i>·</i><a
								href="#.tongyi.com/index.php/article/news?id=4814">牛津译林版英语小学一年级上学期视频</a>

						</p>



					</div>

				</div>

			</div>

		</section>

		<div class="clear"></div>

		<section class="zygg">

			<div class="container p_0 clearfix p_0">

				<div class="zygg-l col-md-2  col-xs-3 fl">

					<img src="/home/images/pic-zygg.jpg" />

				</div>

				<div class="zygg-r col-md-10 col-xs-9 fr">

					<div class="txtMarquee-left">

						<div class="bd">

							<ul class="infoList">

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4822"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 北京版英语三年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4814"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 牛津译林版英语小学一年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4808"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 上海教育版数学二年级、三年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4806"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 上海牛津英语六年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4805"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 上海教育版数学一年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4804"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 北京版数学一、二年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4803"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 北京版数学三、四年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4766"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 辽教版快乐英语（三年级起）三、四年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4731"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 上海牛津英语（一年级起）三年级上学期视频</a></li>

								<li><a
									href="#.tongyi.com/index.php/article/news?id=4723"
									target="_blank"><img
										src="/home/images/lbcc.png"
										alt="" align="absmiddle"> 上海牛津版英语（一年级起）五年级上学期视频</a></li>



							</ul>

						</div>

					</div>

				</div>

			</div>

		</section>

		<section class="container p_0">

			<div class="tit-box">

				<h3 class="fl">

					<i>假期直播</i>课堂

				</h3>

				<span class="tit-box-right fr"><a
					href="#.tongyi.com/index.php/zhiboke/index">更多直播></a></span>

			</div>

			<div class="zbkt-box">

				<a href="javascript:void(0)" class="prev"></a>

				<div class="scrollWrap">

					<div class="zbkt-cpjsbg">

						<i class="zbkt-yuan-l-0"></i> <i class="zbkt-yuan-l"></i> <i
							class="zbkt-yuan-l-01"></i> <i class="zbkt-yuan-l-02"></i> <i
							class="zbkt-yuan-l-03"></i> <i class="zbkt-yuan-l-04"></i>
						<hr>
					</div>
					<div>
						<div class="dlList">
						   <!-- @foreach($data as $inline)   -->
							<dl class="" 	onclick="clickinfo('/list_{{$inline->id}}');">
								<li title="绥化第十中学直播体验"><i class="zbkt-i">直播课堂</i>
									<dt>
										<a href="/list_{{$inline->id}}"><img
											src="{{$inline->course_type_picture}}"
											class="testimg"></a><span class="zbkt-ms"></span>
									</dt>
									<dd>
										<span class="zbkt-sj">07-16 18:30</span></span>
										<span class="zbkt-km fl"><?php echo substr($inline->course_type_title, 0,27); ?></span>
										<span class="zbkt-rs fr"><i></i>{{$inline->type_click}}</span>
									</dd>
									<h3><?php echo substr($inline->course_type_title, 0,27); ?>直播体验</h3></li>
								<div class="zbkt-cpjs">
									<i class="zbkt-yuan-c"></i>
									<p class="zbkt-titile">
										<i>正在直播</i><br> 主讲人：张凤海,翟洪红
									</p>
								</div>
							</dl>
						<!-- @endforeach -->
						</div>
					</div>

				</div>

				<a href="javascript:void(0)" class="next"></a>

			</div>

		</section>

		<section class="bg-gray">

		
			<div class="container p_0">

				<div class="tit-box">

					<h3 class="fl">

						热播<i>暑假课</i>

					</h3>

					<span class="tit-box-right fr"> <a
						href="#.tongyi.com/index.php/lessonlist/index/1">更多课程&gt;</a>

					</span> <span class="tit-box-right1 fr"> <a href="javascript:;"
						onclick="refurbishlist();">换一组</a>

					</span> <input type="hidden" name="flag_num" value="1"
						id="flag_num">

				</div>

				<div class="hot-item">

					<ul id="refurbishlist">

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362443');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 物理<br> 讲师：梁美华、仝现标<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14682141851935.jpg" width="" height="" />

										<h3>初中 物理</h3>

										<figcaption>玩转物理课堂</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362442');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 英语<br> 讲师：张秀娟、王金敏<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14682142213423.jpg" width="" height="" />

										<h3>初中 英语</h3>

										<figcaption>细说英语那些事</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362441');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 数学<br> 讲师：刁振华、石洪英<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14682142531923.jpg" width="" height="" />

										<h3>初中 数学</h3>

										<figcaption>巧学数学全攻略</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362439');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 语文<br> 讲师：张供领、张洪国<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14682142898758.jpg" width="" height="" />

										<h3>初中 语文</h3>

										<figcaption>语文学习微技巧</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362438');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 物理<br> 讲师：梁美华<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14681163588996.jpg" width="" height="" />

										<h3>初中 物理</h3>

										<figcaption>领先一步学物理</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362437');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 英语<br> 讲师：佀翠田、张秀娟<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14681161989758.jpg" width="" height="" />

										<h3>初中 英语</h3>

										<figcaption>英语知识轻松学</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362436');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 数学<br> 讲师：张韦强、刁振华<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14681158588832.jpg" width="" height="" />

										<h3>初中 数学</h3>

										<figcaption>基础知识抢先看</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/362435');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 语文<br> 讲师：陈淑华、张功领<br> 学校：郓城县第一初级中学家委会<br> <b>￥120.00</b>

										</p> <img src="/home/images/14681154096181.jpg" width="" height="" />

										<h3>初中 语文</h3>

										<figcaption>巧占语文制高点</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/360496');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											初中 语文<br> 讲师：赵慧<br> 学校：清华大学附属中学<br> <b>￥18.00</b>

										</p> <img src="/home/images/14619326467869.png" width="" height="" />

										<h3>初中 语文</h3>

										<figcaption>抢夺作文至高点</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/363493');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											高中 英语<br> 讲师：<br> 学校：大连市金州高级中学<br> <b>￥90.00</b>

										</p> <img src="/home/images/course-default.jpg" width="" height="" />

										<h3>高中 英语</h3>

										<figcaption>高中英语</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/363489');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											高中 地理<br> 讲师：<br> 学校：大连市金州高级中学<br> <b>￥90.00</b>

										</p> <img src="/home/images/course-default.jpg" width="" height="" />

										<h3>高中 地理</h3>

										<figcaption>高中地理</figcaption>
							
							</figure></li>

						<li
							onclick="clickinfo('#.tongyi.com/index.php/elite/course/363475');"><i>独家</i>

							<figure>

								<span><span>

										<p>

											高中 历史<br> 讲师：<br> 学校：大连市金州高级中学<br> <b>￥90.00</b>

										</p> <img src="/home/images/course-default.jpg" width="" height="" />

										<h3>高中 历史</h3>

										<figcaption>高中历史</figcaption>
							
							</figure></li>

					</ul>

				</div>

			</div>

		</section>

		<section class="container p_0">

			<div class="banner-show">

				<a href="#.tongyi.com/index.php/elite/detail/2"><img
					src="http://tyadmin.tongyi.com/uploads/ad/1466764126.jpg" /></a>



			</div>

			<div class="jpkc-box-c">

				<div class="tit-box tab-hd">

					<h3 class="fl">

						<i>精品</i>课程

					</h3>

					<ul class="jpkc-tab-nav">

						<li class="on"><a target="_blank" href="javascript:;">小学</a></li>

						<li class=""><a target="_blank" href="javascript:;">初中</a></li>

						<li class=""><a target="_blank" href="javascript:;">高中</a></li>

					</ul>



				</div>

				<div class="jpkc-box ">

					<div class="jpkc-tab-img">

						<a
							href="#.tongyi.com/index.php/services/index/elementary"
							class="jpkc-tab-img-jl"> <img
							src="#.tongyi.com/static//home/images/new/index/jpkc-icon01.gif">

						</a> <a
							href="#.tongyi.com/index.php/services/index/junior"
							class="jpkc-tab-img-jl"> <img
							src="#.tongyi.com/static//home/images/new/index/jpkc-icon02.gif">

						</a> <a
							href="#.tongyi.com/index.php/services/index/senior"
							class="jpkc-tab-img-jl"> <img
							src="#.tongyi.com/static//home/images/new/index/jpkc-icon03.gif">

						</a>

					</div>



					<div class="tab-bd">

						<div class="tab-pal">

							<div class="tit-box-right-tab fr">

								<a target="_blank"
									href="#.tongyi.com/index.php/lessonlist/index/2">更多课程&gt;</a>

							</div>

							<div class="hot-item hot-item1">

								<ul>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/211');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														三年级 英语<br> 讲师：闫璐璐
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥198.00</b>

													</p> <img width="" height="" src="/home/images/211.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>三年级下学期外研社（一年级起）英语</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/210');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														五年级 英语<br> 讲师：欧阳彤
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥168.00</b>

													</p> <img width="" height="" src="/home/images/210.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>五年级下学期牛津译林版英语</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/209');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														六年级 英语<br> 讲师：闫璐璐
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥99.00</b>

													</p> <img width="" height="" src="/home/images/209.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>六年级下学期人教新版英语</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/208');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														四年级 英语<br> 讲师：欧阳彤
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥158.00</b>

													</p> <img width="" height="" src="/home/images/208.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>四年级下学期外研社（一年起）英语</figcaption>

											</span></span>

										</figure>

									</li>



								</ul>

							</div>

						</div>

						<div class="tab-pal">

							<div class="tit-box-right-tab fr">

								<a target="_blank" href="#.tongyi.com/student/junior">更多课程&gt;</a>

							</div>

							<div class="hot-item hot-item1">

								<ul>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/200');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														七年级 语文<br> 讲师：李想
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥299.00</b>

													</p> <img width="" height="" src="/home/images/200.jpg">

													<h3 class="hot-h3-ju">初中 语文</h3>

													<figcaption>初一下学期鲁教五四制语文</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/199');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														七年级 语文<br> 讲师：邵伯俊
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥268.00</b>

													</p> <img width="" height="" src="/home/images/199.jpg">

													<h3 class="hot-h3-ju">初中 语文</h3>

													<figcaption>初一下学期长春版语文</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/198');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														七年级 英语<br> 讲师：王婷
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥298.00</b>

													</p> <img width="" height="" src="/home/images/198.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>初一下学期外研社英语</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/197');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														七年级 英语<br> 讲师：高鑫
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥289.00</b>

													</p> <img width="" height="" src="/home/images/197.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>初一下学期人教版2014版英语</figcaption>

											</span></span>

										</figure>

									</li>

								</ul>

							</div>

						</div>

						<div class="tab-pal">

							<div class="tit-box-right-tab fr">

								<a target="_blank" href="#.tongyi.com/student/senior">更多课程&gt;</a>

							</div>

							<div class="hot-item hot-item1">

								<ul>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/207');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高二 政治<br> 讲师：韩瑞
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥299.00</b>

													</p> <img width="" height="" src="/home/images/207.jpg">

													<h3 class="hot-h3-ju">初中 政治</h3>

													<figcaption>人教版政治必修三</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/206');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高二 语文<br> 讲师：卢丽君
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥368.00</b>

													</p> <img width="" height="" src="/home/images/206.jpg">

													<h3 class="hot-h3-ju">初中 语文</h3>

													<figcaption>人教新课标语文必修四</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/205');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高二 语文<br> 讲师：卢丽君
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥368.00</b>

													</p> <img width="" height="" src="/home/images/205.jpg">

													<h3 class="hot-h3-ju">初中 语文</h3>

													<figcaption>人教版语文必修三</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/course/index/203');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高二 生物<br> 讲师：隋佳慧
														<!-- <br> 学校：辽宁省实验中学<br>  -->

														<br> <b>￥339.00</b>

													</p> <img width="" height="" src="/home/images/203.jpg">

													<h3 class="hot-h3-ju">初中 生物</h3>

													<figcaption>人教版2014版生物必修三</figcaption>

											</span></span>

										</figure>

									</li>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="jpkc-box-c">

				<div class="tit-box tab-hd">

					<h3 class="fl">

						空中<i>实验室</i>

					</h3>

					<ul class="jpkc-tab-nav">

						<!-- <li class="on"><a target="_blank" href="javascript:;">小学</a></li> -->

						<li class="on"><a target="_blank" href="javascript:;">初中</a></li>

						<li class=""><a target="_blank" href="javascript:;">高中</a></li>

					</ul>

					<span class="tit-box-right fr"><a
						href="#.tongyi.com/sydby">更多课程&gt;</a></span>

				</div>

				<div class="jpkc-box ">

					<div class="jpkc-tab-img">

						<img src="/home/images/kzsys-icon.gif">

					</div>

					<div class="tab-bd">

						<!-- 

							<div class="tab-pal">

								<div class="hot-item hot-item1">

									<ul>

										<li><i>独家</i>

											<figure>

												<span><span>

														<p class="hot-p-ju">

															初一 语文<br> 讲师：王嘉佳<br> 学校：辽宁省实验中学<br> <b>￥360</b>

														</p> <img width="" height="" src="/home/images/hottit.jpg">

														<h3 class="hot-h3-ju">初中 语文</h3>

														<figcaption>黄浦江上的的卢浦大桥</figcaption>

												</span></span>

											</figure></li>

										<li><i>独家</i>

											<figure>

												<span><span>

														<p class="hot-p-ju">

															初一 语文<br> 讲师：王嘉佳<br> 学校：辽宁省实验中学<br> <b>￥360</b>

														</p> <img width="" height="" src="/home/images/hottit.jpg">

														<h3 class="hot-h3-ju">初中 语文</h3>

														<figcaption>黄浦江上的的卢浦大桥</figcaption>

												</span></span>

											</figure></li>

										<li><i>独家</i>

											<figure>

												<span><span>

														<p class="hot-p-ju">

															初一 语文<br> 讲师：王嘉佳<br> 学校：辽宁省实验中学<br> <b>￥360</b>

														</p> <img width="" height="" src="/home/images/hottit.jpg">

														<h3 class="hot-h3-ju">初中 语文</h3>

														<figcaption>黄浦江上的的卢浦大桥</figcaption>

												</span></span>

											</figure></li>

										<li><i>独家</i>

											<figure>

												<span><span>

														<p class="hot-p-ju">

															初一 语文<br> 讲师：王嘉佳<br> 学校：辽宁省实验中学<br> <b>￥360</b>

														</p> <img width="" height="" src="/home/images/hottit.jpg">

														<h3 class="hot-h3-ju">初中 语文</h3>

														<figcaption>黄浦江上的的卢浦大桥</figcaption>

												</span></span>

											</figure></li>

									</ul>

								</div>

							</div>

							-->

						<div class="tab-pal">

							<div class="hot-item hot-item1">

								<ul>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/9?vid=0');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初中 物理<br> 讲师：刘阳<br>

													</p> <img width="" height="" src="/home/images/collection90.jpg">

													<h3 class="hot-h3-ju">初中 物理</h3>

													<figcaption>初中物理实验（一）</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/9?vid=1');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初中 物理<br> 讲师：刘阳<br>

													</p> <img width="" height="" src="/home/images/collection91.jpg">

													<h3 class="hot-h3-ju">初中 物理</h3>

													<figcaption>初中物理实验（二）</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/11?vid=0');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初中化学<br> 讲师：高颖新<br>

													</p> <img width="" height="" src="/home/images/collection110.jpg">

													<h3 class="hot-h3-ju">初中 化学</h3>

													<figcaption>初中化学实验（一）</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/10?vid=0');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初中 生物<br> 讲师：张春燕<br>

													</p> <img width="" height="" src="/home/images/collection100.jpg">

													<h3 class="hot-h3-ju">初中 生物</h3>

													<figcaption>初中生物实验（一）</figcaption>

											</span></span>

										</figure>

									</li>

								</ul>

							</div>

						</div>

						<div class="tab-pal">

							<div class="hot-item hot-item1">

								<ul>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/7?vid=0');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高中 物理<br> 讲师：李亚萍<br>

													</p> <img width="" height="" src="/home/images/collection70.jpg">

													<h3 class="hot-h3-ju">高中 物理</h3>

													<figcaption>高中物理实验（一）</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/6?vid=0');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高中 化学<br> 讲师：鲁颖<br>

													</p> <img width="" height="" src="/home/images/collection60.jpg">

													<h3 class="hot-h3-ju">高中 化学</h3>

													<figcaption>高中化学实验（一）</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/6?vid=1');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高中 化学<br> 讲师：鲁颖<br>

													</p> <img width="" height="" src="/home/images/collection61.jpg">

													<h3 class="hot-h3-ju">高中 化学</h3>

													<figcaption>高中化学实验（二）</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/sydby/index.php/collection/index/8?vid=0');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														高中 生物<br> 讲师：艾田静<br>

													</p> <img width="" height="" src="/home/images/collection80.jpg">

													<h3 class="hot-h3-ju">高中 生物</h3>

													<figcaption>高中高中实验（一）</figcaption>

											</span></span>

										</figure>

									</li>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="jpkc-box-c">

				<div class="tit-box tab-hd">

					<h3 class="fl">

						统一<i>大讲堂</i>

					</h3>

					<ul class="jpkc-tab-nav">

						<li class="on"><a href="javascript:;">初中</a></li>

						<!-- <li class=""><a target="_blank" href="javascript:;">初中</a></li>

							<li class=""><a target="_blank" href="javascript:;">高中</a></li> -->

					</ul>

					<span class="tit-box-right fr"><a
						href="#.tongyi.com/index.php/lessonlist/index/3">更多课程&gt;</a></span>

					<!-- <span class="tit-box-right fr"><a href="javascript:;">更多课程&gt;</a></span> -->

				</div>

				<div class="jpkc-box ">

					<div class="jpkc-tab-img">

						<img src="/home/images/ty-icon.gif">

					</div>

					<div class="tab-bd">

						<div class="tab-pal">

							<div class="hot-item hot-item1">

								<ul>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/zhibo/detail/360495');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初一 语文<br> 讲师：李松石，...
														<!-- <br> 学校：辽宁省实验中学-->

														<br> <b>￥99.00</b>

													</p> <img width="" height="" src="/home/images/360495.jpg">

													<h3 class="hot-h3-ju">初中 语文</h3>

													<figcaption>中考必备：初中...</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/zhibo/detail/355131');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初一 英语<br> 讲师：慕晓霞，...
														<!-- <br> 学校：辽宁省实验中学-->

														<br> <b>￥89.00</b>

													</p> <img width="" height="" src="/home/images/355131.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>初中语法专项突...</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/zhibo/detail/350454');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初一 英语<br> 讲师：欧阳彤
														<!-- <br> 学校：辽宁省实验中学-->

														<br> <b>￥88.00</b>

													</p> <img width="" height="" src="/home/images/350454.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>中考英语考点各...</figcaption>

											</span></span>

										</figure>

									</li>

									<li
										onclick="clickinfo('#.tongyi.com/index.php/zhibo/detail/350253');">

										<figure>

											<span><span>

													<p class="hot-p-ju">

														初一 英语<br> 讲师：王斌
														<!-- <br> 学校：辽宁省实验中学-->

														<br> <b>￥720.00</b>

													</p> <img width="" height="" src="/home/images/350253.jpg">

													<h3 class="hot-h3-ju">初中 英语</h3>

													<figcaption>英语高效记忆特...</figcaption>

											</span></span>

										</figure>

									</li>



								</ul>

							</div>

						</div>

						<!-- <div class="tab-pal">22</div>

							<div class="tab-pal">333</div> -->

					</div>

				</div>

			</div>

			<div class="banner-show2">

				<a href="#.tongyi.com/subject/2016/summit/index.php"><img
					src="http://tyadmin.tongyi.com/uploads/ad/1466772157.jpg" /></a>



			</div>

		</section>

		<section class="bg-gray">

			<div class="container p_0">

				<div class="jpkc-box-c">

					<div class="tit-box tab-hd">

						<h3 class="fl">

							<i>教学</i>专区

						</h3>

						<ul class="jpkc-tab-nav jpkc-tab-nav-grey">

							<li class="on"><a target="_blank" href="javascript:;">小学</a></li>

							<li class=""><a target="_blank" href="javascript:;">初中</a></li>

							<!-- <li class=""><a target="_blank" href="javascript:;">高中</a></li> -->

						</ul>

						<span class="tit-box-right fr"><a
							href="#.tongyi.com/index.php/teaching/index/45/49/50"
							target="_blank">更多资源&gt;</a></span>

					</div>

					<div class="jpkc-box ">

						<div class="jxzq-tab-img">

							<img src="/home/images/jxzq-icon.jpg">

						</div>

						<div class="tab-bd">

							<div class="tab-pal">



								<div class="jxzq-dj">

									<ul>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 1 This Is Me</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358874"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 2 How Old Are You</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358873"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 3 Happy Birthday</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358872"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 4 In the Morning</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358871"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 5 In the Afternoon</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358870"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 6 Play with my Frien...</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358869"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 7 Danny''s Family</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358868"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>Lesson 8 Jenny''s Family</h3>

													<span>学科 <time>:</time> <i>英语</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358867"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>



									</ul>

								</div>



							</div>

							<div class="tab-pal">



								<div class="jxzq-dj">

									<ul>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第一单元 生物和生物圈 第一章...</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358401"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第二节 调查周边环境中的生物...</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358400"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第二章 了解生物 第一节 生物...</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358399"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第二节 生物与环境组成生态系...</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358398"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第三节 生物圈是最大的生态系...</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358397"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第二单元 生物体的结构层次 第...</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358396"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第二节 植物细胞</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358395"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>

										<li>

											<dl>

												<dt>

													<i>new</i><img
														src="#.tongyi.com/static//home/images/2016/pageshow.png">

												</dt>

												<dd>

													<h3>第三节 动物细胞</h3>

													<span>学科 <time>:</time> <i>生物</i></span> <a
														href="#.tongyi.com/index.php/teaching/download/358394"
														target="_blank">免费下载</a>

												</dd>

											</dl>

										</li>



									</ul>

								</div>



							</div>

							<!--<div class="tab-pal">22</div>

								 <div class="tab-pal">333</div> -->

						</div>

					</div>

					<div class="clear"></div>

				</div>

				<div class="con-zwzw container p_0">

					<div class="con-t clearfix">

						<div class="con-t-l fll prel">

							<div class="info1 clearfix">

								<dl class="border-rt">

									<dt class="orange">

										<span>3</span>3894
									</dt>

									<dd>已解决问题</dd>

								</dl>

								<dl>

									<dt class="orange">

										<span>2</span>
									</dt>

									<dd>待解决问题</dd>

								</dl>

							</div>

							<div class="info2 border-bm">

								<p class="ft18 orange border-tp">最新解决</p>

								<ul>

									<li class="clearfix orangeBk ">

										<div class="fll">

											<a href="http://114.tongyi.com/question-300994.html"
												title="ef平行ad,zd平行bc，ce平分角bcf,角dac等于120度，角acf等于20度，求角fec的度数"
												target="_blank">
												ef平行ad,zd平行bc，ce平分角bcf,角dac等于120度，角acf等于20度，求角fec的度数</a>

										</div> <span class="flr color_9">2016-04-23</span>

									</li>

									<li class="clearfix orangeBk ">

										<div class="fll">

											<a href="http://114.tongyi.com/question-300993.html"
												title="科技小组共有16名同学，男生比女生多4名，男、女生各有多少名？" target="_blank">
												科技小组共有16名同学，男生比女生多4名，男、女生各有多少名？</a>

										</div> <span class="flr color_9">2016-04-23</span>

									</li>

								</ul>

							</div>

							<div class="info2">

								<p class="ft18 blue">待解决</p>

								<ul>

									<li class="clearfix blueBk ">

										<div class="fll">

											<a href="http://114.tongyi.com/question-301048.html"
												title="课后练习的答案在哪里" target="_blank">课后练习的答案在哪里</a>

										</div> <span class="flr color_9">2016-07-14</span>

									</li>

									<li class="clearfix blueBk ">

										<div class="fll">

											<a href="http://114.tongyi.com/question-301047.html"
												title="专家好，我的英语书是科学普及出版社，请问选择什么版本？" target="_blank">专家好，我的英语书是科学普及出版社，请问选择什么版本？</a>

										</div> <span class="flr color_9">2016-07-14</span>

									</li>

								</ul>

							</div>

							<div class="titl1 tit-a titBg01">知学爱问</div>

						</div>

						<div class="con-t-r flr prel border-lt">

							<ul>

								<li class="clearfix ">

									<div class="tx">

										<img width="58" height="58" alt="" src="/home/images/4.jpg">

									</div>

									<div class="tx-con clearfix">

										<div class="tx-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/composition/all_detail.php?id=20975"
													title="我迷上了画漫画" target="_blank">我迷上了画漫画</a>

											</div>

											<div class="flr">

												<span><img align="absmiddle" src="/home/images/icon-tx01.png">

													haohao100</span> <span><img align="absmiddle"
													src="#.tongyi.com/static//home/images/2016/icon-tx02.png">

													小学</span> <span><img align="absmiddle"
													src="/home/images/icon-tx03.png"> 记叙文</span>

											</div>

										</div>

										<div class="tx-con-b lnh30 ft14 color_9">&nbsp;&nbsp;&nbsp;
											我的爱好很多，有时还很着迷，打篮球、吹长笛、画素描------。什么都想学，可什么都不精。现在又迷上了画漫画。





											&nbsp;&nbsp;
											以前，我爱看漫画，经常买一些漫画书回家看。漫画不仅搞笑，而且漫画书里的人物画得也很有意思。不管是人物的姿态、眼神还是画面的背景都画得栩栩如生。看的漫画越多，就越羡慕画漫画的人。于是，我决定学习画漫画。





											&nbsp;&nbsp;&nbsp;
											我开始临摹漫画书，照猫画虎似得画。慢慢地我发现，我画漫画的水平越来越好，越来越娴熟。也就越来越爱画了。有时竟然痴迷到了废寝忘食的地步，耽误了学习。奶奶没少说我。





											&nbsp;&nbsp; 有一次，是个
											星期天的上午，奶奶要上街购物。临走时告诉我：“先写作业，必须写完作业再画画。”奶奶走后。这个家可就是我的天下了，心想，反正你至少得中午回来。我先画一会儿，再写作业，于是就先画起画来，画着画着就把写作业的事忘得一干二净。我认真地画着每个人物的五官、身体、形态，画面背景。作品马上就要出炉啦，我认真地检查、欣赏。忽然间，我发现一个人物，有点儿别腿了，就开始修改，修改完之后，觉得太累了，高兴之余隐不住伸了个大大的懒腰。





											&nbsp;&nbsp;&nbsp;&nbsp;
											糟糕！就在我伸懒腰抬头的一瞬间，看见钟表已经指向11点半了。作业还一个字没写，我急忙拿出作业本，赶紧写作业。也就在这时，奶奶开门回来了。奶奶看着我那副紧张相，什么都知道了，把我臭骂了一顿。并且进行了严重警告
											。 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											打那以后，画画之前，我都要认真写作业，因为我还小，必须在学好基础知识的前提下，再发挥我的特长。





											&nbsp;&nbsp;&nbsp;&nbsp; ，</div>

									</div>

								</li>

								<li class="clearfix ">

									<div class="tx">

										<img width="58" height="58" alt="" src="/home/images/4.jpg">

									</div>

									<div class="tx-con clearfix">

										<div class="tx-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/composition/all_detail.php?id=20971"
													title="家乡的水库" target="_blank">家乡的水库</a>

											</div>

											<div class="flr">

												<span><img align="absmiddle" src="/home/images/icon-tx01.png">

													haohao100</span> <span><img align="absmiddle"
													src="#.tongyi.com/static//home/images/2016/icon-tx02.png">

													小学</span> <span><img align="absmiddle"
													src="/home/images/icon-tx03.png"> 说明文</span>

											</div>

										</div>

										<div class="tx-con-b lnh30 ft14 color_9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											我的家乡（抚顺）不仅是个交通便利，经济繁荣，风景如画的现代化城市，而且有着悠久的历史文化。虽然有很所多特色各异的旅游景点让人流连忘返，但是我印像最深的是家乡的水库-------大伙房水库。





											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											不知是乡愁，还是奶奶要向我传递点什么，从小到大只要回老家，奶奶总要带我到水库旅游。





											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											从市区乘坐到新太河的公交车。下车向前走几十米，一座1695米长，49米高的水库大坝便矗立在你眼前，坝坡上用纯白色的石头镶嵌出的九个大字：“让高山低头，河水让路”，在太阳光的照射下银光闪闪。坝顶很宽，能并排跑开几辆汽车。水库三面环山，茂密的植被郁郁葱葱，平静的水面在微风的吹拂下泛起涟漪，各种水鸟时儿扑向水面，时儿飞向蓝天，漂亮极了！这就是大伙房水库。它始建于上个世纪1954年，1958年竣工，是50年代中国最大的水库。听奶奶说，我的祖爷爷就是水库建设者里千军万马中的一员。由于工作忙，无暇顾及家里。加上当时的医疗条件有限，奶奶的弟弟只有一岁多的生命就死于“流脑，”葬在了水库边的山脚下。





											&nbsp;&nbsp;&nbsp;&nbsp;
											水库上游的一条支流是苏子河，流经抚顺市新宾满族自治县的永陵-、木奇-、----进入库区。明末1619年萨尔浒之战从新宾打到





											了今天的水库萨尔浒风景区。努尔哈赤以少胜多打败了明军。为大清王朝的建立奠定了坚实基础。当时军队伙房“厨房”的所在地，就起名为大伙房村。大伙房水库便因此得名。





											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											水库多年来不仅为当地的工农业生产、居民生活、经济发展做出了突出贡献，也在洪水来袭时发挥了重要做用，把水灾造成的损失降到最低。





											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											水库景区有很所多旅游景点，元帅林、小青岛------等，丰富了辽沈人民的精神生活。这就是我家乡送的水库。</div>

									</div>

								</li>

								<li class="clearfix ">

									<div class="tx">

										<img width="58" height="58" alt="" src="/home/images/5.jpg">

									</div>

									<div class="tx-con clearfix">

										<div class="tx-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/composition/all_detail.php?id=20976"
													title="仙人球开放的洁白花朵" target="_blank">仙人球开放的洁白花朵</a>

											</div>

											<div class="flr">

												<span><img align="absmiddle" src="/home/images/icon-tx01.png">

													cnxsj</span> <span><img align="absmiddle"
													src="#.tongyi.com/static//home/images/2016/icon-tx02.png">

													小学</span> <span><img align="absmiddle"
													src="/home/images/icon-tx03.png"> 说明文</span>

											</div>

										</div>

										<div class="tx-con-b lnh30 ft14 color_9">&nbsp;大家一定见过鲜红的玫瑰，芳香的月季，迷人的海棠……但是，仙人球开出的洁白花朵，你见过吗？





											&nbsp;相信大家多数没有见过！





											&nbsp;“仙人球开花？那可能吗？不可能吧！”大家肯定持有这样的疑问，那现在我们就来看一下吧！ &nbsp;
											仙人球大家肯定都见过，就是那种长有一根根细刺儿的绿色小毛球儿，它开放的花花期非常短暂。开出的花只有孤零零一朵，并不像其他的花一样一开开一丛、一簇。形似雪白的大喇叭，又像军营中的集结号，呈大约45度角朝向天空，像是要吹响召集士兵参战！





											&nbsp;
											仙人球开放的花只有一种“单调”的颜色——白色。可这“单调”的白色中却包含着不同于其他花朵的韵味：圣洁、神圣、安宁。





											&nbsp;
											它很低调，开出的花儿没有玫瑰那样妖艳；没有月季那样具有沁人心脾的清香；也没有海棠那般迷人。但对于它来说：“我就是我，是颜色不一样的烟火。”——虽然它只是一种颜色，但也恰恰印证了它生命的短暂——它的花期只有几个小时！





											&nbsp;
											在这区区几个小时里，却包含了多种沧桑：我们人类在人生中都要经过新生、衰老、死亡。花亦是如此，但这漫长的过程，却被压缩到几个小时！上天竟如此不公！但仙人球并不怨天尤人。对于它来说，我就是我！突然降生，从容死去，骄傲的走向终结，变成一堆枯骨！





											&nbsp; 这短短一瞬，在我们人生中根本不值一提，但在它的人生中呢？新生、衰老、死亡却区区几个小时！一瞬而没！





											&nbsp;
											我佩服它！上天不给了它如此不公，它却并不怨恨什么，从容地开放，默默地死去。它并不张扬，并不展现身姿。只求一瞬已足够！





											&nbsp; 果不然！我明天早上查看时，洁白的花朵早已变为一堆黑色的灰烬。 &nbsp;
											我爱仙人球开的花儿，它并不骄傲什么，也并不像许多明星那样展现自己，只求一瞬，在这世上，已足矣……</div>

									</div>

								</li>

								<li class="clearfix border-b">

									<div class="tx">

										<img width="58" height="58" alt="" src="/home/images/1.jpg">

									</div>

									<div class="tx-con clearfix">

										<div class="tx-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/composition/all_detail.php?id=20977"
													title="我爱我家" target="_blank">我爱我家</a>

											</div>

											<div class="flr">

												<span><img align="absmiddle" src="/home/images/icon-tx01.png">

													yjf098</span> <span><img align="absmiddle"
													src="#.tongyi.com/static//home/images/2016/icon-tx02.png">

													小学</span> <span><img align="absmiddle"
													src="/home/images/icon-tx03.png"> 散 文</span>

											</div>

										</div>

										<div class="tx-con-b lnh30 ft14 color_9">&nbsp;大家应该都知道家庭这一词吧！家庭是一个和睦相处的地方；家庭是一个快乐的世界；家庭是一个对于无家可归的人羡慕的处所；家庭是一个不能用金钱来衡量的东西。家庭是永远的，而我的一家是一个幸福而又温暖的三口之家，大家互相关心、互相倾诉、互相体贴谁也离不开谁……

											&nbsp;&nbsp;
											我的爸爸是家里的“智多星”老师，我们有什么问题全去问他，他也会耐心的对你教导。有时他也上网玩玩游戏，可他对工作却一丝不苟，他总对我说：“该工作时你就认真的工作，该玩时你就尽情的玩。”爸爸也是一个讲信用的人，只要说出来的话他总会做到。

											&nbsp;&nbsp;
											我生日那天，爸爸对我说给我买一个天文望远镜，我还以为爸爸是唬我开心呢，就没把这当一回事。可到我生日那天爸爸真的买来了一个天文望远镜，我更加佩服爸爸了。

											&nbsp;&nbsp;
											妈妈是我家的“白衣天使”，只要你一生病妈妈就立即过来摸摸你的额头，按按你的肚子，让你感到浑身不舒服。但是你真要哪天生病了，她就会连夜的照顾你，直到你病好。

											&nbsp;&nbsp;
											有一次，我得了寻麻疹，全身发痒，我只好抓一下，可是我受不了，只能用力的抓，直到把皮抓破才好受一点，可妈妈是妇科医生，对这个一窍不通，只好请教许多皮肤病专家。涂药时，她尽可能小心的涂，以至不弄痛我。她就是这样的尽心尽责。

											&nbsp;&nbsp;
											我是我家的“闲话大王”，家人谈话时，我插上一句话，话题肯定变成我讲的。因为在外面，我插不到一句话，英雄无用武之地，在家肯定要插上几句喽，再加上我又爱与熟悉的人谈话，谈起话来那就更加不用说了。

											&nbsp;&nbsp;
											有一次，我姐姐来吃晚饭，大家伙正在谈论姐姐学校的伙食，我就插上了一句“你那学校里的课堂作业多不多”，话题立刻转变成了课堂作业

											&nbsp;&nbsp; 亲爱的朋友，你们瞧，这就是我的一家，一个快乐的家庭，温暖的家庭，和谐的家庭！我爱我家。</div>

									</div>

								</li>

							</ul>

							<div class="titl2 tit-a titBg02">作文平台</div>

						</div>

					</div>

					<div class="con-b clearfix">

						<div class="con-b-l fll">

							<a title="会员心声" target="_blank"
								href="#.tongyi.com/index.php/benefits"><img alt="会员心声"
								src="/home/images/pic-hyxs.png"></a>

						</div>

						<div class="con-b-r flr">

							<ul>

								<li class="clearfix">

									<div class="tea">

										<img width="58" height="58" alt="" src="/home/images/7.jpg">

									</div>

									<div class="tea-con clearfix">

										<div class="tea-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/index.php/benefits/content?id=22652"
													target="_blank">赵荣元</a>

											</div>

											<div class="flr">

												<span>2016-07-14 20:24:04</span>

											</div>

										</div>

										<div
											title="一般地说，英语学习的原则是听、说领先，读、写跟上。语法的学习也是至关重要的。首先建立起我能学好英语的信心，然后以句子为单位，大量地模仿，疯狂地操练，大声地朗读，认真的学习初中英语语法，最后达到自如地说英语.

    初中英语学习中最重要的是坚持，只要能下定决心，坚持每天至少一个小时的学习英语，战胜自我最后肯定会有收获的。"
											class="tea-con-b lnh30 ft14 color_9">一般地说，英语学习的原则是听、说领先，读、写跟上。语法的学习也是至关重要的。首先建立起我能学好英语的信心，然后以句子为单位，大量地模仿，疯狂地操练，大声地朗读，认真的学习初中英语语法，最后达到自如地说英语.

											初中英语学习中最重要的是坚持，只要能下定决心，坚持每天至少一个小时的学习英语，战胜自我最后肯定会有收获的。</div>

									</div>

								</li>

								<li class="clearfix">

									<div class="tea">

										<img width="58" height="58" alt="" src="/home/images/2.jpg">

									</div>

									<div class="tea-con clearfix">

										<div class="tea-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/index.php/benefits/content?id=22650"
													target="_blank">李广钰</a>

											</div>

											<div class="flr">

												<span>2016-07-13 17:33:01</span>

											</div>

										</div>

										<div
											title="语文，是一门博大精深的学科，需要有学习兴趣，好的学习习惯等都是很重要的。有人感到学习语文很吃力，我想主要是由于没有掌握正确的方法，没有拥有一把打开语文之门的金钥匙。

　　学好语文，要注意培养 学习兴趣，养成好的学习习惯，积累学习方法，增强学习能力等。我希望当我讲完后，能为你的语文之路，垫石铺地，为你的语文大厦添砖加瓦，为你学习铺上一条通天大道。

“”完形填空“”是一种测试考生综合运用英语语言知识能力的一种题型，它集阅读理解能力与语言应用能力考查于一体，考查考生在阅读理解基础上，在一定语言情景下灵活运用词汇的能力。"
											class="tea-con-b lnh30 ft14 color_9">语文，是一门博大精深的学科，需要有学习兴趣，好的学习习惯等都是很重要的。有人感到学习语文很吃力，我想主要是由于没有掌握正确的方法，没有拥有一把打开语文之门的金钥匙。

											学好语文，要注意培养
											学习兴趣，养成好的学习习惯，积累学习方法，增强学习能力等。我希望当我讲完后，能为你的语文之路，垫石铺地，为你的语文大厦添砖加瓦，为你学习铺上一条通天大道。

											“”完形填空“”是一种测试考生综合运用英语语言知识能力的一种题型，它集阅读理解能力与语言应用能力考查于一体，考查考生在阅读理解基础上，在一定语言情景下灵活运用词汇的能力。</div>

									</div>

								</li>

								<li class="clearfix">

									<div class="tea">

										<img width="58" height="58" alt="" src="/home/images/5.jpg">

									</div>

									<div class="tea-con clearfix">

										<div class="tea-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/index.php/benefits/content?id=22648"
													target="_blank">邓泽颖</a>

											</div>

											<div class="flr">

												<span>2016-07-12 23:24:20</span>

											</div>

										</div>

										<div
											title="好的英语课程才学的好，不同于传统英语培训班教单词、教语法，在小学英语语法学习大作战的课堂上，老师会根据小朋友学英语的特点，使用很多有趣好玩的学习方法，帮助同学理解、加深印象；与同学互动，鼓励大家多开口、多练习。我发现，在小学英语语法大作战中，上了几次课后，效果都非常好。能让英语记忆非常深刻。

    更重要的是，在小学英语语法大作战的课程内容会根据小朋友的年龄、兴趣等来做匹配。同学们学到了自己喜欢的内容，学习兴趣自然就会更加浓厚，学习效果也越来越好。"
											class="tea-con-b lnh30 ft14 color_9">好的英语课程才学的好，不同于传统英语培训班教单词、教语法，在小学英语语法学习大作战的课堂上，老师会根据小朋友学英语的特点，使用很多有趣好玩的学习方法，帮助同学理解、加深印象；与同学互动，鼓励大家多开口、多练习。我发现，在小学英语语法大作战中，上了几次课后，效果都非常好。能让英语记忆非常深刻。

											更重要的是，在小学英语语法大作战的课程内容会根据小朋友的年龄、兴趣等来做匹配。同学们学到了自己喜欢的内容，学习兴趣自然就会更加浓厚，学习效果也越来越好。</div>

									</div>

								</li>

								<li class="clearfix">

									<div class="tea">

										<img width="58" height="58" alt="" src="/home/images/3.jpg">

									</div>

									<div class="tea-con clearfix">

										<div class="tea-con-t clearfix lnh30">

											<div class="fll ft16 orange">

												<a
													href="#.tongyi.com/index.php/benefits/content?id=22634"
													target="_blank">张川钰涵</a>

											</div>

											<div class="flr">

												<span>2016-04-26 19:21:43</span>

											</div>

										</div>

										<div title="很好，讲的很详细，受益无穷。"
											class="tea-con-b lnh30 ft14 color_9">很好，讲的很详细，受益无穷。</div>

									</div>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</section>

		<section class="hzyx-box container">

			<div class="hzyx-tit-box">

				<h3>

					合作<i>院校</i>

				</h3>

				<p>

					<i>PARTNER</i> UNIVERSITY

				</p>

				<hr>

			</div>

			<div class="hzyx-tab-bd">

				<div class="tab-pal">

					<div class="hzyx-tab-box ">

						<script type="text/javascript">



		//gundong

		var dir=1;//每步移动像素，大＝快

var speed=30;//循环周期（毫秒）大＝慢

var MyMar=null;



function Marquee(){//正常移动

	var scrollbox = document.getElementById("scrollbox");

	var scrollcopy = document.getElementById("scrollcopy");

	if(dir>0&&(scrollcopy.offsetWidth-scrollbox.scrollLeft)<=0){

		scrollbox.scrollLeft=0;

	}

	if(dir<0 &&(scrollbox.scrollLeft<=0)){

		scrollbox.scrollLeft=scrollcopy.offsetWidth;

	}

		scrollbox.scrollLeft+=dir;

}



function onmouseoverMy(){

	window.clearInterval(MyMar);

}//暂停移动



function onmouseoutMy() {

	MyMar=setInterval(Marquee,speed);

}//继续移动



function r_left(){

	if(dir==-1)

	dir=1;

}//换向左移



function r_right(){

	if(dir==1)

	dir=-1;

}//换向右移



function IsIE(){

	var browser=navigator.appName

	if((browser=="Netscape")){

		return false;

	}

	else if(browser=="Microsoft Internet Explorer"){

		return true;

	}else{

		return null;

	}

}



var _IsIE = IsIE();

var _MousePX = 0;

var _MousePY = 0;

var _DivLeft = 0;

var _DivRight = 0;

var _AllDivWidth = 0;

var _AllDivHeight = 0;



function MoveDiv(e){



	var obj = document.getElementById("scrollbox");

	_MousePX = _IsIE ? (document.body.scrollLeft + event.clientX) : e.pageX;

	_MousePY = _IsIE ? (document.body.scrollTop + event.clientY) : e.pageY;

	//Opera Browser Can Support ''window.event'' and ''e.pageX''

	

	var obj1 = null;



	if(obj.getBoundingClientRect){

		//IE

		obj1 = document.getElementById("scrollbox").getBoundingClientRect();

		_DivLeft = obj1.left;

		_DivRight = obj1.right;

		_AllDivWidth = _DivRight - _DivLeft;

	}else if(document.getBoxObjectFor){

		//FireFox

		obj1 = document.getBoxObjectFor(obj); 

		var borderwidth = (obj.style.borderLeftWidth != null && obj.style.borderLeftWidth != "") ? parseInt(obj.style.borderLeftWidth) : 0;

		_DivLeft = parseInt(obj1.x) - parseInt(borderwidth);

		_AllDivWidth = Cut_Px(obj.style.width);

		_DivRight = _DivLeft + _AllDivWidth;

	}else{

		//Other Browser(Opera)

		_DivLeft = obj.offsetLeft;

		_AllDivWidth = Cut_Px(obj.style.width);

		var parent = obj.offsetParent;

		

		if(parent != obj){

			while (parent){  

				_DivLeft += parent.offsetLeft; 

				parent = parent.offsetParent;

			}

		}

		_DivRight = _DivLeft + _AllDivWidth;

	}



	var pos1,pos2;

	pos1 = parseInt(_AllDivWidth * 0.2) + _DivLeft;

	pos2 = parseInt(_AllDivWidth * 0.8) + _DivLeft;



	if(_MousePX > _DivLeft && _MousePX < _DivRight){

		if(_MousePX > _DivLeft && _MousePX < pos1){

			r_left(); //Move left

		}

		else if(_MousePX < _DivRight && _MousePX > pos2){

			r_right(); //Move right

		}

		if(_MousePX > pos1 && _MousePX < pos2){

			onmouseoverMy(); //Stop

			MyMar=null;

		}else if(_MousePX < pos1 || _MousePX > pos2){

			if(MyMar==null){

				MyMar=setInterval(Marquee,speed);

			}

		}

	}

}



function Cut_Px(cswidth){

	cswidth = cswidth.toLowerCase();

	if(cswidth.indexOf("px") != -1){

		cswidth.replace("px","");

		cswidth = parseInt(cswidth);

	}

	return cswidth;

}



function MoveOutDiv(){

	if(MyMar == null){

		MyMar=setInterval(Marquee,speed);

	}

}



</script>

						<div class="scroll" id="scrollbox" onMouseMove="MoveDiv(event);"
							onMouseOut="MoveOutDiv();">

							<div id="scrollcon" style="width: 100%;">

								<table>

									<tbody>

										<tr>

											<td valign="top"><table width="100%">



													<tr>

														<td><a href="#.zyxschool.com/917" target="_blank"><img
																height="107" width="107" src="/home/images/1467255752.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/910" target="_blank"><img
																height="107" width="107" src="/home/images/1467255868.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/557" target="_blank"><img
																height="107" width="107" src="/home/images/1467255972.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/555" target="_blank"><img
																height="107" width="107" src="/home/images/1467256065.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/453" target="_blank"><img
																height="107" width="107" src="/home/images/1467256203.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/152" target="_blank"><img
																height="107" width="107" src="/home/images/1467256312.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/100" target="_blank"><img
																height="107" width="107" src="/home/images/1467256381.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/949" target="_blank"><img
																height="107" width="107" src="/home/images/1467256545.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/477" target="_blank"><img
																height="107" width="107" src="/home/images/1467256637.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/125" target="_blank"><img
																height="107" width="107" src="/home/images/1467256711.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/509" target="_blank"><img
																height="107" width="107" src="/home/images/1467256797.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1044"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468375505.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/541" target="_blank"><img
																height="107" width="107" src="/home/images/1468375625.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/530" target="_blank"><img
																height="107" width="107" src="/home/images/1468375685.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/468" target="_blank"><img
																height="107" width="107" src="/home/images/1468375757.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/451" target="_blank"><img
																height="107" width="107" src="/home/images/1468375832.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/430" target="_blank"><img
																height="107" width="107" src="/home/images/1468375890.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/342" target="_blank"><img
																height="107" width="107" src="/home/images/1468375944.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/120" target="_blank"><img
																height="107" width="107" src="/home/images/1468376018.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/116" target="_blank"><img
																height="107" width="107" src="/home/images/1468376083.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/114" target="_blank"><img
																height="107" width="107" src="/home/images/1468376147.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/64" target="_blank"><img
																height="107" width="107" src="/home/images/1468376233.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/932" target="_blank"><img
																height="107" width="107" src="/home/images/1468376346.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/469" target="_blank"><img
																height="107" width="107" src="/home/images/1468376420.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/78" target="_blank"><img
																height="107" width="107" src="/home/images/1468376524.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/21" target="_blank"><img
																height="107" width="107" src="/home/images/1468376587.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1114"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468376798.png" class="scroll-ml" /></a></td>



														<td><a href="http://cn.cfmgzzx.com/" target="_blank"><img
																height="107" width="107" src="/home/images/1468376935.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1070"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468383936.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1068"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468383986.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1060"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468384044.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1040"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468384096.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1020"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468384238.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/914" target="_blank"><img
																height="107" width="107" src="/home/images/1468384316.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/473" target="_blank"><img
																height="107" width="107" src="/home/images/1468384437.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/382" target="_blank"><img
																height="107" width="107" src="/home/images/1468384506.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/136" target="_blank"><img
																height="107" width="107" src="/home/images/1468384598.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/334" target="_blank"><img
																height="107" width="107" src="/home/images/1468384660.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/296" target="_blank"><img
																height="107" width="107" src="/home/images/1468384716.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/233" target="_blank"><img
																height="107" width="107" src="/home/images/1468384755.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/202" target="_blank"><img
																height="107" width="107" src="/home/images/1468384797.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/165" target="_blank"><img
																height="107" width="107" src="/home/images/1468384849.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/127" target="_blank"><img
																height="107" width="107" src="/home/images/1468384970.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/926" target="_blank"><img
																height="107" width="107" src="/home/images/1468385519.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1109"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468385583.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1078"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468385647.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/1018"
															target="_blank"><img height="107" width="107"
																src="/home/images/1468385711.png" class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/997" target="_blank"><img
																height="107" width="107" src="/home/images/1468385765.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/951" target="_blank"><img
																height="107" width="107" src="/home/images/1468385813.png"
																class="scroll-ml" /></a></td>



														<td><a href="#.zyxschool.com/937" target="_blank"><img
																height="107" width="107" src="/home/images/1468385860.png"
																class="scroll-ml" /></a></td>



													</tr>

													<tr>

														<td><a href="#.zyxschool.com/517" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467255647.png" />
														</a></td>



														<td><a href="#.zyxschool.com/564" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467255796.png" />
														</a></td>



														<td><a href="#.zyxschool.com/909" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467255935.png" />
														</a></td>



														<td><a href="#.zyxschool.com/556" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467256003.png" />
														</a></td>



														<td><a href="#.zyxschool.com/474" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467256107.png" />
														</a></td>



														<td><a href="#.zyxschool.com/368" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467256239.png" />
														</a></td>



														<td><a href="#.zyxschool.com/124" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467256345.png" />
														</a></td>



														<td><a href="#.zyxschool.com/1014"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1467256474.png" /></a></td>



														<td><a href="#.zyxschool.com/510" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467256600.png" />
														</a></td>



														<td><a href="#.zyxschool.com/519" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467256669.png" />
														</a></td>



														<td><a href="#.zyxschool.com/476" target="_blank">
																<img height="107" width="107"
																src="/home/images/1467256757.png" />
														</a></td>



														<td><a href="#.zyxschool.com/1065"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468375465.png" /></a></td>



														<td><a href="#.zyxschool.com/918" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468375547.png" />
														</a></td>



														<td><a href="#.zyxschool.com/536" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468375656.png" />
														</a></td>



														<td><a href="#.zyxschool.com/481" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468375723.png" />
														</a></td>



														<td><a href="#.zyxschool.com/466" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468375791.png" />
														</a></td>



														<td><a href="#.zyxschool.com/431" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468375858.png" />
														</a></td>



														<td><a href="#.zyxschool.com/374" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468375913.png" />
														</a></td>



														<td><a href="#.zyxschool.com/319" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468375988.png" />
														</a></td>



														<td><a href="#.zyxschool.com/118" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468376055.png" />
														</a></td>



														<td><a href="#.zyxschool.com/115" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468376116.png" />
														</a></td>



														<td><a href="#.zyxschool.com/65" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468376184.png" />
														</a></td>



														<td><a href="#.zyxschool.com/1105"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468376309.png" /></a></td>



														<td><a href="#.zyxschool.com/475" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468376381.png" />
														</a></td>



														<td><a href="#.zyxschool.com/143" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468376491.png" />
														</a></td>



														<td><a href="#.zyxschool.com/60" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468376555.png" />
														</a></td>



														<td><a href="#.zyxschool.com/1116"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468376757.png" /></a></td>



														<td><a href="#.zyxschool.com/916" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468376892.png" />
														</a></td>



														<td><a href="#.zyxschool.com/1089"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468383891.png" /></a></td>



														<td><a href="#.zyxschool.com/1069"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468383961.png" /></a></td>



														<td><a href="#.zyxschool.com/1066"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468384016.png" /></a></td>



														<td><a href="#.zyxschool.com/1057"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468384065.png" /></a></td>



														<td><a href="#.zyxschool.com/1036"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468384119.png" /></a></td>



														<td><a href="#.zyxschool.com/959" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384280.png" />
														</a></td>



														<td><a href="#.zyxschool.com/532" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384344.png" />
														</a></td>



														<td><a href="#.zyxschool.com/455" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384470.png" />
														</a></td>



														<td><a href="#.zyxschool.com/381" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384540.png" />
														</a></td>



														<td><a href="#.zyxschool.com/337" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384631.png" />
														</a></td>



														<td><a href="#.zyxschool.com/299" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384686.png" />
														</a></td>



														<td><a href="#.zyxschool.com/234" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384734.png" />
														</a></td>



														<td><a href="#.zyxschool.com/211" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384778.png" />
														</a></td>



														<td><a href="#.zyxschool.com/200" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384825.png" />
														</a></td>



														<td><a href="#.zyxschool.com/150" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468384872.png" />
														</a></td>



														<td><a href="#.zyxschool.com/459" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468385490.png" />
														</a></td>



														<td><a href="#.zyxschool.com/1113"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468385560.png" /></a></td>



														<td><a href="#.zyxschool.com/1079"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468385617.png" /></a></td>



														<td><a href="#.zyxschool.com/1019"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468385678.png" /></a></td>



														<td><a href="#.zyxschool.com/1003"
															target="_blank"> <img height="107" width="107"
																src="/home/images/1468385740.png" /></a></td>



														<td><a href="#.zyxschool.com/996" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468385788.png" />
														</a></td>



														<td><a href="#.zyxschool.com/939" target="_blank">
																<img height="107" width="107"
																src="/home/images/1468385835.png" />
														</a></td>



													</tr>

													<!-- 

												<tr>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo01.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo02.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo03.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo04.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo05.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo06.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo07.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo08.png" class="scroll-ml" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo09.png" class="scroll-ml" /></a></td>

												</tr>

												<tr>

													<td><a href="javascript:;"><img height="107"

															width="107" src="/home/images/linklogo10.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo11.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo12.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo13.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo14.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo15.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo16.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo17.png" /></a></td>

													<td><a href="javascript:;" ><img height="107"

															width="107" src="/home/images/linklogo05.png" /></a></td>



												</tr>



 -->

												</table></td>

											<td><div id="scrollcopy" style="width: 100%;"></div></td>

										</tr>

									</tbody>

								</table>

							</div>

						</div>

						<!-- 

					<div class="hzyx-tab-zz">

						<span>×</span>

					</div>

 -->

						<script type="text/javascript">

 document.getElementById("scrollcopy").innerHTML = document.getElementById("scrollcon").innerHTML;

 MyMar=setInterval(Marquee,speed);

 

</script>

					</div>

				</div>



				<div class="tab-pal" style="display: none;">

					<script type="text/javascript">



var dir1=1;//每步移动像素，大＝快

var speed1=30;//循环周期（毫秒）大＝慢

var MyMar1=null;



function Marquee1(){//正常移动

//alert(33333)

	var scrollbox1 = document.getElementById("scrollbox1");

	var scrollcopy1 = document.getElementById("scrollcopy1");

	if(dir1>0&&(scrollcopy1.offsetWidth-scrollbox1.scrollLeft)<=0){

		scrollbox1.scrollLeft=0;

	}

	if(dir1<0 &&(scrollbox1.scrollLeft<=0)){

		scrollbox1.scrollLeft=scrollcopy1.offsetWidth;

	}

		scrollbox1.scrollLeft+=dir1;

}



function onmouseoverMy1(){

	window.clearInterval(MyMar1);

}//暂停移动



function onmouseoutMy1() {

	MyMar1=setInterval(Marquee1,speed1);

}//继续移动



function r_left1(){

	if(dir1==-1)

	dir1=1;

}//换向左移



function r_right1(){

	if(dir1==1)

	dir1=-1;

}//换向右移



function IsIE(){

	var browser=navigator.appName

	if((browser=="Netscape")){

		return false;

	}

	else if(browser=="Microsoft Internet Explorer"){

		return true;

	}else{

		return null;

	}

}



var _IsIE = IsIE();

var _MousePX = 0;

var _MousePY = 0;

var _DivLeft = 0;

var _DivRight = 0;

var _AllDivWidth = 0;

var _AllDivHeight = 0;



function MoveDiv1(e){



	var obj = document.getElementById("scrollbox1");

	_MousePX = _IsIE ? (document.body.scrollLeft + event.clientX) : e.pageX;

	_MousePY = _IsIE ? (document.body.scrollTop + event.clientY) : e.pageY;

	//Opera Browser Can Support ''window.event'' and ''e.pageX''

	

	var obj1 = null;



	if(obj.getBoundingClientRect){

		//IE

		obj1 = document.getElementById("scrollbox1").getBoundingClientRect();

		_DivLeft = obj1.left;

		_DivRight = obj1.right;

		_AllDivWidth = _DivRight - _DivLeft;

	}else if(document.getBoxObjectFor){

		//FireFox

		obj1 = document.getBoxObjectFor(obj); 

		var borderwidth = (obj.style.borderLeftWidth != null && obj.style.borderLeftWidth != "") ? parseInt(obj.style.borderLeftWidth) : 0;

		_DivLeft = parseInt(obj1.x) - parseInt(borderwidth);

		_AllDivWidth = Cut_Px(obj.style.width);

		_DivRight = _DivLeft + _AllDivWidth;

	}else{

		//Other Browser(Opera)

		_DivLeft = obj.offsetLeft;

		_AllDivWidth = Cut_Px(obj.style.width);

		var parent = obj.offsetParent;

		

		if(parent != obj){

			while (parent){  

				_DivLeft += parent.offsetLeft; 

				parent = parent.offsetParent;

			}

		}

		_DivRight = _DivLeft + _AllDivWidth;

	}



	var pos1,pos2;

	pos1 = parseInt(_AllDivWidth * 0.2) + _DivLeft;

	pos2 = parseInt(_AllDivWidth * 0.8) + _DivLeft;



	if(_MousePX > _DivLeft && _MousePX < _DivRight){

		if(_MousePX > _DivLeft && _MousePX < pos1){

			r_left1(); //Move left

		}

		else if(_MousePX < _DivRight && _MousePX > pos2){

			r_right1(); //Move right

		}

		if(_MousePX > pos1 && _MousePX < pos2){

			onmouseoverMy1(); //Stop

			MyMar1=null;

		}else if(_MousePX < pos1 || _MousePX > pos2){

			if(MyMar1==null){

				MyMar1=setInterval(Marquee1,speed1);

			}

		}

	}

}



function Cut_Px(cswidth){

	cswidth = cswidth.toLowerCase();

	if(cswidth.indexOf("px") != -1){

		cswidth.replace("px","");

		cswidth = parseInt(cswidth);

	}

	return cswidth;

}



function MoveOutDiv1(){

	if(MyMar1 == null){

		MyMar1=setInterval(Marquee1,speed1);

	}

}

</script>

					<div class="hzyx-tab-box-s ">

						<div class="scroll" id="scrollbox1" onMouseMove="MoveDiv1(event);"
							onMouseOut="MoveOutDiv1();">

							<div id="scrollcon1" style="width: 100%;">

								<table>

									<tbody>

										<tr>

											<td valign="top"><table width="100%">

													<tr>

														<td>

															<li>

																<dt>

																	<h3>北京</h3>

																</dt>

																<dd>

																	<h3>北京市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1089"
																		title="北京延庆第二中学">北京延庆第二中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/136"
																		title="清华大学附属中学永丰学校">清华大学附属中学永丰学校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/337"
																		title="北京市海淀区翠微小学">北京市海淀区翠微小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/334"
																		title="北京市东方德才学校">北京市东方德才学校</a>
																</dd>

														</li>

														</td>



														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/299" title="北京市八一中学">北京市八一中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/296"
																		title="北京理工大学附属中学">北京理工大学附属中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/234"
																		title="北京市海淀区东北旺中心小学">北京市海淀区东北旺中心小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/233"
																		title="北京市海淀区枫丹实验小学">北京市海淀区枫丹实验小学</a>
																</dd>

														</li>

														</td>



														<td>

															<li>

																<dt>

																	<h3>内蒙古</h3>

																</dt>

																<dd>

																	<h3>赤峰市</h3>

																</dd>

																<dd>
																	<a href="http://cn.cfmgzzx.com/" title="赤峰蒙古族中学">赤峰蒙古族中学</a>
																</dd>

														</li>

														</td>





														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>乌兰察布市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/916" title="集宁一中">集宁一中</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt>

																	<h3>辽宁省</h3>

																</dt>

																<dd>

																	<h3>沈阳市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/517" title="辽宁省实验中学">辽宁省实验中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/917" title="沈阳第二中学">沈阳第二中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/564" title="沈阳勋望小学">沈阳勋望小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/910"
																		title="沈阳市法库县东湖小学">沈阳市法库县东湖小学</a>
																</dd>

														</li>

														</td>



														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/909" title="沈阳市第十一中学">沈阳市第十一中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/557"
																		title="沈阳市大东区辽沈街第二小学">沈阳市大东区辽沈街第二小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/556"
																		title="沈阳市皇姑区岐山路第一小学">沈阳市皇姑区岐山路第一小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/555"
																		title="沈阳市皇姑区童晖小学">沈阳市皇姑区童晖小学</a>
																</dd>

														</li>

														</td>



														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>大连市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1014"
																		title="大连市第十一中学">大连市第十一中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/949"
																		title="大连经济技术开发区第一中学">大连经济技术开发区第一中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/510" title="大连海湾高级中学">大连海湾高级中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/477"
																		title="大连市第二十四中学">大连市第二十四中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/519" title="大连市第二中学">大连市第二中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/125" title="大连市103中学">大连市103中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/476" title="大连市第十六中学">大连市第十六中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/509"
																		title="大连市金州高级中学">大连市金州高级中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt>

																	<h3>吉林省</h3>

																</dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/481"
																		title="吉林省第二实验高新学校">吉林省第二实验高新学校</a>
																</dd>

														</li>

														</td>





														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>长春市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/541"
																		title="榆树市第一高级中学">榆树市第一高级中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/468" title="长春市第八中学">长春市第八中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>吉林市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1065"
																		title="吉林市船营区第十一小学校">吉林市船营区第十一小学校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1044"
																		title="船营区第二小学校">船营区第二小学校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/918" title="吉林第七中学校">吉林第七中学校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/536" title="白城市第二中学">白城市第二中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/530" title="吉林市松花江中学">吉林市松花江中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/466" title="舒兰市第一中学">舒兰市第一中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/431" title="吉林市毓文中学">吉林市毓文中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/430" title="吉林市第一中学">吉林市第一中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/374" title="吉林市第九中学">吉林市第九中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/342" title="吉林省实验中学">吉林省实验中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/118"
																		title="吉林市第二十九中学">吉林市第二十九中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/116"
																		title="吉化第一高级中学校">吉化第一高级中学校</a>
																</dd>

														</li>

														</td>

														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/115" title="吉林市第十八中学">吉林市第十八中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/114"
																		title="统一教育•永吉实验高级中学网校">统一教育•永吉实验高级中学网校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/65"
																		title="吉林市永吉县第十中学">吉林市永吉县第十中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/64"
																		title="吉林市永吉县第三十五中学">吉林市永吉县第三十五中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>四平市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/451" title="四平市第二十中学">四平市第二十中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/120"
																		title="吉林省四平市第十七中学">吉林省四平市第十七中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>白城市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/319" title="白城市第一中学">白城市第一中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt>

																	<h3>黑龙江省</h3>

																</dt>

																<dd>

																	<h3>齐齐哈尔市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/459"
																		title="齐齐哈尔市逸夫小学校">齐齐哈尔市逸夫小学校</a>
																</dd>

														</li>

														</td>





														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>佳木斯市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/926" title="佳木斯市第一中学">佳木斯市第一中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt>

																	<h3>安徽省</h3>

																</dt>

																<dd>

																	<h3>合肥市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1116"
																		title="合肥市168玫瑰园">合肥市168玫瑰园</a>
																</dd>

														</li>

														</td>





														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>马鞍山市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1114"
																		title="马鞍山市第二十二中学">马鞍山市第二十二中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt>

																	<h3>山东省</h3>

																</dt>

																<dd>

																	<h3>济南市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/21" title="济南市长清第一中学">济南市长清第一中学</a>
																</dd>

														</li>

														</td>





														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>青岛市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/60" title="莱西市滨河小学">莱西市滨河小学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>潍坊市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1105" title="昌邑市文山中学">昌邑市文山中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/475" title="山东省昌乐一中">山东省昌乐一中</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/143" title="莱州市双语学校">莱州市双语学校</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>泰安市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/469"
																		title="山东省宁阳第六中学">山东省宁阳第六中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>威海市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/78"
																		title="威海市文登区第二实验小学">威海市文登区第二实验小学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>菏泽市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/932"
																		title="郓城县第一初级中学家委会">郓城县第一初级中学家委会</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt>

																	<h3>河南省</h3>

																</dt>

																<dd>

																	<h3>郑州市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1079"
																		title="中牟县第一高级中学">中牟县第一高级中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1003"
																		title="黄河科技学院附属中学 ">黄河科技学院附属中学 </a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/997" title="新郑市实验中学">新郑市实验中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/996" title="郑州惠民中学">郑州惠民中学</a>
																</dd>

														</li>

														</td>



														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/937" title="新郑二中分校">新郑二中分校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/930" title="郑州市第八十中学">郑州市第八十中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/573"
																		title="郑州市二七区陇海西路小学">郑州市二七区陇海西路小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/570"
																		title="郑州二七优智实验学校">郑州二七优智实验学校</a>
																</dd>

														</li>

														</td>



														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>洛阳市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1109"
																		title="河南科技大学附属高级中学">河南科技大学附属高级中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>安阳市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1078" title="汤阴育才学校">汤阴育才学校</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>新乡市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1113" title="新乡市第一中学">新乡市第一中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1019"
																		title="开封市金明中小学">开封市金明中小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1018"
																		title="原阳县城关镇第一初级中学">原阳县城关镇第一初级中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>南阳市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/844"
																		title="社旗县兴隆镇初级中学">社旗县兴隆镇初级中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/834"
																		title="社旗县城郊乡第一初级中学">社旗县城郊乡第一初级中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/549"
																		title="社旗县第一高级中学">社旗县第一高级中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>周口市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/951"
																		title="太康县第二高级中学">太康县第二高级中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/939" title="郑州第十九中学">郑州第十九中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt>

																	<h3>四川省</h3>

																</dt>

																<dd>

																	<h3>成都市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1069"
																		title="崇庆中学附属初中">崇庆中学附属初中</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1066"
																		title="成都高新滨河学校">成都高新滨河学校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1060"
																		title="都江堰市锦堰中学">都江堰市锦堰中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1057"
																		title="成都七中初中学校">成都七中初中学校</a>
																</dd>

														</li>

														</td>



														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1036"
																		title="四川省都江堰中学">四川省都江堰中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/381" title="成都外国语学校">成都外国语学校</a>
																</dd>

														</li>

														</td>



														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>攀枝花市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1040"
																		title="攀枝花市第四小学">攀枝花市第四小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/959" title="攀枝花市第六小学">攀枝花市第六小学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/914"
																		title="攀枝花市第十六中学校">攀枝花市第十六中学校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/532"
																		title="攀枝花市第二十四中小学校">攀枝花市第二十四中小学校</a>
																</dd>

														</li>

														</td>

														<td>

															<li class="li-nostyle">

																<dt></dt>

																<dd>

																	<h3></h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/473"
																		title="四川省攀枝花市第三高级中学校">四川省攀枝花市第三高级中学校</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/455" title="攀枝花市实验学校">攀枝花市实验学校</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>德阳市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1020" title="什邡市七一中学">什邡市七一中学</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>乐山市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/1070" title="乐山市第八中学">乐山市第八中学</a>
																</dd>

																<dd>
																	<a href="#.zyxschool.com/1068"
																		title="四川省犍为外国语实验学校">四川省犍为外国语实验学校</a>
																</dd>

														</li>

														</td>

														<td>

															<li>

																<dt></dt>

																<dd>

																	<h3>广安市</h3>

																</dd>

																<dd>
																	<a href="#.zyxschool.com/382" title="广安希贤学校">广安希贤学校</a>
																</dd>

														</li>

														</td>



													</tr>



												</table></td>

											<td><div id="scrollcopy1" style="width: 100%;"></div></td>

										</tr>

									</tbody>

								</table>

							</div>

						</div>

					</div>

					<script type="text/javascript">

 document.getElementById("scrollcopy1").innerHTML = document.getElementById("scrollcon1").innerHTML;

 MyMar1=setInterval(Marquee1,speed1);

</script>

				</div>

			</div>



			<div class="hzyx-tab-hd">



				<ul class="hzyx-tab-nav ">



					<li class="on"><a href="javascript:;" class="hzyx-icon"></a></li>

					<li class=""><a href="javascript:;" class="hzyx-icon01"></a></li>



				</ul>



			</div>



		</section>



		<div class="clear"></div>

		<!--头部广告区-->



		<span id="cookflag" style="display: none;"> <a
			href="javascript:void(0)" class="closeAdvBtn"></a> <a
			href="#.tongyi.com/index.php/elite/detail/3">

				<div class="q-guang" id="qguang"
					style="background-image: url('/static//home/images/new/index/begin_img.jpg');">





				</div>

		</a>

		</span>



		<!--底部浮动区域-->

		<div class="hzyx-tab-zzbox">

			<div class="hzyx-tab-zz">

				<span>×</span>

			</div>

		</div>



		<!--右侧链接区-->





		<ul class="mod-sidebar" id="mygoTop">

			<li data-text="下载APP" class=" ">

				<div class="mygo-erwei">

					<img src="/home/images/erwei.jpg">

				</div>

				<p class="item01">

					<i></i> <span>下载APP</span>

				</p>

			</li>

			<li data-text="价格说明" class="  "><a
				href="http://member.tongyi.com/index.php/service/pay/">

					<p class="item02">

						<i></i> <span>价格说明</span>

					</p>

			</a></li>

			<li data-text="在线客服" class="  "><a
				href="#.tongyi.com/kfonline.php">

					<p class="item03">

						<i></i> <span>在线客服</span>

					</p>

			</a></li>

			<li data-text="400-680-9088" class="  "><a href="tel:4006809088">

					<p class="item04">

						<i></i> <span style="font-size: 12px;">400-680-9088</span>

					</p>

			</a></li>

			<li data-text="团队建设" class="  ">

				<p class="item05">

					<i></i> <span>团队建设</span>

				</p>

			</li>



			<li data-text="返回顶部" class=" " id="tophref">

				<p class="item06">

					<i></i> <span>返回顶部</span>

				</p>

			</li>

		</ul>

		<script>

//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失

$(function () {

	$("#tophref").hide();

	$(window).scroll(function(){

		if ($(window).scrollTop()>100){

			$("#tophref").fadeIn(1000);

		}

		else

		{

			$("#tophref").fadeOut(1000);

		}

	});



	//当点击跳转链接后，回到页面顶部位置



	$("#tophref").click(function(){

		$('body,html').animate({scrollTop:0},1000);

		return false;

	});

	$.post(

		"#.tongyi.com/index.php/index/updatepswts",

		function(msg){

			if(msg==1)

			{

				$(".tip-box").show();		

				$(".mask-lay").show();

			}

		}

	);

});

</script>

		<!--信息提示窗口-->

		<div class="tip-box">

			<div class="tip-box-tit">

				<p class="fll">安全提示</p>

				<a href="javascript:void (0)" class="flr closeTipBtn"></a>

			</div>

			<div class="tip-box-content clearfix">

				<div class="tip-con-l fll">
					<i></i>
				</div>

				<div class="tip-con-r text-center fll">

					为了保障您的账号安全，<br /> 请您务必修改密码后再购买课程

				</div>

			</div>

			<div class="but-known">
				<a href="http://member.tongyi.com/index.php/password"
					class="closeKnownBtn" target="_blank">修改密码</a>
			</div>

		</div>

		<div class="mask-lay"></div>
		<footer>

			<div class="container footer">

				<p class="l1  col-md-12 col-sm-12 hidden-xs">

					<a target="_blank" href="#.tongyi.com/index.php/about/">统一教育网简介</a>
					| <a target="_blank" href="#.tongyiedu.com">统一教育集团</a> | <a
						target="_blank"
						href="http://member.tongyi.com/index.php/service/pay">服务价格说明</a> |

					<a target="_blank"
						href="#.tongyi.com/index.php/about?ln=val">产品价值</a> | <a
						target="_blank"
						href="#.tongyi.com/index.php/about?ln=corp">合作企业</a> | <a
						target="_blank" href="#.tongyi.com/index.php/about?ln=zp">人才招聘</a>

				</p>

				<p class="l1  col-md-12 col-sm-12 hidden-xs">

					<a target="_blank"
						href="#.tongyi.com/index.php/about?ln=cprt">版权声明</a> | <a
						target="_blank"
						href="#.tongyi.com/index.php/about?ln=contact">联系我们</a> |
					<a target="_blank"
						href="http://agent.tongyi.com/agent-test/login.php">财富系统</a> | <a
						target="_blank" href="#.tongyi.com/alliance/index.php">联盟合作</a>
					| <a target="_blank" href="#.tongyi.com/sitemap/">网站地图</a>

				</p>

				<p class="l3 mt15  col-md-12  col-sm-12 hidden-xs-block">信息网络传播视听节目许可证号:0108232
					| 网站视频由中国青少年广播网提供托管及播放服务</p>

				<p class="l3 col-md-12  col-sm-12">京公网安备110101002611号 | 京ICP证16656|
					京公网安备11066002037号| ICP证:B-2-4-20080039号 | 辽网文（2016）2497-025号 |
					增值电信业务许可证Copyright &copy; 2008 - 2016中国统一教育网</p>

				<p class="l3  col-md-12  col-sm-12 hidden-xs">质量管理体系认证：GB/T19001-2008/ISO9001:2008
					环境管理体系认证：GB/T24001-2004/ISO14001:2004
					健康管理体系认证：GB/T28001-2011/OHSAS18001:2007</p>

				<div class="tongyi-bm hidden-xs">
					<a href="#.tongyi.com /"> <img alt=""
						src="/home/images/tongyi-bm.png"></a>
				</div>

			</div>

		</footer>
	</div>

</body>

</html>