var total_show 	= 6;
var search 		= "";

$('#pag-temas').on('click','a',function(e){
	e.preventDefault(); 
	var pageNum = $(this).attr('data-ci-pagination-page');
	tag 		= $("#txt-tag").val();
	search 		= $("#txt-search").val();
	user_id 	= $("#txt-user-id").val();
	year 		= $("#txt-year").val();
	month 		= $("#txt-month").val();
	load(pageNum);
});

function load(pageNum){
	$.ajax({
		type: "POST",
		data: {
			page_num: 	pageNum,
			total_show: total_show,
			search: 	search
		},
		url: base_url+'main/loadContent/'+pageNum,
		dataType: 'JSON',
		beforeSend: function(objeto){
			$("#div-cnt-ajax").html('<div class="col-md-12 text-center">'+
				'<div class="spinner-border" role="status"><span class="sr-only">Loading...</span> </div><h4>Cargando contenido ...</h4></div>');
		},
		success: function(responseData){
			$('#pag-temas').html(responseData.pagination);
			$("#div-cnt-ajax").html('');
			$('#div-cnt-ajax').empty();
			$('#div-cnt-ajax').append(responseData.search);
		}
	});
}