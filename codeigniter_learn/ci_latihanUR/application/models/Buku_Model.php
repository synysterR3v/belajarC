<?php

	class Buku_Model extends CI_Model 
	{
		private $__table = "buku";
		
		function showDataAll(){ /* Fungsi untuk mencari semua data yang ada di dalam tabel buku */
			$result = $this->db->get($this->__table); // SELECT * FROM buku
			return $result;
		}
		
		function deleteData($id){ /* Fungsi untuk menghapus data berdasarkan kolom id dari tabel buku */
			$this->db->where('id',$id); // id=3
			$this->db->delete($this->__table); // DELETE FROM buku WHERE id=3
		}
		
		function insertData($data){ /* Fungsi untuk menyimpan data ke tabel buku */
			$this->db->insert($this->__table, $data); // INSERT INTO buku (kode_buku,nama_buku,kategori_buku,tahun_terbit,penerbit)
													  // VALUES ('BK-0005','Buku PHP','Programming',2022,'Mulia Komputindo');
		}
		
		function showDataById($id){ /* Fungsi untuk mencari data berdasarkan kolom id dari tabel buku */
			$this->db->select('*');
			$this->db->from($this->__table);
			$this->db->where('id',$id);
			$result = $this->db->get(); // SELECT * FROM buku WHERE id=2
			return $result;
		}
		
		function updateData($id,$data){ /* Fungsi untuk memperbarui data di tabel buku berdasarkan kolom id */
			$this->db->where('id', $id);
            $this->db->update($this->__table, $data); // UPDATE buku SET kode_buku='BK-0003',nama_buku='NodeJS',kategori_buku='Programming',
														// tahun_terbit = 2022, penerbit='Multimatics Press'
		}
	}
?>