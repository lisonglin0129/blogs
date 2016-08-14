@extends('admin.Layout.Layout')
<header id="header" class="media">
	        <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left" href="index.html">SUPER ADMIN 1.0</a>
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
					 </div>
					 @include('admin.Layout.Edit')
	                    <div class="m-b-20">
	                      <a data-toggle="modal" href="#modalDefault" class="btn btn-sm">Modal - Default</a>
	                    </div>
	                    <!-- Modal Default -->	
	                    <div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-hidden="true">
	                        <div class="modal-dialog">
	                            <div class="modal-content">
	                                <div class="modal-header">
	                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                                    <h4 class="modal-title">Modal title</h4>
	                                </div>
	                                <div class="modal-body">
	                                    <p>
											Dialog
	                                    </p>
	                                </div>
	                                <div class="modal-footer">
	                                    <button type="button" class="btn btn-sm">Save changes</button>
	                                    <button type="button" class="btn btn-sm" data-dismiss="modal">Close</button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
				</section>

				 @include('admin.Layout.IE')
        </section>
        <!-- Javascript Libraries -->
        <!-- jQuery -->
		<script src="/background/js/jquery-1.10.2.min.js"></script> <!-- jQuery Library -->
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

        <script src="/background/js/slider.min.js"></script> <!-- Input Slider -->
        <script src="/background/js/fileupload.min.js"></script> <!-- File Upload -->
        
        <!-- Text Editor -->
        <script src="/background/js/editor2.min.js"></script> <!-- WYSIWYG Editor -->

        <!-- UX -->
        <script src="/background/js/scroll.min.js"></script> <!-- Custom Scrollbar -->

        <!-- Other -->
        <script src="/background/js/calendar.min.js"></script> <!-- Calendar -->
        <script src="/background/js/feeds.min.js"></script> <!-- News Feeds -->
        


        <!-- All JS functions -->
        <script src="/background/js/functions.js"></script>
	</body>
</html>