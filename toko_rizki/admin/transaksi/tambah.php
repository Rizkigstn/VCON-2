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
	<h3>TAMBAH TRANSAKSI</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>KODE KASIR</td>
				<td><input type="number" name="kode_kasir"></td>
			</tr>
			<tr>
				<td>KODE MEMBER</td>
				<td><input type="number" name="kode_member"></td>
			</tr>
			<tr>
				<td>KODE BARANG</td>
				<td><input type="number" name="kode_brg"></td>
			</tr>
			<tr>
				<td>QTY</td>
				<td><input type="number" name="qty"></td>
			</tr>
			<tr>
				<td>TGL TRANSAKSI</td>
				<td><input type="date" name="tgl_transaksi"></td>
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
	</form>
</body>
</html>