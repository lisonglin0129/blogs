<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>统一教育网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta name="description" content="统一教育网">
    <meta name="keywords" content="统一教育网">
    <link rel="stylesheet" href="/Home/css/base.css">
    <link rel="stylesheet" href="/Home/css/index.css">
    <link rel="stylesheet" href="/Home/css/modular.css?3469">
    <link rel="stylesheet" href="/Home/css/animate.min.css">
    <script type="text/javascript" src="/Home/js/jquery.min.js"></script>
	<script type="text/javascript">	function toQzoneLogin()
	{    
		var A=window.open("http://www.tongyi.com/index.php/qqlogin/gologin","TencentLogin","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
	} 
$(function(){	
	$('#member_id').focus(function(){			 if($('#member_id').val()=="用户名/手机号码")
			{				$('#member_id').val('');
				$("#member_id").css("color","#000");
			}
		});
	});
      $(document).ready(function(e){ 
            $('input').focus(function(){
            })
               $('input').blur(function(e){ 
                    $(document).keydown(function(e){ 
                        if(e.keyCode == 13){ 
                          if(!$("#name").val()){ 
                               alert('请输入用户名')
                               return false;
                            }
                            if(!$("#pass").val()){ 
                               alert('请输入密码')
                               return false;
                            }
                           $("#lg_ty").submit();
                        }
                    })
            })
}) 
</script>
</head>
<body>
<header class="header_login">
    <div class="head_lg clearfix">
        <div class="logo fll"><a href="http://www.tongyi.com/"><img src="images/logo_lg.png" alt="统一教育网LOGO" width="230" height="63"/></a></div>
        <div class="nav_login flr">
            <a href="http://member.tongyi.com/index.php/login/index">登录</a>|
            <a href="http://member.tongyi.com/index.php/register/index/?from=http%3A%2F%2Fwww.tongyi.com%2F">注册</a>|
            <a href="http://www.tongyi.com/index.php/help">帮助中心</a>|
            <a href="http://www.tongyi.com/">返回首页</a>|
            <a href="http://www.tongyi.com/kfonline.php">在线客服</a>
        </div>
    </div>
</header>
<div class="content_lg prel">
    <div class="cloud01 pabs"></div>
    <div class="cloud02 pabs"></div>
    <div class="w1200 margin-auto-c lgCon">
        <div class="login-rqq01 pabs lgBox wow bounceInLeft" data-wow-duration="2s"></div>
        <div class="login-rqq02 pabs  wow bounceInDown" data-wow-duration="2s"></div>
        <div class="login-light pabs wow pulse" data-wow-duration="2s"></div>
        <div class="login-title pabs wow bounceInUp"></div>
        <div class="lgBox wow bounceInRight" data-wow-delay="0.1s">
            <div class="formTit">
                <div class="formTit-con">
                    <p class="p1">用户登录</p>
                </div>
            </div>
            <form action="" method="post" id="lg_ty">
               <dl class="clearfix margin_b15">
                    <dt class="lg-row1"></dt>
                    <dd><input type="text" placeholder="用户名" name="member_id" class="ipt" id='name'></dd>
                </dl>
                <dl class="clearfix">
                    <dt class="lg-row2"></dt>
                    <dd><input type="password" name="password" placeholder="密码" class="ipt" id='pass'></dd>
                </dl>
                <div class="info-fgt padding_5 clearfix">
		   		    <input type="hidden" name="from" id="from" value=""/>
                    <a href="http://member.tongyi.com/index.php/forget/" target="_blank" class="fll">忘记密码？</a>
                </div>
                <dl class="padding_l5 clearfix">
                    <dd class="check_lg clearfix"><input type="checkbox" name="remember" value="ok" class="fll check" id="check2"><label for="check2" class="cur-p fll"> 记住用户名（网吧或公用电脑上慎用) </label></dd>
                </dl>
                <div class="lgBtns clearfix">
                    <a href="javascript:document:lg_ty.submit();" class="lgBtns-lg fll">登录</a><a href="http://member.tongyi.com/index.php/register/?from=" target="_self" class="lgBtns-rg flr">注册</a>
                </div>
                <div class="lg-info margin_t20">其他方式登录</div>    
                <div class="lg-sel clearfix">
                    <a href="javascript:void(0)" onclick="toQzoneLogin()" class="qq"></a>
                </div>
                <div class="blue ft14 lnh30 applyForAccount text-center "><a href="http://www.tongyi.com/index.php/probation">申请试用账号 >></a></div>
            </form>

        </div>
    </div>
</div>






<footer class="footer_lg">
    <div class="containLg footer_lg clearfix">
        <div class="footer_lg_l fll"><a href="javascript:void(0)"><img src="images/logo_bm_lg.jpg" ></a></div>
        <div class="footer_lg_r fll">
            <p>
                <a href="http://www.tongyi.com/index.php/about">统一教育网简介</a>|
                <a href="http://member.tongyi.com/index.php/service/pay/">服务价格说明</a>|
                <a href="http://www.tongyi.com/index.php/about?ln=val">产品价值</a>|
                <a href="http://www.tongyi.com/index.php/about?ln=corp">合作企业</a>|
                <a href="http://www.tongyi.com/index.php/about?ln=zp">人才招聘</a>|
                <a href="http://www.tongyi.com/index.php/about?ln=cprt">版权声明</a>|
                <a href="http://www.tongyi.com/index.php/about?ln=contact">联系我们</a>|
                <a href="http://www.tongyi.com/honor/index.html">企业荣誉</a>|
                <a href="http://agent.tongyi.com/agent-test/login.php">财富系统</a>|
                <a href="http://www.tongyi.com/alliance/index.php">联盟合作</a>|
                <a href="http://www.tongyi.com/complain/index.php">客服反馈中心</a>|
                <a href="http://www.tongyi.com/sitemap/">网站地图</a>
            </p>
            <p>Copyright © 2008 - 2016 tongyi.com Inc. All Rights Reserved.</p>
        </div>
    </div>
</footer>


</body>
</html>