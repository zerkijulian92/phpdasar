<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// echo "Zerky Yulyandri";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka

// $nama = "Zerky";

// $nama = "Zerky Yulyandri";
// echo "halo, nama saya $nama";

// Operator
// Aritmatika
// + - * /  %

// $x = 10;
// $y = 20;

// echo $x + $y;

//------------------------

// Pengabungan String / concatenation / concat

// $nama_depan = "zerky";
// $nama_belakang = "Yulyandri";

// echo $nama_depan . " " . $nama_belakang;

//---------------------


// Operator Assigment
// Contoh operator Assigment
// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x += 4;
// echo $x


// $nama = "zerky";
// $nama .= " ";
// $nama .= "Yulyandri";

// echo $nama;

//-------------

// Operator Perbandingan
// <, >, <=, >=, ==, !=

//contoh:
// var_dump(1 == "1");

// Operator Identitas
// ====, !==

//contoh :
// var_dump(1 === "1");


// Operator Logika
// &&, ||, ! 

// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);













?>

<!-- 1. PHP di dalam HTML -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Halo, Selamat Datang <?php echo "Zerky"; ?> </h1>
    <p><?php echo "Ini adalah paragraf" ?></p>
</body> -->

<!-- 2. HTML di dalam PHP -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
   <?php
    echo "<h1>Halo, Zerky Yulyandri</h1>" 
   ?>
</body> -->

<!-- Variabel -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1> Halo, Selamat Datang <?php echo $nama; ?> </h1>
</body> -->