<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mutasi extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mutasi');
	}

	public function index()
	{
		
		$data['userdata'] 	= $this->userdata;		
		$id = $this->userdata->field_member_id;

		// var_dump($id);
		// die();
		$data['dataMutasi'] = $this->M_mutasi->select_all($id);
		$data['page'] 		= "mutasi";
		$data['judul'] 		= "Data Mutasi";
		$data['deskripsi'] 	= "Manage Data Mutasi";
		$this->template->views('mutasi/home', $data);
	}

	public function tampil()
	{
		$id = $this->userdata->field_member_id;
		// var_dump($id);
		// die();
		$data['dataMutasi'] = $this->M_mutasi->select_all($id);
		$this->load->view('mutasi/list_data', $data);
	}

	// public function detail() {
	// 	$data['userdata'] 	= $this->userdata;

	// 	$id 				= '2020070930';
	// 	$data['posisi'] = $this->M_posisi->select_by_id($id);
	// 	$data['dataPosisi'] = $this->M_posisi->select_by_pegawai($id);

	// 	echo show_my_modal('modals/modal_detail_posisi', 'detail-posisi', $data, 'lg');
	// }

	public function export()
	{
		error_reporting(E_ALL);

		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_posisi->select_all();

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 1;

		$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, "ID");
		$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, "Nama Posisi");
		$rowCount++;

		foreach ($data as $value) {
			$objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $value->id);
			$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $value->nama);
			$rowCount++;
		}

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save('./assets/excel/Data Posisi.xlsx');

		$this->load->helper('download');
		force_download('./assets/excel/Data Posisi.xlsx', NULL);
	}

	public function import()
	{
		$this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {
			$this->session->set_flashdata('msg', 'File harus diisi');
		} else {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('excel')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = $this->upload->data();

				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' . $data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

				$index = 0;
				foreach ($sheetData as $key => $value) {
					if ($key != 1) {
						$check = $this->M_posisi->check_nama($value['B']);

						if ($check != 1) {
							$resultData[$index]['nama'] = ucwords($value['B']);
						}
					}
					$index++;
				}

				unlink('./assets/excel/' . $data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_kota->insert_batch($resultData);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Data Posisi Berhasil diimport ke database'));
						redirect('Posisi');
					}
				} else {
					$this->session->set_flashdata('msg', show_msg('Data Posisi Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('Posisi');
				}
			}
		}
	}
}

/* End of file Mutasi.php */
/* Location: ./application/controllers/Posisi.php */