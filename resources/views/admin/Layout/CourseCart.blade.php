
<!-- @foreach($data as $node) -->
  <ul>
  	<li>
	 <span class='Collapse this branch'>
	  <i class="icon-calendar"></i> 
	  <a href= 'javascript:go("{{$node['type_id']}}")' data='{{$node['type_id']}}'>{{$node['nature_type']}}</a>
	 </span>
	 <!-- @if(isset($node['childs']))  -->
	 <!-- @if(is_array($node['childs'])&&count($node['childs'])>0)  -->
	 <!-- @foreach($node['childs'] as $childs) -->
	 <ul>
	 	<li>
	 	   <span class='Collapse this branch'>
	 	     <i class="icon-minus-sign"></i>
	 	     <a href='javascript:go("{{$node['type_id']}}")' data='/admin/cat_{{$node['type_id']}}'>{{$childs['nature_type']}}</a>
	 	   </span>
	 	     <!-- @if(isset($childs['childs']))  -->
			 <!-- @if(is_array($childs['childs'])&&count($childs['childs'])>0)  -->
			 <!-- @foreach($childs['childs'] as $cs) -->
	 	   <ul>
	 	   	 <li>
	 	   	   <span class='Collapse this branch'>
	 	   	 	<i class="icon-minus-sign"></i>
	 	   	 	<a href='javascript:go("{{$node['type_id']}}")' data='/admin/cat_{{$node['type_id']}}'>{{$cs['nature_type']}}</a>
	 	   	    </span>
	 	   	 </li>
	 	   </ul>
	 	   <!-- @endforeach  -->
		   <!-- @endif  -->
		   <!-- @endif  -->
	 	</li>
	 </ul>
	 <!-- @endforeach  -->
	 <!-- @endif  -->
	 <!-- @endif  -->
	</li>
  </ul>
<!-- @endforeach  -->