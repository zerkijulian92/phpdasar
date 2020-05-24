<?php 
// pengulangan pada array
// menampilkan array ke user menggunakan
// for / foreach

// menampilkan array untuk developer menggunakan
// var_dump() | print_r()

$angka = [3, 6, 9, 12 ,23,45, 76];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 2</title>
 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}

 		.clear { clear: both; }
 	</style>
 </head>
 <body>

<!-- fungsi count($angka) berguna untuk menghitung jumlah elemen di dalam array
	jadi tidak peduli nanti jika kita tambahkan element dan kurangi element pada array
	loopingnya bakalan menyesuaikan nantinya
-->
 <?php  for( $i = 0; $i < count($angka); $i++ ) { ?> 

 	<div class="kotak"><?php echo $angka[$i]; ?></div>

 <?php } ?>

 <div class="clear"></div>

<!-- menggunakan foreach -->
 <?php foreach ($angka as $a ) { ?>

 	<div class="kotak"> <?php echo $a; ?></div>

 <?php } ?> 

 <div class="clear"></div>

 <!-- menggunakan foreach dengan gaya template -->

 <?php foreach ($angka as $a) : ?>

 	<div class="kotak"><?= $a; ?></div>

 <?php endforeach; ?> 	



 </body>
 </html>