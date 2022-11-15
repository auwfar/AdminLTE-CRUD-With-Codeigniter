<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        // $this->load->model('m_data');

    }

    public function index()
    {


        $this->load->view('frontend/v_index');
        // $this->load->view('frontend/v_homepage');
        // $this->load->view('frontend/v_footer');
    }
}
