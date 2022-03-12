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
		$data['judul'] 		= "Info Saldo";
		$data['deskripsi'] 	= "Manage Data Saldo";

		

		$this->template->views('Infosaldo/home', $data);
	}

	// public function tampil() {
	// 	$data['dataInfosaldo'] = $this->M_kota->select_all();
	// 	$this->load->view('Infosaldo/list_data', $data);
	// }
	
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */