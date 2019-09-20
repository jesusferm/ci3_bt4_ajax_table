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

	public function count($data, $words){
		$this->db->select("count(*) as total");
		$this->db->from("ajx_posts as sec");
		//$this->db->where("sec.act_sec=1 and (sec.visible_sec='panel' or sec.visible_sec='sidebar')");
		$this->db->where("sec.act_post", $data['filter']);

		$this->db->group_start();
		$i=0;
		if ($words) {
			foreach ($words as $word) {
				if ($i==0) {
					$this->db->like('sec.nom_post', $word);
					$this->db->or_like('sec.desc_post', $word);
				}else{
					$this->db->or_like('sec.nom_post', $word);
					$this->db->or_like('sec.desc_post', $word);
				}
				$i++;
			}
		}else{
			$this->db->like('sec.nom_post', "");
			$this->db->or_like('sec.desc_post', "");
		}
		$this->db->group_end();

		$this->db->order_by($data['order_by'], $data['order']);
		$query 	= $this->db->get();
		$result = $query->row();
		return $result->total;
	}

	public function search($data, $words){
		$this->db->select("sec.*");
		$this->db->from("ajx_posts sec");
		$this->db->where("sec.act_post", $data['filter']);

		$this->db->group_start();
		$i=0;
		if ($words) {
			foreach ($words as $word) {
				if ($i==0) {
					$this->db->like('sec.nom_post', $word);
					$this->db->or_like('sec.desc_post', $word);
				}else{
					$this->db->or_like('sec.nom_post', $word);
					$this->db->or_like('sec.desc_post', $word);
				}
				$i++;
			}
		}else{
			$this->db->like('sec.nom_post', "");
			$this->db->or_like('sec.desc_post', "");
		}
		$this->db->group_end();
		
		$this->db->order_by($data['order_by'], $data['order']);
		$this->db->limit($data['per_page'], $data['offset']);
		$query 	= $this->db->get();
		return $query->result();
	}
}