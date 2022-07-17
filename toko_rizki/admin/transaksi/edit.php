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
	<h3>EDIT DATA TRANSAKSI</h3>
 
	<?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from transaksi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>KODE KASIR</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="number" name="kode_kasir" value="<?php echo $d['kode_kasir']; ?>">
					</td>
				</tr>
				<tr>
					<td>KODE MEMBER</td>
					<td><input type="number" name="kode_member" value="<?php echo $d['kode_member']; ?>"></td>
				</tr>
				<tr>
					<td>KODE BARANG</td>
					<td><input type="number" name="kode_brg" value="<?php echo $d['kode_brg']; ?>"></td>
				</tr>
				<tr>
					<td>QTY</td>
					<td><input type="number" name="qty" value="<?php echo $d['qty']; ?>"></td>
				</tr>
				<tr>
					<td>TGL TRANSAKSI</td>
					<td><input type="date" name="tgl_transaksi" value="<?php echo $d['tgl_transaksi']; ?>"></td>
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