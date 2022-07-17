<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_kasir = $_POST['kode_kasir'];
$nama_kasir = $_POST['nama_kasir'];
$alamat_kasir = $_POST['alamat_kasir'];
$no_hpkasir = $_POST['no_hpkasir'];
 
// update data ke database
mysqli_query($koneksi,"update kasir set kode_kasir='$kode_kasir', nama_kasir='$nama_kasir', alamat_kasir='$alamat_kasir', no_hpkasir='$no_hpkasir' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>