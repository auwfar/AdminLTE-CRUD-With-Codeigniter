<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_users');
	}
	public function index()
	{
		$data['userdata'] 		= $this->userdata;
		$id = $this->userdata->field_member_id;
		$data['page'] 			= "profile";
		$data['judul'] 			= "Profile";
		$data['deskripsi'] 		= "Setting Profile";

		$get_prov = $this->db->select('*')->from('tblwilayahprovinsi')->get();
		$data['provinsi'] = $get_prov->result();
		$data['path'] = base_url('assets');

		$sql = "SELECT * FROM tblcustomer WHERE field_member_id =$id";

		$get_cus = $this->db->query($sql);

		$data['customer'] = $get_cus->row();
		$this->template->views('profile', $data);
	}


	public function update()
	{
		// $this->form_validation->set_rules('field_username', 'Username', 'trim|required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('field_email', 'nama', 'trim|required');
		$this->form_validation->set_rules('field_nama', 'nama', 'trim|required');

		$id = $this->userdata->field_user_id;
		$data = $this->input->post();

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'jpg|png|svg';
			// $config['max_size']             = 100;
			// $config['max_width']            = 215;
			// $config['max_height']           = 215;
			$config['file_name'] = $id;


			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('field_photo')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data_foto = $this->upload->data();
				// $data_foto = $this->upload->data();
				// var_dump($data_foto);	
				// die();
				$data['field_photo'] = $data_foto['file_name'];
				// var_dump($data);
				// die();
			}

			$result = $this->M_users->update($data, $id);


			if ($result > 0) {
				$this->updateProfil();
				$this->session->set_flashdata('msg', show_succ_msg('Data Profile Berhasil diubah'));
				redirect('Profile');
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
				redirect('Profile');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Profile');
		}
	}

	public function ubah_password()
	{
		$this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required');
		$this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required');


		$id = $this->userdata->field_user_id;
		if ($this->form_validation->run() == TRUE) {

			$pass = trim($_POST['passLama']);
			$id;
			$password = trim($_POST['passKonf']);
			$this->input->post('passBaru');

			if (password_verify($pass, $this->userdata->field_password) == true) {
				echo "cek password new dan konfirmasi benar";
				if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
					$this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
					redirect('Changepassword');
				} else {
					$datapassword = password_hash($this->input->post('passBaru'), PASSWORD_DEFAULT);

					$data = [
						'field_password' => $datapassword
					];

					$result = $this->M_users->update($data, $id);
					if ($result > 0) {
						$this->updateProfil();
						$this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
						redirect('Changepassword');
					} else {
						$this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
						redirect('Changepassword');
					}
				}
			} else {
				$this->session->set_flashdata('msg', show_err_msg('Password Salah'));
				redirect('Changepassword');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			redirect('Changepassword');
		}
	}
	public function personal($id)
	{
		$this->form_validation->set_rules('ktp', 'ktp', 'trim|required');
		// $this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required');
		// $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			echo "1";
		} else {
			// $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
			// redirect('Changepassword');
			echo "2";
		}
	}


	function add_ajax_kab($id_prov)
	{
		$query = $this->db->get_where('tblwilayahkabupaten', array('field_provinsi_id' => $id_prov));
		$data = "<option value=''>- Pilih Kabupaten -</option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->field_kabupaten_id . "'>" . $value->field_nama_kabupaten . "</option>";
		}
		echo $data;
	}

	function add_ajax_kec($id_kab)
	{
		$query = $this->db->get_where('tblwilayahkecamatan', array('field_kabupaten_id' => $id_kab));
		$data = "<option value=''> - Pilih Kecamatan - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->field_kecamatan_id . "'>" . $value->field_nama_kecamatan . "</option>";
		}
		echo $data;
	}

	function add_ajax_des($id_kec)
	{
		$query = $this->db->get_where('tblwilayahdesa', array('field_kecamatan_id' => $id_kec));
		$data = "<option value=''> - Pilih Desa - </option>";
		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->field_desa_id . "'>" . $value->field_nama_desa . "</option>";
		}
		echo $data;
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */