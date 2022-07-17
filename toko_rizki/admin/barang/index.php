<!DOCTYPE html>
<html>
<head>
	<title>TOKO RIZKI</title>
</head>
<body>
<center>
<style>
div.a {
	text-align: center;
}
</style>
 
	<h2>TOKO RIZKI</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH BARANG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>KODE BARANG</th>
			<th>NAMA BARANG</th>
			<th>HARGA BARANG</th>
			<th>TANGGAL EXP</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_brg']; ?></td>
				<td><?php echo $d['nama_brg']; ?></td>
				<td><?php echo $d['harga_brg']; ?></td>
				<td><?php echo $d['tgl_exp']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</form>
		<br/>
	<a href="../index.php">KEMBALI KE DASHBOARD</a>
	<br/>
</center>
</body>
</html>