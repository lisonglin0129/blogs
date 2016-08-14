function tables(config){
      $('#data').DataTable({
		"language" : {
			'url' : '/background/lang/dataTable_chinse.json'
	    },
		"bStateSave":true,
		"bProcessing": true,
		"bDestroy":config.redraw,  /*是否动态加载*/
	    "serverSide": true,
	    "processing": true,
	    "bPaginate": true,
	    'bLengthChange' :false,
	    "pagingType": "full_numbers",
	    "bAutoWidth": true,
	    "ajax" : config.ajax,
	    "columns":config.columns,
	    "columnDefs":config.columnDefs
	});
}