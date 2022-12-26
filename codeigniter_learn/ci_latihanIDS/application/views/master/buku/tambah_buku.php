<html>
	<head>
		<title>Tambah Buku</title>
		<script>
			function homepage(){
				window.location = "<?php echo base_url();?>index.php/buku";
			}
		</script>
	</head>
	<body>
		<h2>TOKO BUKU "SENANG BACA"</h2>
		<form name="frmBuku" id="frmBuku" method="post" action="<?php echo base_url('index.php/buku/simpan_data');?>">
			<table border="1" width="80%" style="border-collapse:collapse">
				<tr>
					<td>Kode Buku</td>
					<td><input type="text" name="kode_buku" id="kode_buku"></td>
				</tr>
				<tr>
					<td>Nama Buku</td>
					<td><input type="text" name="nama_buku" id="nama_buku"></td>
				</tr>
				<tr>
					<td>Kategori Buku</td>
					<td><input type="text" name="kategori_buku" id="kategori_buku"></td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="text" name="tahun_terbit" id="tahun_terbit"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="penerbit" id="penerbit"></td>
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