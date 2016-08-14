<!-- Sidebar -->
<aside id="sidebar">
	<!-- Sidbar Widgets -->
	<div class="side-widgets overflow">
		<!-- Profile Menu -->
		<div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
			<a href="" data-toggle="dropdown"> <img class="profile-pic animated"
				src="/background/img/profile-pic.jpg" alt="">
			</a>
			<ul class="dropdown-menu profile-menu">
				<li><a href="javascript:MyArchives()">我的资料</a> <i class="icon left">&#61903;</i><i
					class="icon right">&#61815;</i></li>
				<li><a href="">消息</a> <i class="icon left">&#61903;</i><i
					class="icon right">&#61815;</i></li>
				<li><a href="">设置</a> <i class="icon left">&#61903;</i><i
					class="icon right">&#61815;</i></li>
				<li><a href="/admin/loginout">退出系统</a> <i class="icon left">&#61903;</i><i
					class="icon right">&#61815;</i></li>
			</ul>
			<h4 class="m-0">649713977</h4>
			@qq.com
		</div>
		<!-- Calendar -->
		<div class="s-widget m-b-25">
			<div id="sidebar-calendar"></div>
		</div>
		<!-- Feeds -->
		<div class="s-widget m-b-25">
			<h2 class="tile-title"></h2>
			<div class="s-widget-body">
				<div id="news-feed"></div>
			</div>
		</div>
		<!-- Projects -->
		<div class="s-widget m-b-25">
			<h2 class="tile-title"></h2>
			<div class="s-widget-body">
				<div class="side-border">
					<small></small>
					<div class="progress progress-small">
						<a href="#" data-toggle="tooltip" title=""
							class="progress-bar tooltips progress-bar-danger"
							style="width: 60%;" data-original-title="60%"> <span
							class="sr-only">60% Complete</span>
						</a>
					</div>
				</div>
				<div class="side-border">
					<small></small>
					<div class="progress progress-small">
						<a href="#" data-toggle="tooltip" title=""
							class="tooltips progress-bar progress-bar-info"
							style="width: 43%;" data-original-title="43%"> <span
							class="sr-only">43% Complete</span>
						</a>
					</div>
				</div>
				<div class="side-border">
					<small></small>
					<div class="progress progress-small">
						<a href="#" data-toggle="tooltip" title=""
							class="tooltips progress-bar progress-bar-warning"
							style="width: 81%;" data-original-title="81%"> <span
							class="sr-only">81%</span>
						</a>
					</div>
				</div>
				<div class="side-border">
					<small>1111</small>
					<div class="progress progress-small">
						<a href="#" data-toggle="tooltip" title=""
							class="tooltips progress-bar progress-bar-success"
							style="width: 10%;" data-original-title="10%"> <span
							class="sr-only">10%</span>
						</a>
					</div>
				</div>
				<div class="side-border">
					<small>22222</small>
					<div class="progress progress-small">
						<a href="#" data-toggle="tooltip" title=""
							class="tooltips progress-bar progress-bar-success"
							style="width: 95%;" data-original-title="95%"> <span
							class="sr-only">95%</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Side Menu -->
	<ul class="list-unstyled side-menu">
		<li class="active"><a class="sa-side-home" href="/admin"> <span
				class="menu-item">首页</span>
		</a></li>
		<li><a class="sa-side-typography" href="/admin/CourseList"> <span
				class="menu-item">课程列表</span>
		</a></li>
		<li><a class="sa-side-widget" href="/admin/CoursetCat"> <span
				class="menu-item">分类管理</span>
		</a></li>
		<li><a class="sa-side-table" href="tables.html"> <span
				class="menu-item">#</span>
		</a></li>
		<li class="dropdown"><a class="sa-side-form" href=""> <span
				class="menu-item">#</span>
		</a>
			<ul class="list-unstyled menu-item">
				<li><a href="form-elements.html">####</a></li>
				<li><a href="form-components.html">###</a></li>
				<li><a href="form-examples.html">##</a></li>
				<li><a href="form-validation.html">###</a></li>
			</ul></li>
		<li class="dropdown"><a class="sa-side-ui" href=""> <span
				class="menu-item">###</span>
		</a>
			<ul class="list-unstyled menu-item">
				<li><a href="buttons.html">###</a></li>
				<li><a href="labels.html">###</a></li>
				<li><a href="images-icons.html">###</a></li>
				<li><a href="alerts.html">###</a></li>
				<li><a href="media.html">###</a></li>
				<li><a href="components.html">###</a></li>
				<li><a href="other-components.html">###</a></li>
			</ul></li>
		<li><a class="sa-side-chart" href="charts.html"> <span
				class="menu-item">C###</span>
		</a></li>
		<li><a class="sa-side-folder" href="file-manager.html"> <span
				class="menu-item">###</span>
		</a></li>
		<li><a class="sa-side-calendar" href="calendar.html"> <span
				class="menu-item">###</span>
		</a></li>
		<li class="dropdown"><a class="sa-side-page" href=""> <span
				class="menu-item">###</span>
		</a>
			<ul class="list-unstyled menu-item">
				<li><a href="list-view.html">###</a></li>
				<li><a href="profile-page.html">###</a></li>
				<li><a href="messages.html">###</a></li>
				<li><a href="login.html">###</a></li>
				<li><a href="404.html">###</a></li>
			</ul></li>
	</ul>
</aside>
<script>
	function MyArchives() {
		//iframe层
		layer.open({
			  type: 2,
			  title: 'layer mobile页',
			  shadeClose: true,
			  shade: 0.8,
			  area: ['90%', '90%'],
			  content: '/admin/info'
		}); 
	}
</script>

