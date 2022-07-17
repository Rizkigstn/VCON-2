<html>
<head>
	<title>TOKO RIZKI</title>
</head>
<body>
<center>
<br>
<br/>
<h1> Halaman Dashboard </h1> 
<br>
<!- cek apakah sudah login ->
<?php 
session_start();
if ($_SESSION['status']!="login"){
header("location:../index.php?pesan=belum_login");
}
?>
<br>
<h2>Selamat datang , <?php echo $_SESSION['username']; ?> anda telah berhasil login.</h2>
<br>
<br/>
<h1 > TOKO RIZKI </h1>
<br>
<br/>
<a href="barang"><button>Data Barang</button></a>|||
<a href="kasir"><button>Data Kaisr</button></a>|||
<a href="member"><button>Data Member</button></a>|||
<a href="transaksi"><button>Input Transaksi</button></a>|||

<br/>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>
</center>
</body>
</html>