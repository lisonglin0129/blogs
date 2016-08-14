/*!
 * @名称：主体js
 * @功能：1、页面jq
 * @作者：Mr:Tian
 */

$(function() {
	$(".nav").slide({
		type : "menu",
		titCell : ".nLi",
		targetCell : ".sub",
		effect : "slideDown",
		delayTime : 300,
		triggerTime : 0,
		returnDefault : true
	});
	// 课程分类导航
	$(".sidenav .bd .item").removeClass("layer")
	$(".sidenav .bd .item").hover(function() {
		$(this).addClass("layer");
		$(this).find("a").addClass("hover");
	}, function() {
		$(this).removeClass("layer");
		$(this).find("a").removeClass("hover");
	});
	// nav-tab
	$(".my-tab-nav").slide({
		titCell : ".my-tab-hd li",
		mainCell : ".my-tab-bd",
		delayTime : 0
	});
	/* 轮播 */
	$(".slideBox").slide({
		mainCell : ".bd ul",
		autoPlay : true,
		interTime : 5000,
		delayTime : 500
	});
	/* 资源公告 */
	$(".txtMarquee-left").slide({
		mainCell : ".bd ul",
		autoPlay : true,
		effect : "leftMarquee",
		vis : 2,
		interTime : 50
	});
	// 图片滑过效果
	$(".testimg").zoomImgRollover();
	// 直播课堂滚动
	//jQuery(".zbkt-box").slide({mainCell:".dlList",autoPage:false,effect:"left",scroll:2,vis:5,pnLoop:false,mouseOverStop:false,autoPlay:false});
    jQuery(".zbkt-box").slide({mainCell:".dlList",autoPage:true,effect:"left",scroll:1,vis:5,pnLoop:true,autoPlay:false});
	// 直播课堂添加class/添加样式/判断
	$(".dljjqd .zbkt-yuan-c").css('border', '1px solid #ebebeb');
	 $(".dljjqd .zbkt-titile i").css({'color': '#999',"border":"1px solid #dcdcdc"});
	$(".dlList dl").hover(function() {
		if ($(this).hasClass('dljjqd')) {
			toggle_dl(2, this);
		} else {

			toggle_dl(0, this);
		}

	}, function() {
		if ($(this).hasClass('dljjqd')) {
			toggle_dl(3, this);
		} else {

			toggle_dl(1, this);

		}
	}

	)

	function toggle_dl(show_flag, _this) {
		if (show_flag == 0) {
			$height = '65px';
			$display = 'block';
			$border = '3px solid red';
			$(_this).addClass("hover-jt");

		} else if (show_flag == 1) {
			$height = '25px';
			$lineheight = 25;
			$display = 'none';
			$border = '1px solid red';
			$(_this).removeClass("hover-jt");
		} else if (show_flag == 2) {
			$height = '65px';
			$display = 'block';
			$border = '3px solid #ebebeb';
			$(_this).addClass("hover-jt-cc");
		} else if (show_flag == 3) {
			$height = '25px';
			$lineheight = 25;
			$display = 'none';
			$border = '1px solid #ebebeb';
			$(_this).removeClass("hover-jt-cc");
		}

		$(_this).find("dd").stop().animate({
			height : $height,
			lineHeight : $lineheight
		}, 400);
		$(_this).find(".zbkt-sj").css('display', $display);
		$(_this).find(".zbkt-yuan-c").css('border', $border);
	}
	// 学校link
	$(".school-link dd").hover(function() {
		$(this).find("p").stop().animate({
			bottom : "0"
		}, 400);

	}, function() {
		$(this).find("p").stop().animate({
			bottom : "-27px"
		}, 400);
	})
	// 热门暑假课
	$(".hot-item li").hover(function() {
		$(this).find("p").stop().animate({
			top : "0"
		}, 400);
		$(this).find("h3").stop().animate({
			bottom : "-60px"
		}, 400);

	}, function() {
		$(this).find("p").stop().animate({
			top : "-126px"
		}, 400);
		$(this).find("h3").stop().animate({
			bottom : "30"
		}, 400);
	})
	// 精品课程/空中实验室/统一大讲坛
	// tab切换
	jQuery(".jpkc-box-c").slide({
		titCell : ".tab-hd li",
		mainCell : ".tab-bd",
		delayTime : 0
	});
	// 动画
	$(".hot-item1 li").hover(function() {
		$(this).find("p").stop().animate({
			left : "0"
		}, 400);
		$(this).find("h3").stop().animate({
			right : "-175px"
		}, 400);

	}, function() {
		$(this).find("p").stop().animate({
			left : "-175px"
		}, 400);
		$(this).find("h3").stop().animate({
			right : "0"
		}, 400);
	})
	// 合作院系tab
	jQuery(".hzyx-box").slide({
		titCell : ".hzyx-tab-hd li",
		mainCell : ".hzyx-tab-bd",
		delayTime : 0
	});
	//合作院系隐藏
	$(".hzyx-tab-zz span").click(function(){
	  $(".hzyx-tab-zzbox").stop().animate({bottom:"-100px"},400);
	});

	
	
	// 头部全屏广告

	/*$(".q-guang ").stop().animate({
		top : "0"
	}, 1000);
	setInterval(function() {
		$(".q-guang").stop().animate({
			top : "-110%"
		}, 1000);
	}, 5000);*/
	
    $(".q-guang ").stop().animate({
        top : "0"
    }, 1000);
    setTimeout(function() {qguangHide()}, 5000);
    function qguangHide(){
        $(".closeAdvBtn").fadeOut();
        $(".q-guang").stop().animate({
            top : "-110%"
        }, 500);
    }
    $(".closeAdvBtn").click(function(){
        qguangHide();
        $(this).fadeOut();
    });

	// 右侧快速链接
	$(".mod-sidebar li").hover(function() {
		$(this).addClass("activeli").stop().animate({
			right : "90px"
		}, 400);
	}, function() {
		$(this).removeClass("activeli").stop().animate({
			right : "0"
		}, 400);
	})
	/*首页信息提示弹窗*/
    var maskLay =$(".mask-lay");
    function tipBox(){
        var boxW,boxH;
        boxW = $(document).width();
        boxH = $(document).height();
        maskLay.height(boxH);
        maskLay.width(boxW);
    }
    tipBox();
    $(".closeTipBtn").on("click",function(){
        $(".tip-box").hide();
        maskLay.hide();
    })
});
