<?php 
// $mahasiswa = [
// 	["Zerky Yulyandri", "0125052020", "zerkijuliandri@gmail.com", "Sistem Informasi"],
// 	["Akbar Kiano", "0225052020", "akbar@gmail.com", "Teknik Informatika"]
// ];


// Array Associative
// defiinisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
	[
		"nama" => "Zerky Yulyandri",
		"nrp" => "0125052020",
		"email" => "zerkijuliandri@gmail.com",
		"jurusan" => "Sistem Informasi",
		"gambar" => "oppoa5.png"
	],

	[
		"nama" => "Akbar Kiano",
		"nrp" => "0225052020",
		"email" => "akbarkiano@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "ctm2.jpg"
	]
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>

 	<?php foreach ( $mahasiswa as $mhs) : ?>
	 	<ul>
	 		<li>
	 			<img src="img/<?= $mhs["gambar"]; ?>">
	 		</li>
	 		<li>Nama : <?= $mhs["nama"]; ?></li>
	 		<li>Nrp : <?= $mhs["nrp"]; ?></li>
	 		<li>Email : <?= $mhs["email"]; ?></li>
	 		<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
	 	</ul>
 <?php endforeach; ?>
 </body>
 </html>

