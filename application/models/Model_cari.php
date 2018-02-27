<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cari extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function get_data($search){
		$this->db->select("*");
		$this->db->from("siswa");
		$this->db->like('nama',$search);
		$this->db->or_like('ayah',$search);
		$this->db->or_like('ibu',$search);
		$this->db->or_like('alamat',$search);
		$this->db->order_by('id', 'DESC');

		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			    echo 'Data "'.$search.'" Tidak Ada ';
		} else {
			return $query->result();
		}
	}
}
