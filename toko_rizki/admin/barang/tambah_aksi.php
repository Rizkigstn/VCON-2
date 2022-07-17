<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_brg  = $_POST['kode_brg'];
$nama_brg	 = $_POST['nama_brg'];
$harga_brg = $_POST['harga_brg'];
$tgl_exp = $_POST['tgl_exp'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('','$kode_brg ','$nama_brg','$harga_brg','$tgl_exp')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>