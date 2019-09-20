<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('post');
	}

	public function index(){
		$data['title'] 	= 'Codeigniter 3.1.10 & Bootstrap 4.3.1 | LiNuXiToS';
		$data['tab'] 	= 'index';
		$this->load->view('common/head', $data);
		$this->load->view('common/navbar', $data);
		$this->load->view('main', $data);
		$this->load->view('common/foot');
	}

	/**
	 * [loadSecs load section by mymode]
	 * @return [type] [description]
	 */
	public function loadPosts(){
		$user = array(
			'act_post'	=>1,
			'user_id'	=>$this->session->userdata('id_user_session')
		);

		$data['order'] 		= ($this->input->post('order')) ? $this->input->post('order'): "asc";
		$data['order_by'] 	= ($this->input->post('order_by')) ? $this->input->post('order_by'): "id_post";;
		$data['search'] 	= ($this->input->post('search')) ? $this->input->post('search'): "";
		$data['page'] 		= ($this->input->post('page')) ? $this->input->post('page'): 1;
		$data['per_page'] 	= ($this->input->post('limite')) ? $this->input->post('limite'): 10;
		$data['filter'] 	= ($this->input->post('filter')) ? $this->input->post('filter')-1: 1;

		$bus_sep 			= explode(' ', $data['search']);
		$words 				= splitArraySearch($bus_sep);
		$data['offset'] 	= ($data['page'] - 1) * $data['per_page'];
		$data['adyacentes'] = 1;
		
		
		$total 				= $this->post->count($data, $words);
		$total_pages 		= ceil($total/$data['per_page']);
		$reload 			= base_url()."main/loadPosts";
		$response['total']  = "Total de resultados: ".$total;
		$posts 			=  $this->post->search($data, $words);

		$response['data'] 	= "";
		if ($posts) {
			$response['data'] = '<div class="table-responsive">
					<table  class="table table-hover">
						<thead>
							<tr>
								<th data-field="id_post" class="th-link text-left"> <i class="fas fa-sort"></i> Id </th>
								<th data-field="nom_post" class="th-link"><i class="fas fa-sort"></i> Nombre</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>';
			foreach ($posts as $post) {
				$response['data'] .= '<tr id="row-id-'.$post->id_post.'">
					<td class="text-left">
						'.$post->id_post.'
					</td>
					<td>
						'.$post->nom_post.'
					</td>
					<td class="text-center">
						<button style="width: 40px;" type="button" class="btn btn-danger mdl-del-reg" title="Eliminar" data-toggle="modal" data-target="#mdl-del-reg" data-idreg="'.$post->id_post.'" data-nomreg="'.$post->nom_post.'">
							<i class="fal fa-trash-alt"></i>
						</button>
					</td>
				</tr>';
			}
			$response['data'] .= '</tbody></table></div>';
			$response['data'] .= '<span class="pull-right">'.paginate($reload, $data['page'], $total_pages, $data['adyacentes'], 'load').'</span>';
			$response['data'] .= '<script>
					$(".table th.th-link").each(function(){
						$(this).css("cursor","pointer").hover(
							function(){
								$(this).addClass("text-primary");
							},
							function(){
								$(this).removeClass("text-primary");
							}).click( function(){ 
								//document.location = $(this).attr("data-href");
								if (order=="asc") {
									order 	= "desc";
								}else{
									order 	= "asc";
								}
								order_by = $(this).attr("data-field");
								load(1);
							}
						);
					});
				</script>';
		}else{
			$response['data'] = '<div class="alert alert-info text-center" role="alert">
				  <i class="fas fa-search"></i> Búsqueda sin resultados...
				</div>';
		}

		echo json_encode($response);
	}

	public function delReg(){
		$list_ids 	= $this->input->post('list_ids');

		if (empty($list_ids)) {
			$response['tipo'] = "danger";
			$response['icon'] = "fa fa-exclamation-triangle";
			$response['msg'] = "El registro presenta un error en el ID, por favor reinice sesión.";
		}else{
			$bus_sep = explode(',', $list_ids);
			foreach ($bus_sep as $id) {
				if ($this->post->delReg($id)) {
					$response['tipo'] = "success";
					$response['icon'] = "fa fa-check";
					$response['msg'] = "Registro eliminado.";
				}else{
					$response['tipo'] = "danger";
					$response['icon'] = "fa fa-exclamation-triangle";
					$response['msg'] = "Ocurrió un error al eliminar la información del inmueble. Intente más tarde.";
				}
			}
		}
		echo json_encode($response);
	}

	public function addReg(){
		$p = array(
			'nom_post'		=>$this->input->post('txt-nom-reg'),
			'desc_post'		=>$this->input->post('txt-desc-reg'),
		);

		if ($this->post->addReg($p)) {
			$response['tipo'] = "success";
			$response['icon'] = "fa fa-check";
			$response['msg'] = "Registro agregado correctamente.";
		}else{
			$response['tipo'] = "danger";
			$response['icon'] = "fa fa-exclamation-triangle";
			$response['msg'] = "Ocurrió un error al eliminar la información del inmueble. Intente más tarde.";
		}

		echo json_encode($response);
	}
}
