<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error404 extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

    public function index()
    {

        // $this->output->set_status_header('404');
        // $this->template->render('404error', array());
        $this->load->view('errors/404error');
    }
}
