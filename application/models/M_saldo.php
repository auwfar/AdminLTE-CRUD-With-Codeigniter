<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_saldo extends CI_Model
{
	public function select_all($id)
	{
		// $data = $this->db->get('tbltrxmutasisaldo');

		$sql = "SELECT * FROM tbltrxmutasisaldo WHERE field_member_id='{$id}' ORDER BY field_id_saldo DESC LIMIT 1";

		$data = $this->db->query($sql);

		// return $data->result();

		return $data->row();
	}
}

/* End of file M_saldo.php */
/* Location: ./application/models/M_posisi.php */