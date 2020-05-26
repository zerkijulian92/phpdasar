<?php 
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
	],

	[
		"tipe hp" => "Oppo A91 Mona Ram 8 - 128GB ",
		"harga" => "Rp3.549.000",
		"warna" => "Blue, Black",
		"kondisi" => "Baru",
		"asuransi" => "Ya",
		"photo" => "oppoa91.jpg"
	],

	[
		"tipe hp" => "OPPO F11 RAM 4/128GB ",
		"harga" => "Rp2.650.000",
		"warna" => "Green, Blue, White",
		"kondisi" => "Baru",
		"asuransi" => "Opsional",
		"photo" => "oppof11.jpg"
	],

	[
		"tipe hp" => "OPPO Reno2 F Smartphone 8GB/128GB ",
		"harga" => "Rp4.999.000",
		"warna" => "Green, White",
		"kondisi" => "Baru",
		"asuransi" => "Opsional",
		"photo" => "opporeno2.jpg"
	]

];

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Oppo Smartphone</title>
 	
 	<style>

 		.h1 {
 			color: #03AC0E;
 		}
 		.btnBeli {
 			width: 100px;
 			height: 40px;
 			background-color: #FFFFFF;
 			color: #FA591D;
 			text-align: center;
 			margin-left: 40px;
 			border-style: ridge;
 			float: left;
 		}

 		.btnBeli:hover {
 			background-color: #FA591D;
 			color: white;
 		}

 		.btnKeranjang {
 			width: 150px;
 			height: 40px;
 			background-color: #FFFFFF;
 			color: #FA591D;
 			text-align: center;
 			margin-left: 8px;
 			border-style: ridge;
 			float: left;
 		}

 		.btnKeranjang:hover {
 			background-color: #FA591D;
 			color: white;
 		}

 		.clear {
			clear: both;
		}
 	</style>

 </head>
	 <body>
	 <h1 class="h1">DAFTAR HARGA OPPO SMARTPHONE</h1>

		<?php foreach( $oppo as $hp ) : ?>
			 <ul>

			 	<li>
			 		<img src="oppo/<?= $hp["photo"]; ?>">
			 	</li>

			 	<li>Tipe Hp : <?= $hp["tipe hp"]; ?></li>
			 	<li>Harga : <?= $hp["harga"]; ?></li> 
			 	<li>Warna : <?= $hp["warna"]; ?></li>
			 	<li>Kondisi : <?= $hp["kondisi"]; ?></li>
			 	<li>Asuransi : <?= $hp["asuransi"]; ?></li>
			 </ul>

			 <form>
			 	<input class = "btnBeli" type="submit" name="beli" value="Beli">
			 	<input class = "btnKeranjang" type="submit" name="tambah keranjang" value="Tambah Keranjang">
			 </form>

	    <div class="clear"></div>

		<?php endforeach; ?>

	 </body>
 </html>