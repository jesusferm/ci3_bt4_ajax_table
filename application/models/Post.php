<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	function getSearchCountTpcs($data){
		$this->db->select("count(*) as allcount");
		$this->db->from("ajx_posts");
		$query 	= $this->db->get();
		$result = $query->result_array();
		return $result[0]['allcount'];
	}

	function getSearchTpcs($data){
		$this->db->select("post.*");
		$this->db->from("ajx_posts post");
		$this->db->order_by("post.fc_post", "desc");
		$this->db->limit($data['perpage'], $data['rowno']);
		$query = $this->db->get();
		return $query->result();
	}
}