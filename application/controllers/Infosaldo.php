<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infosaldo extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_saldo');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$id = $this->userdata->field_member_id;
		$data['dataInfosaldo'] 	= $this->M_saldo->select_all($id);
// var_dump($data['dataInfosaldo'] 	= $this->M_saldo->select_all($id));
// die();
		$data['page'] 		= "infosaldo";
		$data['judul'] 		= "Infosaldo";
		$data['deskripsi'] 	= "Manage Data Saldo";

		$this->template->views('infosaldo/home', $data);
	}

	public function tampil() {
		$id = $this->userdata->field_member_id;
		$data['dataInfosaldo'] = $this->M_saldo->select_all($id);
		$this->load->view('infosaldo/list_data', $data);
	}
	
}

/* End of file Infosaldo.php */
/* Location: ./application/controllers/Infosaldo.php */