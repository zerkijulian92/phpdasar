<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

<!-- Fungsi isset => jika tombol submit telah di tekan makan tampilkan Selamat Datang -->
<?php if( isset($_POST["submit"]) ) : ?>
	<H1>Hallo Selamat Datang <?= $_POST["nama"]; ?> !</H1>
<?php endif; ?>		

<form action="" method="post">
	Masukan Nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>

</body>
</html>