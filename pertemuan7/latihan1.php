<?php 

// $_GET

$oppo = [
	[
		"tipe hp" => "OPPO A5 2020 Smartphone 4GB/128GB ",
		"harga" => "Rp2.799.000",
		"warna" => "Dazzling White, Mirror Black",
		"kondisi" => "Baru",
		"asuransi" => "Ya",
		"photo" => "oppoa5.jpg"
	],

	[
		"tipe hp" => "OPPO A5s 3GB/32GB - Black ",
		"harga" => "Rp1.899.000",
		"warna" => "Red, Blue",
		"kondisi" => "Baru",
		"asuransi" => "Opsional",
		"photo" => "oppoa5s.jpg"
	]
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 </head>
 <body>

 <H1>Daftar Harga Oppo Smartphone</H1>

 <ul>
	 <?php foreach( $oppo as $hp ) : ?>
	 	<li>

	 		<a href="latihan2.php?tipe_hp=<?= $hp["tipe hp"]; ?>&harga=<?= $hp["harga"]; ?>&warna=<?= $hp["warna"]; ?>&kondisi=<?= $hp["kondisi"]; ?>&asuransi=<?= $hp["asuransi"]; ?>&photo=<?= $hp["photo"]; ?>"><?= $hp["tipe hp"]; ?></a>
	 			
	 	</li>
	 <?php endforeach; ?>
 </ul>
 </body>
 </html>