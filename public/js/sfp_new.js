var currentSection=0;
$(function(){
	$("#menu_list li").each(function(i,n){
		$(n).css("cursor","pointer");
		(function(id){
			$(n).click(function(){
				switchList(id);
				setPlayTime(id);
				//setPosition(id);
				currentSection=id;
			});
		})(i);
	}); 
	setInterval("getPlayTime()",1500);
	//CurVersion();
});
//视频时间跳转

function setPlayTime(id)
{
	var playObj = document.getElementById("pluginObj");

	if(playObj==null)
	{
		setPosition(id);
		return;
	}

	if(playObj.GetTime!=null){
		playObj.Seek(playData[id]);
		setPosition(id);
	}
}/*
function setPlayTime(id)
{
    var swf = findSWF("player");
    swf.dragVideo(playData[id]);
    setPosition(id);
}*/
//高度调整
setInterval(resizeTable,500);
function resizeTable()
{
	var webHeight=window.document.documentElement.clientHeight;
	$(".right_con").height((webHeight-130)>=600?webHeight-130:600);
	$("#maintable").height(webHeight);
}
//讲义跳转
function setPosition(id)
{
	//if(FABridge.b_FlexPaper1!=null&&FABridge.b_FlexPaper1!=undefined)
	//{
		//var flexApp = FABridge.b_FlexPaper1.root();
		//flexApp.searchText(keyData[id]);
		var swf = findSWF("FlexPaper1Test");
		try{
		swf.searchText(keyData[id]);
		}catch(e){}
	//}
	//FlexPaper1.searchText(keyData[id]);
//	window.frames["jyfrm"].document.body.scrollTop=jyData[id];
	//$("#kuang").width($("#jybox").width()).height(keyData[id]);
}
function findSWF(movieName) {
	if (navigator.appName.indexOf("Microsoft")!= -1) {   
		return window[movieName];   
	} else {
		return document[movieName];   
	}
}
//获取视频时间并控制列表和讲义跳转
function getPlayTime()
{
	var playObj = document.getElementById("pluginObj");
	
	if(playObj==null)
	{
		return;
	}
	var t = playObj.GetTime();
	var tmpId = 0;
	for(var i=0;i<playData.length;i++)
	{
		if(t>=playData[i])
		{
			tmpId=i;
		}
	}
	if(currentSection!=tmpId)
	{
		//列表跳转
		switchList(tmpId);
		//讲义跳转
		setPosition(tmpId)
		currentSection=tmpId;
	}
}
function flashBorder()
{
	$("#kuang").show().fadeOut(400);
}
//切换列表
function switchList(id)
{
	$("#menu_list li:eq("+id+")").removeClass().addClass("mouse_on").siblings().removeClass().addClass("mouse_off");
}
//切换讲义和练习
function switchContent(id)
{
	$(".right_title a").removeClass();
	$(".right_title a:eq("+id+")").addClass("tab_on").siblings().addClass("tab_off");
	if(id==0)
	{
		$("#csbox").hide();
		$("#jybox").show();
	}
	else
	{
		$("#jybox").hide();
		$("#csbox").show();
	}
}
//升级提示
function CurVersion() {
	test = document.getElementById("pluginObj");
	if (test.GetCurVersion() != "1.0.4.2"){
		//alert("Current Version: "+test.GetCurVersion()+", please update HUPlayer.");
		//window.open('http://cn.haihaisoft.com/huplayer.aspx'); 
	}
}

var jifen=-1,last_video=0;
var site_url="http://www.tongyi.com/sfp/index.php";
function startplay(id)
{
	
	if(parameters.src!='')
	{
		$('#player').hide();
	}
	if(last_video>0)
	{
		$("#video_"+last_video).removeClass('now');
		$("#video_"+last_video+"txt").removeClass('now');
	}
	last_video=id;
	$("#video_"+id).addClass('now');
	$(".jpbfz").appendTo($("#video_"+id).parent()).show();
	$("#video_"+id).addClass('now');
	$("#video_"+id+"txt").addClass('now');
	if(id)
	{
		
			$('#showplayer').fadeIn("fast");
			var url=site_url+'/player_new?chapterid='+id+'&jdc=?';
			//alert(url);
			$.getJSON(
				url,
				function(data)
				{
					if(!data.error)
					{
						if(parameters.src=='')
						{
							parameters.src=data.url;
							swfobject.embedSWF(
										"http://www.tongyi.com/publish/player/Flash/StrobeMediaPlayback_v3.swf",
										"player",
										parameters["width"],
										parameters["height"],
										"10.1.0",
										{}, 
										parameters,
										{allowFullScreen:"true",wmode:"transparent"},
										{name:"player"}
									   );
						}else{
							clearTimeout(jifen);
							$('#player').show();
							player.setMediaResourceURL(data.url);
						}
						studyTime=Number(data.studyTime);
						if(studyTime>0)
						{
							studyId=data.studyId;
							jifen=setTimeout('doStudy()',studyTime*1000);
						}
					}else{
						alert(data.error);
						window.location= (data.turl);
					}
				}
			);				
					
	}
}
//取得学习记录
function doStudy(){
	player.showInfo("<br><br><br><p align='center'>请您在20秒内点击确定获取积分!</p>","OK","done_study");
}
function done_study(){
	var xmlHttp;
	try {
	  xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e1) {
	  try {
	    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	  } catch (e2) {
	    xmlHttp = false;
	  }
	}
	if (!xmlHttp) {
	  xmlHttp = new XMLHttpRequest();
	}
	var url = "http://www.tongyi.com/activity/study/studyEnd_zl.php?id=" + studyId;
	xmlHttp.open("GET", url, false);
	xmlHttp.send(null);
	player.showInfo("<br><br><br><p align='center'>"+xmlHttp.responseText+"</p>","OK");
}