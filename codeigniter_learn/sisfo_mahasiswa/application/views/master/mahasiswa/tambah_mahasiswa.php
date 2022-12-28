<html>
	<head>
		<title>Tambah Mahasiswa</title>
		<script>
			function homepage(){
				window.location = "<?php echo base_url();?>index.php/mahasiswa";
			}
		</script>
	</head>
	<body>
		<h2>DATA MAHASISWA</h2>
		<form name="frmmahasiswa" id="frmmahasiswa" method="post" action="<?php echo base_url('index.php/mahasiswa/simpan_data');?>">
			<table border="1" width="80%" style="border-collapse:collapse">
			<tr>
					<td>ID</td>
					<td><input type="text" name="id" id="id" disabled></td>
				</tr>	
			<tr>
					<td>NPM</td>
					<td><input type="text" name="npm" id="npm" placeholder="Masukan NPM"></td>
				</tr>
				<tr>
					<td>NAMA LENGKAP</td>
					<td><input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukan Nama"></td>
				</tr>
				<tr>
					<td>TANGGAL LAHIR</td>
					<td><input type="text" name="tgl_lahir" id="tgl_lahir" placeholder="YYYY-MM-DD"></td>
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td><input type="text" name="alamat" id="alamat"placeholder="Masukan Alamat"></td>
				</tr>
				<tr>
					<td>JENIS KELAMIN</td>
					<td><select class="" name="jenis_kelamin" id="jenis_kelamin">
                <option value="">-- Pilih jenis Kelamin --</option>
                <option value="Laki-Laki"> Laki-Laki </option>
                <option value="Perempuan"> Perempuan </option>
				</tr>
				<tr>
					<td>JURUSAN</td>
					<!-- <td><input type="text" name="jurusan" id="jurusan" placeholder="Pilih Jurusan"></td> -->
					<td><select class="" name="jurusan" id="jurusan">
                <option value="">-- Pilih Jurusan --</option>
                <option value="Managemwnt Informatika"> Managemwnt Informatika </option>
                <option value="Teknik Komputer"> Teknik Komputer </option>
                <option value="Sistem Informasi"> Sistem Informasi </option>
                <option value="Teknik informatika"> Teknik informatika </option>
				</tr>
				<tr>
					<td>SEMESTER</td>
					<!-- <td><input type="text" name="semester" id="semester" placeholder="Pilih Semester"></td> -->
					<td><select class="" name="semester" id="semester">
                <option value="">-- Pilih Semester --</option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
				<option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
            </td>
				</tr>
				<tr>
					<td>STATUS</td>
					<!-- <td><input type="text" name="status" id="status"></td> -->
					<td>
					<input class="status" type="radio" name="status" id="aktif" value="Aktif">&nbsp;Aktif
                <input class="status" type="radio" name="status" id="tidak_aktif" value="Tidak Aktif">&nbsp;Tidak Aktif
					</td>
                	
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="btnsimpan" id="btnsimpan" value="Simpan Data">
						<input type="button" name="btncancel" id="btncancel" value="Batal Data" onclick="homepage()">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>