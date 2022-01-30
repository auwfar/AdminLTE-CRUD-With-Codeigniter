<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function login($useruser)
	{

		$query = "SELECT * FROM tbluserlogin WHERE field_email='{$useruser}' OR field_handphone='{$useruser}'";
		// $this->db->select('*');
		// $this->db->from('tbluserlogin');
		// $this->db->where('field_username', $user);	
		// //$this->db->where('password', md5($pass));

		$data = $this->db->query($query);

		// $data = $this->db->get();
		// var_dump($data->num_rows());
		// die();
		// return $data->result();
		// return $data->row();
		// return $this->db->affected_rows();
		// return $data->row();
		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}
	public function password()
	{
		$sql = "SELECT * FROM tbluserlogin ORDER BY field_user_id DESC ";

		$data = $this->db->query($sql);

		// return $data->result();
		return $data->row();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */
