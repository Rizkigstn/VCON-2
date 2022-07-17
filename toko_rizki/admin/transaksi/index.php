<!DOCTYPE html>
<html>
<head>
	<title>TOKO RIZKI</title>
</head>
<body>
<center>
 
	<h2>TOKO RIZKI</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH TRANSAKSI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>KODE KASIR</th>
			<th>KODE MEMBER</th>
			<th>KODE BARANG</th>
			<th>QTY</th>
			<th>TGL TRANSAKSI</th>
			<th>JUMLAH</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from transaksi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_kasir']; ?></td>
				<td><?php echo $d['kode_member']; ?></td>
				<td><?php echo $d['kode_brg']; ?></td>
				<td><?php echo $d['qty']; ?></td>
				<td><?php echo $d['tgl_transaksi']; ?></td>
				<td><?php echo $d['kode_brg']*$d['qty']; ?></td>
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