
@extends('admin.Layout.Layout')

<link href='/background/css/tree.css' rel='stylesheet' type='text/css'/>
<link href='/background/css/bt.css' rel='stylesheet' type='text/css'/>


<link href='/background/css/dataTable/dataTables.bootstrap.min.css' type='text/css' rel='stylesheet'/>
<style>
	.select option {font-size:16px; font-weight: bold;}
</style>
<script src="/background/js/lib.js"></script>
		<div id="multi-column" class="block-area">
			<form class="row form-columned" >
				<div class="form-group">
	                <label class="col-md-2 control-label" for="inputName1">分类名称</label>
	                <div class="col-md-10">
	                    <input type="text" placeholder="分类名称" style='color:#FFF;' id="inputName1" class="form-control input-sm">
	                </div>
	            </div>
                <div class="col-md-2 m-b-15">
                	<label class="col-md-2 control-label" for="inputName1">所属分类</label>
                    <select id ='cat_id' class="select" style='background-color:rgba(0,0,0,0);'>
                       <option>--顶级分类--</option>
                          <!--  @foreach ($data as $node)  -->
                        	  	 <option value="{{$node['type_id']}}">{{$node['nature_type']}}</option>
                        		 <!--  @if(isset($node['childs'])) -->
	                        		<!-- @if(is_array($node['childs'])&&count($node['childs'])>0)) -->
	                        		 	<!-- @foreach($node['childs'] as $child) -->
                        		 		     <option value="{{$node['type_id']}}">----{{$child['nature_type']}}</option>
	                        		 		 <!-- @if(isset($child['childs']))  -->
												 <!-- @if(is_array($child['childs'])&&count($child['childs'])>0)  -->
 														<!-- @foreach($child['childs'] as $cs => $key) -->
															<option value="{{$node['type_id']}}">--------{{$key['nature_type']}}</option>
														<!-- @endforeach -->
	                        		 		      <!-- @endif -->
	                        				 <!-- @endif  -->
	                        		 	<!-- @endforeach -->
	                        		<!--  @endif -->
                        		<!--  @endif  -->
                          <!--  @endforeach --> 
                     </select>
                 </div>
                 <div class="form-group">
	                <label class="col-md-2 control-label" for="inputName1">排序</label>
	                <div class="col-md-10">
	                    <input type="text" placeholder="分类名称" style='color:#FFF;' id="inputName1" class="form-control input-sm">
	                </div>
	            </div>
	            <div class="fileupload fileupload-new row" data-provides="fileupload">
                        <div class="input-group col-md-6">
                            <div class="uneditable-input form-control">
                                <i class="fa fa-file m-r-5 fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            <div class="input-group-btn">
                                <span class="btn btn-file btn-alt btn-sm">
                                <span class="fileupload-new">Select file</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" />
                            </span>
                            </div>

                            <a href="#" class="btn btn-sm btn-gr-gray fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div>
                  </div>
			
			</form>
		</div>
	 <button  id='sub' class="btn btn-block btn-alt">确定添加</button>
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
        <script type="text/javascript">
        	  get.Id('sub').onclick = function () {
					var dat = new Object();
					dat.nature_type = get.Id('inputName1').value;
					select = get.Id("cat_id");
					dat.pid = select.options[select.selectedIndex].value;
					dat.act = 'add';
					dat._token = '{{ csrf_token() }}';
					Call.Ajax({
						type:'post',
						url : '/admin/CoursetCatAdd',
						data : dat,
						success:function(e) {
								alert(e);
						}
					});
					
              }
			  $(document).ready(function() {
				  (function(){
					  /* Limited */
	                    $(".tag-select-limited").chosen({
	                        max_selected_options: 5
	                    });
	                    
	                    /* Overflow */
	                    $('.overflow').niceScroll();
				  })();
			  });
		</script>
</body>
</html>