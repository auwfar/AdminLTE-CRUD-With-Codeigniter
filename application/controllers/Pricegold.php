<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pricegold extends AUTH_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pricegold');
	}

    public function index()
	{
		$data['userdata'] 	= $this->userdata;
		$data['dataPricegold'] = $this->M_pricegold->select_all();
		
		$data['page'] 		= "pricegold";
		$data['judul'] 		= "Price Gold";
		$data['deskripsi'] 	= "Manage Price Gold";
		
		$data['modal_tambah_posisi'] = show_my_modal('modals/modal_tambah_posisi', 'tambah-posisi', $data);
		
		$this->template->views('pricegold/home', $data);
	}

    public function tampil()
	{
		$data['dataPricegold'] = $this->M_pricegold->select_all();
		$this->load->view('pricegold/list_data', $data);
	
	}
}
