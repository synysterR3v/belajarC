<html>
	<head>
		<title>Daftar Buku Toko "ABCD"</title>	
		<script>
			function hapusData(id){
				var tny = confirm("Yakin akan menghapus data ini ?");
				if(tny){
					window.location = "<?php echo base_url();?>index.php/buku/hapus_buku/"+id;
					/* http://localhost/ci_latihan/buku/hapus_buku/3 */
				}
			}
		</script>
	</head>
	<body>
		<h2><center>Daftar Buku</center></h2>
		<div>
			<table border="1" style="border-collapse:collapse" width="90%" align="center">
				<tr>
					<td>NO</td>
					<td>KODE BUKU</td>
					<td>NAMA BUKU</td>
					<td>KATEGORI BUKU</td>
					<td>TAHUN TERBIT</td>
					<td>PENERBIT</td>
					<td>AKSI</td>
				</tr>
				<?php
					$no = 1;
					foreach($list_buku as $buku){
				?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $buku->kode_buku;?></td>
					<td><?php echo $buku->nama_buku;?></td>
					<td><?php echo $buku->kategori_buku;?></td>
					<td><?php echo $buku->tahun_terbit;?></td>
					<td><?php echo $buku->penerbit;?></td>
					<td>
						<a href="">[Ubah Data]</a>
						&nbsp;
						<a href="#" onclick="hapusData('<?php echo $buku->id;?>')">[Hapus Data]</a>
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