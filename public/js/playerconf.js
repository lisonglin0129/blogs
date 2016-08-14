var fp_config={
	key:"#@4e802f7d6ae97a954ed",
	plugins:{
		controls: {
			url: 'flowplayer.controls-3.2.13.swf',
			background: '#000000',
			backgroundGradient: 'low',
			progressColor:'#FFFFFF',
			bufferColor:'#CCCCCC',
			timeSeparator: '/',
			opacity: 0.9,
			tooltips : {
				buttons : true,
				play : '播放',
				fullscreen : '全屏',
				fullscreenExit : '退出全屏',
				pause : '暂停',
				mute : '静音',
				unmute : '取消静音'
			}
		},
		myContent: {
			url: 'flowplayer.content-3.2.8.swf',
			top: 150,
			width: 280,
			height:120,
			borderRadius: 10,
			backgroundColor:'#00e',
			html:'<p>My title</p>',
			style: {
				'p':{
					textAlign:"center"
				},
				'a':{
					textDecoration:"underline"
				}
			},
			closeButton:false,
			onClick:function(){
				if(typeof(myContentClkHandler)=="function")
					myContentClkHandler();
			}
		}
	},
	onFullscreen:function(){
		var plugin_content =player.getPlugin("myContent");
		plugin_content.animate({top:(window.outerHeight-100)/2});
	},
	onFullscreenExit:function(){
		var plugin_content =player.getPlugin("myContent");
		plugin_content.animate({top:100});
	},
	onLoad:function()
	{
		var c=player.getPlugin("myContent");
		c.toggle();
	},
	clip:{
		//播放结束后跳转到下一个视频
		onFinish:function()
		{
			if($('#next_id').val())
			{
				var url=window.location.toString().substring(0,window.location.toString().lastIndexOf('?'));
				window.location=url+"?id="+$('#next_id').val();
			}
		}		
	}
}
function setplayf4m()
{
	fp_config.clip.urlResolvers=['f4m'];
	fp_config.clip.provider='httpstreaming';
	fp_config.plugins.f4m={ url: "flowplayer.f4m-3.2.9.swf" };
	fp_config.plugins.httpstreaming={ url: "flowplayer.httpstreaming-3.2.9.swf" };
}