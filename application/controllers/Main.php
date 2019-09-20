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

	public function loadContent($record = 0) {
		$data['perpage'] 	= ($this->input->post('total_show')) ? $this->input->post('total_show'): 10; "";
		$data['rowno']		= $record;
		if($data['rowno'] 	!= 0){
			$data['rowno'] 	= ($data['rowno']-1) * $data['perpage'];
		}
	
		$recordCount 				= $this->post->getSearchCountTpcs($data);
		$config['base_url'] 		= base_url().'main/loadContent';
		$config['use_page_numbers'] = TRUE;
		$config['next_link'] 		= '<i class="fa fa-angle-right"></i>';
		$config['prev_link'] 		= '<i class="fa fa-angle-left"></i>';
		$config['first_link'] 		= false;
		$config['last_link'] 		= false;
		$config['full_tag_open'] 	= '<ul class="pagination justify-content-center">';
		$config['full_tag_close'] 	= '</ul>';
		$config['num_tag_open'] 	= '<li class="page-item">';
		$config['num_tag_close'] 	= '</li>';
		$config['cur_tag_open'] 	= '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] 	= '</a></li>';
		$config['next_tag_open'] 	= '<li class="page-item"><a href="#" aria-label="Next">';
		$config['next_tagl_close'] 	= '</a></li>';
		$config['prev_tag_open'] 	= '<li class="page-item">';
		$config['prev_tagl_close'] 	= '</li>';
		$config['first_tag_open'] 	= '<li class="page-item">';
		$config['first_tagl_close'] = '</li>';
		$config['last_tag_open'] 	= '<li class="page-item"><a href="#" aria-label="Next">';
		$config['last_tagl_close'] 	= '</a></li>';
		$config['attributes'] 		= array('class' => 'page-link');
		$config['total_rows'] 		= $recordCount;
		$config['per_page'] 		= $data['perpage'];
		$this->pagination->initialize($config);
		$data['pagination'] 		= $this->pagination->create_links();
		$list_search 				= $this->post->getSearchTpcs($data);
		$data['search'] 			= "";

		if ($list_search) {
			foreach ($list_search as $tp) {
				$data['search'] .= '<div class="col-md-4 col-sm-6 col-xs-6 mb-2">
				<div class="card mb-2">
						<a href="#">
							<img src="'.base_url().'assets/app/images/default_post.png" class="card-img-top">
						</a>
						<div class="card-body font-weight-bold ">
							<a class="text-dark" href="#">
								'.$tp->nom_post.'
							</a>
							<div>
								<small class="float float-right"><span class="byline-author-label">By</span>
									<a class="byline-author-name-link" href="#" title="LiNuXiToS">LiNuXiToS</a></small>
								<small>'.mesDiaAnio($tp->fc_post).'</small>
							</div>
						</div>
					</div>
			</div>';
			}
		}else{
			$data['search']='<div class="col-md-12 text-center"><div class="alert alert-danger" role="alert"><i class="fas fa-search"></i> No se encontraron resultados.</div></div>';
		}
		echo json_encode($data);
	}
}
