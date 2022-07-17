<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$kode_kasir = $_POST['kode_kasir'];
$kode_member = $_POST['kode_member'];
$kode_brg = $_POST['kode_brg'];
$qty = $_POST['qty'];
$tgl_transaksi = $_POST['tgl_transaksi'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into transaksi values('','$kode_kasir','$kode_member','$kode_brg','$qty ','$tgl_transaksi')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>