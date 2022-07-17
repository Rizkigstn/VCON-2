<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_member = $_POST['kode_member'];
$nama_member = $_POST['nama_member'];
$no_hpmember = $_POST['no_hpmember'];
$alamat_member = $_POST['alamat_member'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into member values('','$kode_member','$nama_member','$no_hpmember','$alamat_member')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>