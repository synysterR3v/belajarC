<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Mahasiswa extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			
			$this->load->model('mahasiswa_model');
		}
		
		function index(){
			$this->load->view('master/mahasiswa/menu_mahasiswa');
		}
		
		function daftar_mahasiswa(){
			$rs['list_mahasiswa'] = $this->mahasiswa_model->showDataAll()->result();
			$this->load->view('master/mahasiswa/daftar_mahasiswa', $rs);
		}
		
		function hapus_mahasiswa($id){
			$this->mahasiswa_model->deleteData($id);
			$this->index();
		}
		
		function tambah_mahasiswa(){
			$this->load->view('master/mahasiswa/tambah_mahasiswa');
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
			
			$this->mahasiswa_model->insertData($datamahasiswa);
			
			$this->index();
		}
	}
?>