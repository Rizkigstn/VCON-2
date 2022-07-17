<!DOCTYPE html>
<html>
<head>
	<title>TOKO RIZKI</title>
</head>
<body>
<center>
 
	<h2>TOKO RIZKI</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MEMBER</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>KODE MEMBER</th>
			<th>NAMA MEMBER</th>
			<th>NO HP MEMBER</th>
			<th>ALAMAT MEMBER</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from member");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_member']; ?></td>
				<td><?php echo $d['nama_member']; ?></td>
				<td><?php echo $d['no_hpmember']; ?></td>
				<td><?php echo $d['alamat_member']; ?></td>
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