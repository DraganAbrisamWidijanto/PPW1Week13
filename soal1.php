<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
    $nama = "Dragan Abrisam Widijanto"; // Ganti nama yang di inginkan
    $tanggal = date("j"); // Mendapatkan tanggal hari ini
    
    $jumlahHurufNama = strlen($nama); // Menghitung jumlah huruf dalam nama
    
    if ($jumlahHurufNama === $tanggal - 2) {
        echo "Berhasil";
    } elseif ($jumlahHurufNama < $tanggal) {
        echo "Sedikit lagi";
    } else {
        echo "Coba lagi";
    }
    ?>
    
</body>
</html>
