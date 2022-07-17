<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_kasir = $_POST['kode_kasir'];
$kode_member = $_POST['kode_member'];
$kode_brg = $_POST['kode_brg'];
$qty = $_POST['qty'];
$tgl_transaksi = $_POST['tgl_transaksi'];
 
// update data ke database
mysqli_query($koneksi,"update transaksi set kode_kasir='$kode_kasir', kode_member='$kode_member', kode_brg='$kode_brg',qty='$qty',tgl_transaksi='$tgl_transaksi' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>