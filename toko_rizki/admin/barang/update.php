<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode_brg  = $_POST['kode_brg'];
$nama_brg	 = $_POST['nama_brg'];
$harga_brg = $_POST['harga_brg'];
$tgl_exp = $_POST['tgl_exp'];
 
// update data ke database
mysqli_query($koneksi,"update barang set kode_brg='$kode_brg', nama_brg='$nama_brg', harga_brg='$harga_brg', tgl_exp='$tgl_exp' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>