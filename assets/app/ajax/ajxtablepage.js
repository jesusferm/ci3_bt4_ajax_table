var total_list 		= 5;
var filter_by 		= 2;
var order 			= "asc";
var order_by		= "id_post";
var lvlsec 			= 3;

$("#form-search").submit(function( event ) {
	/*$('#btn-del-girl').attr("disabled", true);*/
	var parametros = $(this).serialize();
	load(1);
	event.preventDefault();
});

$('.select-show .dropdown-menu').find('a').click(function(e) {
	e.preventDefault();
	var param 	= $(this).attr("href").replace("#","");
	var concept = $(this).text();
	$('#spn-list-show').html(concept);
	total_list = param;
	load(1);
});

$('.search-panel .dropdown-menu').find('a').click(function(e) {
	e.preventDefault();
	var param 		= $(this).attr("href").replace("#","");
	var concept 	= $(this).html();
	$('#btn-search-on').html(concept);
	filter_by = param;
	load(1);
});

function load(page) {
	var search = $("#txt-search").val();
	$.ajax({
		type: "POST",
		url: base_url+"main/loadPosts",
		method: "POST",
		dataType: 'JSON',
		data: {
			page: page,
			search: search,
			filter: filter_by,
			limite: total_list,
			order: 	order,
			order_by: order_by,
		},
		beforeSend: function(objeto) {
			$("#btn-search").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Buscando...');
		},
		success: function(response) {
			$("#div-cnt-load").html(response.data);
			$("#h5-cnt-total").html(response.total);
			$("#btn-search").html('<i class="text-primary fas fa-search"></i>');
		}
	});
}


$(document).on("click", ".mdl-del-reg", function () {
	//$("#form-del-reg").trigger("reset");
	$("#txt-id-reg-del").val($(this).data('idreg'));
	$("#txt-nom-reg").text('"'+$(this).data('nomreg')+'"');
});

$("#form-del-reg").submit(function( event ) {
	$('#btn-del-reg').attr("disabled", true);
	var idreg 		= $("#txt-id-reg-del").val();
	$.ajax({
		type: 		"POST",
		url: 		base_url+"actsec/delSec",
		data: {
			list_ids: idreg,
		},
		dataType: 	"json",
		beforeSend: function(objeto){
			$("#btn-del-reg").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Eliminando');
		},
		success: function(datos){
			$("#btn-del-reg").html('<i class="fa fa-trash-alt"></i> Eliminar');
			$('#btn-del-reg').attr("disabled", false);
			$("#btn-close-mdl-del-reg").trigger("click");
			notify_msg(datos.icon, " ", datos.msg, "#", datos.tipo);
			if (datos.tipo=="success") {
				//load(0);
				$("#row-id-"+idreg).remove();
			}
			//$("#form-del-reg")[0].reset();
		},
		error: function(data) {
			$("#form-del-reg")[0].reset();
			$("#btn-del-reg").html('<i class="fa fa-trash-alt"></i> Eliminar');
			$("#div-cnt-del-reg").html('<div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-circle"></i> Error de comunicación con el servidor. Intenta más tarde.</div>');
		}
	});
	event.preventDefault();
});

$("#form-add-sec").submit(function( event ) {
	$('#btn-add-sec').attr("disabled", true);
	var parametros = $(this).serialize();
	$.ajax({
		type: "POST",
		url:base_url+"actsec/addSec",
		data: parametros,
		beforeSend: function(objeto){
			$("#btn-add-sec").html(
				'<img src="'+base_url+'assets/images/icons/loading_1.gif" width="20px"> Guardando ...'
			);
		},
		success: function(datos){
			$("#div-cnt-msg-add-sec").html(datos);
			$("#btn-add-sec").html('<i class="fa fa-floppy-o"></i> Agregar');
			$('#btn-add-sec').attr("disabled", false);
			$("#form-add-sec")[0].reset();
			$("#btn-close-form-add-sec").trigger("click");
			load();
		}
	});
	event.preventDefault();
});