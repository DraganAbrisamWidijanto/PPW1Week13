<?php
$nama = "Dragan";
$kota = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
);

$namaArray = str_split($nama);
$kotaDefault = "Jawa Timur";

foreach ($namaArray as $huruf) {
    $huruf = strtoupper($huruf);
    $kotaDitemukan = false;

    foreach ($kota as $k) {
        $hurufPertamaKota = strtoupper(substr($k, 0, 1));

        if ($huruf == $hurufPertamaKota) {
            $kotaDefault = $k;
            $kotaDitemukan = true;
            break;
        }
    }

    if ($kotaDitemukan) {
        break;
    }
}

echo "Nama : " . $nama . "<br>"; // Perbaikan: Menggunakan variabel $nama daripada $namaDepan
echo "Anda ditempatkan di kota : " . $kotaDefault;
?>
