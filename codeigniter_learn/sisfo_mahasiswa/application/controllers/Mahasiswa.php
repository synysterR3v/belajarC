<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Mahasiswa extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('Mahasiswa_model');
		}
		
		function index(){
			$data['mahasiswa'] = $this->Mahasiswa_model->showDataAll();
			$data['judul'] = "Halaman Home";  
			$this->load->view('templates/header', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer');
		}
		
		function daftar_mahasiswa(){
			$rs['list_mahasiswa'] = $this->Mahasiswa_model->showDataAll()->result();
			$this->load->view('master/mahasiswa/daftar_mahasiswa', $rs);
		}
		
		function hapus_mahasiswa($id){
			$this->Mahasiswa_model->deleteData($id);
			$this->load->view('master/mahasiswa/daftar_mahasiswa');
		}
		
		function tambah(){
			$data['judul'] = "Tambah Data Mahasiswa";
			$rs['data_mahasiswa'] = array();
			$this->load->view('home/tambah', $rs);
			$this->load->view('templates/header', $data);
			$this->load->view('home/tambah', $data);
			$this->load->view('templates/footer');
			
		}

	
		function simpan_data(){
			$postData = $this->input->post();
			// $id = $postData[''];
			$npm = $postData['npm'];
			$nama_mahasiswa = $postData['nama_mahasiswa'];
			$tgl_lahir = $postData['tgl_lahir'];
			$alamat = $postData['alamat'];
			$jenis_kelamin = $postData['jenis_kelamin'];
			$jurusan = $postData['jurusan'];
			$semester = $postData['semester'];
			$status = $postData['status'];
			
			$datamahasiswa = array(
				// 'id' => $id,
				'npm' => $npm,
				'nama_mahasiswa' => $nama_mahasiswa,
				'tgl_lahir' => $tgl_lahir,
				'alamat' => $alamat,
				'jenis_kelamin' => $jenis_kelamin,
				'jurusan' => $jurusan,
				'semester' => $semester,
				'status' => $status
			);

			$this->Mahasiswa_model->insertData($datamahasiswa);
			$this->index();
		}

		
			
		function ubah_data($id){
			$rs['data_mahasiswa'] = $this->Mahasiswa_model->showDataById($id)->result();
			$this->load->view('master/mahasiswa/update_mahasiswa', $rs);
			
			// var_dump($rs);
		}

			function perbarui_data(){
				$postData = $this->input->post();

				$id = $postData['id'];
				$npm = $postData['npm'];
				$nama_mahasiswa = $postData['nama_mahasiswa'];
				$tgl_lahir = $postData['tgl_lahir'];
				$alamat = $postData['alamat'];
				$jenis_kelamin = $postData['jenis_kelamin'];
				$jurusan = $postData['jurusan'];
				$semester = $postData['semester'];
				$status = $postData['status'];
				
				$datamahasiswa = array(
					// 'id' => $id,
					'npm' => $npm,
					'nama_mahasiswa' => $nama_mahasiswa,
					'tgl_lahir' => $tgl_lahir,
					'alamat' => $alamat,
					'jenis_kelamin' => $jenis_kelamin,
					'jurusan' => $jurusan,
					'semester' => $semester,
					'status' => $status
				);
				// var_dump($datamahasiswa);
			
			$this->Mahasiswa_model->updateData($id,$datamahasiswa);
			
			$this->index();
		}
	}	
		
?>