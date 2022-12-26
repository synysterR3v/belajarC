<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Buku extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			
			$this->load->model('Buku_Model');
		}
		
		function index(){
			$this->load->view('master/buku/menu_buku');
		}
		
		function daftar_buku(){
			$rs['list_buku'] = $this->Buku_Model->showDataAll()->result();
			
			$this->load->view('master/buku/daftar_buku', $rs);
		}
		
		function hapus_buku($id){
			$this->Buku_Model->deleteData($id);
			$this->index();
		}
		
		function tambah_buku(){
			$this->load->view('master/buku/tambah_buku');
		}
		
		function simpan_data(){
			$postData = $this->input->post();
			
			$kodebuku = $postData['kode_buku'];
			$namabuku = $postData['nama_buku'];
			$kategoribuku = $postData['kategori_buku'];
			$tahunterbit = $postData['tahun_terbit'];
			$penerbit = $postData['penerbit'];
			
			$dataBuku = array(
				'kode_buku' => $kodebuku,
				'nama_buku' => $namabuku,
				'kategori_buku' => $kategoribuku,
				'tahun_terbit' => $tahunterbit,
				'penerbit' => $penerbit
			);
			
			$this->Buku_Model->insertData($dataBuku);
			
			$this->index();
		}
	}
?>