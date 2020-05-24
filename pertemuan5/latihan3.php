<?php 

$mahasiswa =[
	["Zerky Yulyandri", "000111234", "Manajemen Informatika", "zerkijuliandri92@gmail.com"],
	["Adhek Elfirawanni", "000111235", "Manajemen Dakwah", "adek@gmail.com"],
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach ($mahasiswa as $mhs) : ?>
 	<ul>
 		<li>Nama :<?= $mhs[0]; ?></li>
 		<li>NRP :<?= $mhs[1]; ?></li>
 		<li>Jurusan :<?= $mhs[2]; ?></li>
 		<li>Email :<?= $mhs[3] ?></li>
 	</ul>
 	<?php endforeach; ?>

 </body>
 </html>