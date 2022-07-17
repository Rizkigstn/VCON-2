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
	<h3>EDIT DATA MEMBER</h3>
 
	<?php
	include '../../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from member where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>KODE MEMBER</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="number" name="kode_member" value="<?php echo $d['kode_member']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA MEMBER</td>
					<td><input type="text" name="nama_member" value="<?php echo $d['nama_member']; ?>"></td>
				</tr>
				<tr>
					<td>NO HP MEMBER</td>
					<td><input type="number" name="no_hpmember" value="<?php echo $d['no_hpmember']; ?>"></td>
				</tr>
				<tr>
					<td>ALAMAT MEMBER</td>
					<td><input type="text" name="alamat_member" value="<?php echo $d['alamat_member']; ?>"></td>
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