<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_member = $_POST['kode_member'];
$nama_member = $_POST['nama_member'];
$no_hpmember = $_POST['no_hpmember'];
$alamat_member = $_POST['alamat_member'];
 
// update data ke database
mysqli_query($koneksi,"update member set kode_member='$kode_member', nama_member='$nama_member', no_hpmember='$no_hpmember',alamat_member='$alamat_member' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>