<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {
	public function update($data, $id) {
		$this->db->where("field_user_id", $id);
		$this->db->update("tbluserlogin", $data);

		return $this->db->affected_rows();
	}

	public function select($id = '') {
		if ($id != '') {
			$this->db->where('idd', $id);
		}

		$data = $this->db->get('tbluserlogin');

		return $data->row();
	}
}

/* End of file M_users.php */
/* Location: ./application/models/M_users.php */