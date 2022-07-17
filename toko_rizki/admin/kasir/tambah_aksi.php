<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_kasir  = $_POST['kode_kasir'];
$nama_kasir	 = $_POST['nama_kasir'];
$alamat_kasir = $_POST['alamat_kasir'];
$no_hpkasir = $_POST['no_hpkasir'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into kasir values('','$kode_kasir ','$nama_kasir','$alamat_kasir','$no_hpkasir')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>