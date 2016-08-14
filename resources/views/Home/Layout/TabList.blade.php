<div class="title clearfix" style="border: 1px solid #ddd">
	<ul class="nav-tabs pull-left nav" role="tablist" style="height: 55px;line-height: 55px;">
      <li style="width:auto" role="presentation"  class="active" ><a onClick="$('#comment').hide();$('#information').show().removeClass('fade');"  href="#information" aria-controls="home" role="tab" data-toggle="tab">课程简介</a></li>
      <li style="width:auto" role="presentation"><a onClick="$('#comment').hide();$('#information').hide().addClass('fade');" href="#catalog" aria-controls="profile" role="tab" data-toggle="tab">课程目录</a></li>
      <li style="width:auto" role="presentation" ><a href="http://www.tongyi.com/index.php/zhiboke/item?id=361834&comm=1" >
      <span class="hidden-xs">提问板</span>（<span style="color: #4aa9ea  ">1</span>）</a></li>
    </ul>
</div>
<div class="tab-content">
        <div class="information tab-pane fade clearfix"   id="information">
			<?php echo html_entity_decode($data->course_type_info) ?>       
        </div>
        <div class="catalog tab-pane  fade" id="catalog">
          <div class="schedule clearfix">
            <div class="col-md-6 col-md-push-3">
              <h4 class="text-center">课程计划</h4>
              <div class="line">
                <div class="time pull-left">
                <i class="point"></i>开课<span> 07月15日 </span></div>
                <div class="time pull-right">
                <i class="point"></i>结束<span> 08月19日 </span></div>
              </div>
            </div>
          </div>
          <ul class="clearfix">

			<!-- @foreach($clist as $lt)-->
		
				<li onClick="showhi(1)"> <i class="point"></i>
					<div class="col-md-6">{{$lt->course_title}}</div>
					<div class="col-md-6"> <span><i class="ico-playing"></i></span>
						<span class="state future">未开始</span>
						<span>11:10</span><span>07月19日</span> 
	                </div>
	            </li>

			<!-- @endforeach -->
            <div class="lig_hbwk" id="record_278" style="display:none"></div>
			<script>function showhi(id){$("#record_"+id).toggle('slow');}</script>
          </ul>
        </div>

</div>
