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
	<h3>TAMBAH DATA GURU</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>KODE BARANG</td>
				<td><input type="number" name="kode_brg"></td>
			</tr>
			<tr>
				<td>NAMA BARANG</td>
				<td><input type="text" name="nama_brg"></td>
			</tr>
			<tr>
				<td>HARGA BARANG</td>
				<td><input type="number" name="harga_brg"></td>
			</tr>
			<tr>
				<td>TANGGAL EXP</td>
				<td><input type="date" name="tgl_exp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
		<br/>
	<br/>
	</center>
</body>
</html>