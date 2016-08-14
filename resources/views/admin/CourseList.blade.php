@extends('admin.Layout.Layout')
<link href='/background/css/dataTable/dataTables.bootstrap.min.css' type='text/css' rel='stylesheet'/>
<!-- jQuery -->
<header id="header" class="media">
	        <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left" href="index.html">系统</a>
            <div class="media-body">
                <div class="media" id="top-menu">
                    <div class="pull-left tm-icon">
                       <a data-drawer="messages" class="drawer-toggle" href="">
                            <i class="sa-top-message"></i>
                            <i class="n-count animated">5</i>
                            <span>Messages</span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="">
                            <i class="sa-top-updates"></i>
                            <i class="n-count animated">9</i>
                            <span>Updates</span>
                        </a>
                    </div>
                    <div id="time" class="pull-right">
                       <span id="hours"></span> :
                        <span id="min"></span>:
                        <span id="sec"></span>
                    </div>
                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        <section id="main" class="p-relative" role="main">
    	    <!--菜单 -->
			@include('admin.Layout.left')
            <!-- 菜单结束 -->
            <!-- 内容部分-->
            <section id="content" class="container">
					<div class="block-area" id="defaultStyle">
					   <h3 class="block-title">Default Style</h3>
						<table id="data" class="table tile" cellspacing="0" width="100%">
						    <thead>
						        <tr>
						            <th>id</th>
						            <th>课程名称</th>
						            <th>课程类型</th>
						            <th>SEO标题</th>
						            <th>课程的价格</th>
						            <th>课程时间</th>
						            <th>课程节</th>
						            <th>点击率</th>
						            <th>操作</th>
						        </tr>
						    </thead>
						    <tbody>

						    </tbody>
						</table>
					 </div>
				</section>
				 @include('admin.Layout.IE')
        </section>
        <!-- jQuery -->
		<script src="/background/js/jquery-1.10.2.min.js"></script> <!-- jQuery Library -->
		<script src="/background/js/jquery-ui.min.js"></script> <!-- jQuery UI -->
		<script src="/background/js/dataTable/jquery.dataTables.js"></script> <!-- jQuery DataTable -->        
	    <script src="/background/js/jquery.easing.1.3.js"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->
        <!-- Bootstrap -->
        <script src="/background/js/bootstrap.min.js"></script>
        <!-- Charts -->
        <script src="/background/js/charts/jquery.flot.js"></script> <!-- Flot Main -->
        <script src="/background/js/charts/jquery.flot.time.js"></script> <!-- Flot sub -->
        <script src="/background/js/charts/jquery.flot.animator.min.js"></script> <!-- Flot sub -->
        <script src="/background/js/charts/jquery.flot.resize.min.js"></script> <!-- Flot sub - for repaint when resizing the screen -->
        <script src="/background/js/sparkline.min.js"></script> <!-- Sparkline - Tiny charts -->
        <script src="/background/js/easypiechart.js"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="/background/js/charts.js"></script> <!-- All the above chart related functions -->
        <!-- Map -->
        <script src="/background/js/maps/jvectormap.min.js"></script> <!-- jVectorMap main library -->
        <script src="/background/js/maps/usa.js"></script> <!-- USA Map for jVectorMap -->
        <!--  Form Related -->
        <script src="/background/js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
       <!-- UX -->
        <script src="/background/js/scroll.min.js"></script> <!-- Custom Scrollbar -->
        <!-- Other -->
        <script src="/background/js/calendar.min.js"></script> <!-- Calendar -->
        <script src="/background/js/feeds.min.js"></script> <!-- News Feeds -->
        <!-- All JS functions -->
        <script src="/background/js/layer/layer.js"></script>
	    <script type="text/javascript">
	    			function update(id) {
	    				   	layer.open({
	    					      type: 2,
	    					      title: '修改页面',
	    					      shadeClose: true,
	    					      shade: false,
	    					      maxmin: true, //开启最大化最小化按钮
	    					      area: ['893px', '600px'],
	    					      content: '/admin/info'
	    					    });
			    	}
	    			var lastIdx = null;
   			  	    var table = $('#data').DataTable({
    				"language" : {
						'url' : '/background/lang/dataTable_chinse.json'
				    },
					"bStateSave":true,
				    "serverSide": true,
				    "processing": true,
				    "bPaginate": true,
				    'bLengthChange' :false,
				    "pagingType":   "full_numbers",
				    "bAutoWidth": true,
				    "ajax" : "/admin/CourseAjaxList",
				    "columns": [
				                {"data": "id", "bSortable": false},
				                {"data": "course_name"},
				                {"data": "course_type"},
				                {"data": "course_type_seo_title"},
				                {"data": "course_price"},
				                {"data": "course_mins"},
				                {"data": "sourse_knob"},
				                {"data": "click"}
				     ],
				     "columnDefs": [{
				    	 "targets": [8],
				    	 "data": "id",
				    	 "render": function(data, type, full) {
				    		 return "<a href='javascript:update("+data+")'>修改</a>|<a href='/update?id=" + data + "'>删除</a>";
					     }
					 }]
		   		});

   			   	var s = setInterval(function() 
   		   	    {
   					var tablebody = document.getElementById('data').getElementsByTagName('tbody')[0];
   					var tr = tablebody.getElementsByTagName('tr');
   					var background = null;
					if(tr.length > 0) 
				    {
						clearInterval(s);
					}
   					for(var j = 0; j < tr.length; j++) 
   	   			    {
						if((j%2) == 0) 
						{
							tr[j].style.background = 'rgba(64, 244, 208, 0.2)';
						}else {
							tr[j].style.background = 'rgba(0, 191, 255, 0.3)';
						}
   	   				}
   					for(var i = 0; i < tr.length; i++) 
   	   				{
   						tr[i].onmouseover = function () 
   						{
   							background = this.style.background;
   							this.style.background = '#FFF';
 							this.style.color = '#000';
   	   	   				}
   						tr[i].onmouseout = function () {
   							this.style.background = background;
 							this.style.color = '#FFF';
 	   	   	   			}
   	   	   			}
   					
     	   	    },1);
		</script>
		<script src="/background/js/functions.js"></script>
	</body>
</html>