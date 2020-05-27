<?php 
// Cek apakah tidak ada data di $_GET
// isset => fungsi ini berguna untuk mengecek apakah variabel sudah pernah dibikin atau belum

// Jika $_GET tipe hp belum pernah dibuat maka paksa user pindah ke halaman latihan1.php
if( !isset($_GET["tipe_hp"]) ||
	!isset($_GET["harga"]) ||
	!isset($_GET["warna"]) ||
	!isset($_GET["kondisi"]) ||
	!isset($_GET["asuransi"]) ) {
	// redirect
	header("Location: latihan1.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head> 
<body>

<ul>
	<li><img src="oppo/<?php echo $_GET["photo"]; ?>"></li>
	<li><?= $_GET["tipe_hp"]; ?></li>
	<li><?= $_GET["harga"]; ?></li>
	<li><?= $_GET["warna"]; ?></li>
	<li><?= $_GET["kondisi"]; ?></li> 
	<li><?= $_GET["asuransi"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar harga oppo smartphone</a>

</body>
</html>