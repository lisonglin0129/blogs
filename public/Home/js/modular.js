/**
 * Created by Lois on 2016/5/5.
 */

$(function(){
    $(".nav").slide({
        type:"menu",
        titCell:".nLi",
        targetCell:".sub",
        effect:"slideDown",
        delayTime:300 ,
        triggerTime:0,
        returnDefault:true
    });
    //课程分类导航
    $(".sidenav .bd .item").hover(function(){
        $(this).addClass("layer");
        $(this).find("a").addClass("hover");
    },function(){
        $(this).removeClass("layer");
        $(this).find("a").removeClass("hover");
    });

    /*轮播*/
    $(".slideBox").slide({mainCell:".bd ul",autoPlay:true,interTime:5000,delayTime:500});
    /*资源公告*/
    $(".txtMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:2,interTime:50});
    /*名校课程相关*/
    $(".slideTxtBox").slide();
    /*提升用户体验，解决ie不支持placeholder*/
    // 判断浏览器是否支持 placeholder
    if(!placeholderSupport()){
        $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
            }
        }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.val(input.attr('placeholder'));
            }
        }).blur();
    }
    function placeholderSupport() {
        return 'placeholder' in document.createElement('input');
    }
//  sidemenu
    $('#sidemenu').onePageNav({
        //  currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: ':not(.clktop)',
        easing: 'swing'
    });
    $("#clkTop").click(function(){
        $('body,html').animate({ scrollTop: 0 }, 1000);
        return false;
    });

    /*学校列表切换*/
    var liIndex = 0;
    $(".buts").find("li").on("click",function(){
        liIndex = $(this).index();
        $(this).addClass("hover").siblings("li").removeClass("hover");
        $(".conList").eq(liIndex).show().siblings(".conList").hide();
    });

    /*显示隐藏课程*/
    $(".showAllKc").on("click",function(){
        var ep = $(this).parent().prev();
        curHeight = ep.height();
        autoHeight = ep.css('height', 'auto').height();
        ep.height(curHeight).animate({height: autoHeight}, 300);
        $(this).hide();
        $(".hideSomeKc").show();
    });
    $(".hideSomeKc").on("click",function(){
        var ep = $(this).parent().prev();
        ep.animate({height: "20px"}, 300);
        $(this).hide();
        $(".showAllKc").show();
    });

    /*手机下载二维码*/
    $(function(){ $("#appshow").hide(); });
    $("#appdown").mouseout(function () { $("#appshow").css("display","none"); });
    $("#appdown").mouseover(function () { $("#appshow").css("display","block");  });
    /*------------*/

    /*课程二维码*/
		
		$(".twocode ").hover(function(){
			
			$(this).find(".code-box").show();
			$(".coming").find("code-box").hide();
		},function(){
			$(this).find(".code-box").hide();
		});
		
	
	
	 /*课程二维码*/
    /*$(".twocode").hover(function(){
		
        $(this).find('.code-box').show();
    },function(){
        $(this).find('.code-box').hide();
    });*/
    /*------------*/

    /*school_topic*/
    /*学校专题教师隐藏信息显示交互*/
    $(".onetea").find("p").hover(function(){
        $(this).css({"-webkit-line-clamp":"999","height":"auto","border-bottom":"5px solid #63C6FC","z-index":"9999"},1000);
    },function(){
        $(this).css({"-webkit-line-clamp":"2","height":"70px","border":"none","z-index":"999"},1000);
    });

    /*学校简介展开收缩*/
    $(".but-open").on("click",function(){
        var ph = $(this).parent();
        curHeight = ph.height();
        autoHeight = ph.css('height', 'auto').height();
        ph.height(curHeight).animate({height: autoHeight}, 300);
        $(this).hide();
        $(".but-up").show();
    });
    $(".but-up").on("click",function(){
        var ph = $(this).parent();
        ph.animate({height: "60px"}, 300);
        $(this).hide();
        $(".but-open").show();
    });
    /*---course_player---*/
    /*视频播放列表*/
    $(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click"});

    /*---player2---*/
    var oLi_player2 = $(".player2-pt1-r-row3 > ul > li");
    oLi_player2.hover(function(){
        $(this).find(".kcDescribe").show();
    },function(){
        $(this).find('.kcDescribe').hide();
    });
    /*tab*/
    $(".slideTabBox").slide();
    
    /*显示全部教师信息*/
    $(".showTeas").hover(function(){
        $('.teaInfoAll').show();
    },function(){
        $('.teaInfoAll').hide();
    });

    /*学校课程购买*/
    function courseBuy(obj,fdObj1,fdObj2){
        $(obj).hover(function(){
            $(this).find(fdObj1).stop().animate({'bottom':'-40px'},100);
            $(this).find(fdObj2).stop().animate({'bottom':'0px'},300);
        },function(){
            $(this).find(fdObj1).stop().animate({'bottom':'0px'},300);
            $(this).find(fdObj2).stop().animate({'bottom':'-136px'},150);
        });
    }
    courseBuy(".courseBuy-con2-row3 ul li a",".course-info01",".course-info02");
    courseBuy(".live-courseBuy-con2-row3 ul li a",".live-course-info01",".live-course-info02");
    
    function windowBox(){
        var boxW,boxH;
        boxW = $(document).width();
        boxH = $(document).height();
        $(".mask-layer").height(boxH);
        $(".mask-layer").width(boxW);
    }
    $(".btnBuy").click(function(){
        $(".mask-layer").fadeIn();
        $(".popupBox").fadeIn();
    });
    $(".btn-close02").click(function(){
        $(this).parent().fadeOut();
    });

    $(".btn-close01").click(function(){
        $(".mask-layer").hide();
        $(".popupBox").fadeOut();
    });
    windowBox();
	
	 /*弹窗 中考成绩抵现*/
    var maskLay =$(".mask-lay1");
    function tipBox(){
        var boxW,boxH;
        boxW = $(document).width();
        boxH = $(document).height();
        maskLay.height(boxH);
        maskLay.width(boxW);
    }
    tipBox();
    /*$(".buy").on("click",function(){
       $(".tip-box-score").show();
        maskLay.show();
    });*/
    $(".closeTipsBtns").on("click",function(){
        $(".tip-box-score").hide();
        maskLay.hide();
    });
	
    /*---login---*/
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
});