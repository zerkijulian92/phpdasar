<!-- <?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array
//------------------------------

// Pengulangan For

// for($i = 0; $i < 5; $i++){
//     echo "Hello World! <br>";
// }

//--------------------

// Perulangan While
// $a = 0;
// while ($a < 5) {
//     echo "Contoh Perulangan While! <br>";
// $a++;    
// }

//-----------------------

// Perulangan do .. while
/* 
Perulangan do while akan menjalankan kondisi 1 kali jika nilainya false
berbeda dengan while jika nilainya false maka kondisi tidak akan dijalankan atau di tampilkan
*/

// $b = 0;
// do {
//      echo "Ini adalah perulangan do while <br>";
// $b++;     

// } while ($b <5);



?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($a = 1; $a <=3; $a++) : ?>
            <tr> 
                <?php for($b = 1; $b <= 5; $b++) : ?>
                     <td><?= "$a, $b"; ?></td>
                <?php endfor; ?>
            
            </tr>
        <?php endfor; ?>    
    </table>

</body>
</html> 