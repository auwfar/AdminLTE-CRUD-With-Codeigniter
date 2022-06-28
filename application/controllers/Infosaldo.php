<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infosaldo extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_kota');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataKota'] 	= $this->M_kota->select_all();

		$data['page'] 		= "infosaldo";
		$data['judul'] 		= "Info Saldo";
		$data['deskripsi'] 	= "Manage Data Saldo";

		$data['modal_tambah_kota'] = show_my_modal('modals/modal_tambah_kota', 'tambah-kota', $data);

		$this->template->views('kota/home', $data);
	}

	public function tampil() {
		$data['dataKota'] = $this->M_kota->select_all();
		$this->load->view('kota/list_data', $data);
	}
	
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */