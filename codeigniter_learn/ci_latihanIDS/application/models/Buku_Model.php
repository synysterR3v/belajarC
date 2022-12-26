<?php

	class Buku_Model extends CI_Model 
	{
		private $__table = "buku";
		
		function showDataAll(){
			$result = $this->db->get($this->__table); // SELECT * FROM buku
			return $result;
		}
		
		function deleteData($id){
			$this->db->where('id',$id); // id=3
			$this->db->delete($this->__table); // DELETE FROM buku WHERE id=3
		}
		
		function insertData($data){
			$this->db->insert($this->__table, $data); // INSERT INTO buku (kode_buku,nama_buku,kategori_buku,tahun_terbit,penerbit)
													  // VALUES ('BK-0005','Buku PHP','Programming',2022,'Mulia Komputindo');
		}
	}
?>