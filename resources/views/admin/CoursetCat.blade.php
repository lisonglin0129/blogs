@extends('admin.Layout.Layout')
<link href='/background/css/bt.css' rel='stylesheet' type='text/css'/>
<link href='/background/css/tree.css' rel='stylesheet' type='text/css'/>
<link href='/background/css/tree.css' rel='stylesheet' type='text/css'/>
<link href='/background/css/dataTable/dataTables.bootstrap.min.css' type='text/css' rel='stylesheet'/>
<script src="/background/js/lib.js"></script>

<header id="header" class="media">
	        <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left" href="index.html">系统</a>
            <div class="media-body">
                <div class="media" id="top-menu">
                    <div class="pull-left tm-icon">
                       <a data-drawer="messages" class="drawer-toggle" href="">
                            <i class="sa-top-message"></i>
                            <i class="n-count animated">5</i>
                            <span></span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="">
                            <i class="sa-top-updates"></i>
                            <i class="n-count animated">9</i>
                            <span></span>
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
            <section id="content" class="container" style='overflow: hidden;'>
            	<div class="btn-group">
               	  <a href="javascript:addcat();" class="btn btn-sm btn-alt" style='text-shadow:none; margin-left:15px; margin-top:15px;'>添加分类</a>
				</div> 
				<div class="block-area" id="defaultStyle" style='width:200%; position:relative; right:0%; '>

				    <div class="tree" style='float:left; width:45%;'>
				      <!-- CourseCart  -->
					  	 @include('admin.Layout.CourseCart')
				  	  <!-- CourseCart  -->
					</div>
					<div class="tree tablesa"  style='float:left; margin-left:5.5%; width:47%;'>
				      <button id = 'back' type="button" class="btn btn-xs btn-alt"><span class="icon"></span>返回</button>
				      <!-- CourseCart  -->
				      	 @include('admin.Layout.Tables')
				  	  <!-- CourseCart  -->
					</div>
				 </div>
			</section>
			 @include('admin.Layout.IE')
        </section>

        <!-- jQuery -->
		<script src="/background/js/jquery-1.10.2.min.js"></script> <!-- jQuery Library -->
		<script src="/background/js/dataTable/jquery.dataTables.js"></script> <!-- jQuery DataTable -->        
        <script src="/background/js/tree.js"></script>
        <script src="/background/js/jquery-ui.min.js"></script> <!-- jQuery UI -->
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
        <script src="/background/js/functions.js"></script>
        <script src="/background/js/table.js"></script>
        <script src="/background/js/layer/layer.js"></script>
        <script>
	       	function addcat() {
       	  		layer.open({
				      type: 2,
				      title: '修改页面',
				      shadeClose: true,
				      shade: false,
				      maxmin: true, //开启最大化最小化按钮
				      area: ['893px', '600px'],
				      content: '/admin/CoursetCatAdd'
			    });
	        }

			function go(id) {
				tables({
					'redraw' :true,
					'ajax': '/admin/cat_'+id,
					'columns': [
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
				    		 return "<a href=''>修改</a>|<a href=''>删除</a>";
					     }
					 }]
				});
				$("#defaultStyle").animate({right:"100%"});
				$("#back").click(function() {
					$("#defaultStyle").animate({right:"0%"});
				})
			}
		</script>
        <script type="text/javascript">
			$('body').on('click', '.calendar-actions > li > a', function(e){
			    e.preventDefault();
				    var dataView = $(this).attr('data-view');
				    $('#calendar').fullCalendar('changeView', dataView);
				    //Custom scrollbar
				    var overflowRegular, overflowInvisible = false;
				    overflowRegular = $('.overflow').niceScroll();     
				});    
			})();
		</script>
	</body>
</html>