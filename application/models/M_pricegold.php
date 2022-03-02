<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pricegold extends CI_Model {
	public function select_all() {
		// $data = $this->db->get('tblgoldprice');
		// return $data->result();

        $sql = "SELECT * FROM tblgoldprice ORDER BY field_gold_id DESC LIMIT 1 ";

        	$data = $this->db->query($sql);
    
        	return $data->result();
	}

	// public function select_by_id($id) {
	// 	$sql = "SELECT * FROM posisi WHERE id = '{$id}'";

	// 	$data = $this->db->query($sql);

	// 	return $data->row();
	// }
	
}

/* End of file M_pricegold.php */
/* Location: ./application/models/M_pricegold.php */