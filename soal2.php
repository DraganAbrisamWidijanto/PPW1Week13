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
$kelompok = array(
    array("Nama" => "Dragan Abrisam Widijanto", "NIM" => "505608"),
    array("Nama" => "Punten Ranimah", "NIM" => "493903"),
    array("Nama" => "Mikaela Sudarini", "NIM" => "493904"),
    array("Nama" => "Senkuu Ishigami", "NIM" => "493907"),
    array("Nama" => "Light Yagami", "NIM" => "493908"),
);

foreach ($kelompok as $anggota) {
    $nama = $anggota["Nama"];
    $nim = $anggota["NIM"];

    if ($nim % 2 == 0) { //kondisi ganjil genap
        $peran = "Back-end Developer";
    } else {
        $peran = "Front-end Developer";
    }

    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Peran: " . $peran . "<br><br>";
}
?>
</body>
</html>
