<?php 
	// Date
	// Untuk menampilkan tanggal dengan format tertentu

	// echo "l, d-M-Y";


	// Time
	// UNIX Timestamp / EPOCH time
	// Detik yang sudah berlalu sejak 1 Januari 1970
	// echo time();

	// Cara menghitung 3 hari ke depan adalah hari apa
	// untuk menghitung hari lain bisa di ganti angka dibelakangnya
	// gunakan tanda ( + ) plus didepannya


	// Cara untuk menghintung 3 hari kebelakang
	// dengan menggunakan tanda ( - ) minus didepannya
	// echo date("l", time(" d M Y")-060*60*24*3);


	// mktime
	// membuat sendiri detik
	// mktime (0,0,0,0,0,0)
	// jam, menit, detik, bulan, tanggal, tahun

	// mengetahui hari lahir
	echo date("l", mktime(0,0,0,7,27,1992));


	//strtotime
	// fungsinya hampir sama dengan mktime tapi
	// valuenya menggunakan string
	echo date ("l"strtotime("25 aug 1985"));

 ?>