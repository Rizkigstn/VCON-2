<!DOCTYPE html>
<html>
<head>
	<title>TOKO RIZKI</title>
</head>
<body>
<center>
 
	<h2>TOKO RIZKI</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>
 
	<?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from barang where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>KODE BARANG</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="number" name="kode_brg" value="<?php echo $d['kode_brg']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA BARANG</td>
					<td><input type="text" name="nama_brg" value="<?php echo $d['nama_brg']; ?>"></td>
				</tr>
				<tr>
					<td>HARGA BARANG</td>
					<td><input type="number" name="harga_brg" value="<?php echo $d['harga_brg']; ?>"></td>
				</tr>
				<tr>
					<td>TANGGAL EXP</td>
					<td><input type="date" name="tgl_exp" value="<?php echo $d['tgl_exp']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</center>
</body>
</html>