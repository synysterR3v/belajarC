<html>
	<head>
		<title>Daftar mahasiswa Toko "ABCD"</title>	
		<script>
			function hapusData(id){
				var tny = confirm("Yakin akan menghapus data ini ?");
				if(tny){
					window.location = "<?php echo base_url();?>index.php/mahasiswa/hapus_mahasiswa/"+id;
					/* http://localhost/ci_latihan/mahasiswa/hapus_mahasiswa/3 */
				}
			}
		</script>
	</head>
	<body>
		<h2><center>Daftar mahasiswa</center></h2>
		<div>
			<table border="1" style="border-collapse:collapse" width="90%" align="center">
				<tr>
					<td>NO</td>
					<td>NPM</td>
					<td>NAMA MAHASISWA</td>
					<td>JURUSAN</td>
					<td>SEMESTER</td>
					<td>STATUS</td>
					<td>AKSI</td>
				</tr>
				<?php
					$no = 1;
					foreach($list_mahasiswa as $mahasiswa){
				?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $mahasiswa->npm;?></td>
					<td><?php echo $mahasiswa->nama_mahasiswa;?></td>
					<td><?php echo $mahasiswa->jurusan;?></td>
					<td><?php echo $mahasiswa->semester;?></td>
					<td><?php echo $mahasiswa->status;?></td>
					<td>
						<a href="<?php echo base_url('index.php/mahasiswa/ubah_data/').$mahasiswa->id;?>">[Ubah Data]</a>
						&nbsp;
						<a href="#" onclick="hapusData('<?php echo $mahasiswa->id;?>')">[Hapus Data]</a>
					</td>
				</tr>
				<?php
						$no++;
					}
				?>
			</table>
		</div>
	</body>
</html>