<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpanjang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_user');
    }

    public function view_user($id_user)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['user_data'] = $this->m_user->get_user_detail_by_id($this->session->userdata('id_user'))->row_array();
		$data['user'] = $this->m_user->get_user_detail_by_id($id_user)->result_array();
		
		$this->load->view('user/perpanjang', $data);
		
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_user');

		}

    }

    public function lengkapi_data_user()
    {
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $nik = $this->input->post('nik');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jurusan = $this->input->post('jurusan');
        $pengalaman_kerja = $this->input->post('pengalaman_kerja');
        $no_hp = $this->input->post('no_hp');
        $formasi_jabatan = $this->input->post('formasi_jabatan');
        $lokasi_tes = $this->input->post('lokasi_tes');
        $tanggal_tes = $this->input->post('tanggal_tes');
        $alamat = $this->input->post('alamat');
		$id = $this->input->post('id_user');
		
		$id_status_verifikasi = 1; 
        $id_status_perpanjangan = 2;
        $id_status_aktif = 1;
        $foto_name = md5($nama_lengkap.$nik);

        $path = './assets/berkas/';

		$this->load->library('upload');
		$config['upload_path'] = './assets/berkas';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480';  //2MB max
		$config['max_width'] = '44800'; // pixel
		$config['max_height'] = '44800'; // pixel
		$config['file_name'] = $foto_name.'_saya';
		$this->upload->initialize($config);
		$foto_saya_upload = $this->upload->do_upload('foto_saya');
		
		if($foto_saya_upload){
			$foto_saya = $this->upload->data();
		}else{
			
			$this->session->set_flashdata('error_file_saya','error_file_saya');
			redirect('Perpanjang/view_user/'.$id);
		}
		
	
		$config['upload_path'] = './assets/berkas';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480';  //2MB max
		$config['max_width'] = '44800'; // pixel
		$config['max_height'] = '44800'; // pixel
		$config['file_name'] = $foto_name.'_ktp';
		$this->upload->initialize($config);
		$foto_ktp_upload = $this->upload->do_upload('foto_ktp');
		if($foto_ktp_upload){
			$foto_ktp = $this->upload->data();
		}else{
			@unlink($path.$foto_saya['file_name']);
			$this->session->set_flashdata('error_file_ktp','error_file_ktp');
			redirect('Perpanjang/view_user/'.$id);
		}
		

		$config['upload_path'] = './assets/berkas';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480';  //2MB max
		$config['max_width'] = '44800'; // pixel
		$config['max_height'] = '44800'; // pixel
		$config['file_name'] = $foto_name.'_ijazah';
		$this->upload->initialize($config);
		$foto_ijazah_upload =  $this->upload->do_upload('foto_ijazah');
		if($foto_ijazah_upload){
			$foto_ijazah = $this->upload->data();
		}else{
			@unlink($path.$foto_saya['file_name']);
			@unlink($path.$foto_ktp['file_name']);
			$this->session->set_flashdata('error_file_ijazah','error_file_ijazah');
			redirect('Perpanjang/view_user/'.$id);
        }

		$config['upload_path'] = './assets/berkas';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480';  //2MB max
		$config['max_width'] = '44800'; // pixel
		$config['max_height'] = '44800'; // pixel
		$config['file_name'] = $foto_name.'_ijazah';
		$this->upload->initialize($config);
		$foto_ijazah_upload =  $this->upload->do_upload('foto_ijazah');
		if($foto_ijazah_upload){
			$foto_ijazah = $this->upload->data();
		}else{
			@unlink($path.$foto_saya['file_name']);
			@unlink($path.$foto_ktp['file_name']);
			$this->session->set_flashdata('error_file_ijazah','error_file_ijazah');
			redirect('Daftar/view_user/'.$id);
        }

        $config['upload_path'] = './assets/berkas';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480';  //2MB max
		$config['max_width'] = '44800'; // pixel
		$config['max_height'] = '44800'; // pixel
		$config['file_name'] = $foto_name.'_akte';
		$this->upload->initialize($config);
		$foto_akte_upload =  $this->upload->do_upload('foto_akte');
		if($foto_akte_upload){
			$foto_akte = $this->upload->data();
		}else{
			@unlink($path.$foto_saya['file_name']);
			@unlink($path.$foto_ktp['file_name']);
            @unlink($path.$foto_ijazah['file_name']);
			$this->session->set_flashdata('error_file_akte','error_file_akte');
			redirect('Perpanjang/view_user/'.$id);
        }

	if($_FILES['foto_surat_pengalaman_kerja']['tmp_name'] != ""){

        $config['upload_path'] = './assets/berkas';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480';  //2MB max
		$config['max_width'] = '44800'; // pixel
		$config['max_height'] = '44800'; // pixel
		$config['file_name'] = $foto_name.'_foto_surat_pengalaman_kerja';
		$this->upload->initialize($config);
		$foto_surat_pengalaman_kerja_upload =  $this->upload->do_upload('foto_surat_pengalaman_kerja');
		if($foto_surat_pengalaman_kerja_upload){
			$foto_surat_pengalaman_kerja_file = $this->upload->data();
			$foto_surat_pengalaman_kerja = $foto_surat_pengalaman_kerja_file['file_name'];
		}else{
			@unlink($path.$foto_saya['file_name']);
			@unlink($path.$foto_ktp['file_name']);
            @unlink($path.$foto_ijazah['file_name']);
            @unlink($path.$foto_akte['file_name']);
			$this->session->set_flashdata('error_foto_surat_pengalaman_kerja','error_foto_surat_pengalaman_kerja');
			redirect('Perpanjang/view_user/'.$id);
        }
	}else{
		$foto_surat_pengalaman_kerja = $this->input->post('foto_surat_pengalaman_kerja_old');
	}



        $config['upload_path'] = './assets/berkas';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '20480';  //2MB max
		$config['max_width'] = '44800'; // pixel
		$config['max_height'] = '44800'; // pixel
		$config['file_name'] = $foto_name.'_foto_transkrip_nilai';
		$this->upload->initialize($config);
		$foto_transkrip_nilai_upload =  $this->upload->do_upload('foto_transkrip_nilai');
		if($foto_transkrip_nilai_upload){
			$foto_transkrip_nilai = $this->upload->data();
		}else{
			@unlink($path.$foto_saya['file_name']);
			@unlink($path.$foto_ktp['file_name']);
            @unlink($path.$foto_ijazah['file_name']);
            @unlink($path.$foto_akte['file_name']);
			@unlink($path.$foto_surat_pengalaman_kerja['file_name']);
			$this->session->set_flashdata('error_foto_transkrip_nilai','error_foto_transkrip_nilai');
			redirect('Perpanjang/view_user/'.$id);
        }
        
        
        $hasil = $this->m_user->update_user_detail($id ,$no_pendaftaran, $nik, $nama_lengkap, $tempat_lahir,
        $tanggal_lahir, $jenis_kelamin, $agama, $status_perkawinan, $tinggi_badan, $berat_badan, 
        $pendidikan_terakhir, $jurusan, $pengalaman_kerja, $no_hp, $formasi_jabatan, $lokasi_tes, $tanggal_tes, 
        $alamat, $foto_saya['file_name'], $foto_ktp['file_name'], $foto_ijazah['file_name'], $foto_akte['file_name'], $foto_surat_pengalaman_kerja, $foto_transkrip_nilai['file_name'], $id_status_verifikasi, $id_status_perpanjangan, $id_status_aktif);

			if($hasil==false){
                $this->session->set_flashdata('eror','eror');
                redirect('Perpanjang/view_user/'.$id);
			}else{
                @unlink($path.$this->input->post('foto_saya_old'));
                @unlink($path.$this->input->post('foto_ktp_old'));
                @unlink($path.$this->input->post('foto_ijazah_old'));
				@unlink($path.$this->input->post('foto_akte_old'));

				if($foto_surat_pengalaman_kerja != $this->input->post('foto_surat_pengalaman_kerja_old')){
					@unlink($path.$this->input->post('foto_surat_pengalaman_kerja_old'));
				  }
				  
				@unlink($path.$this->input->post('foto_transkrip_nilai_old'));
				$this->session->set_flashdata('input','input');
				redirect('Perpanjang/view_user/'.$id);
			}

        

        
    }

}