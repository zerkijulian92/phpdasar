<?php 
function salam($waktu = "Datang", $nama = "Admin") { // Menggunakan nilai parameter default
	return "Selamat $waktu,, $nama";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1><?php echo salam("Siang", "Zerky") ?></h1>
 </body>
 </html>