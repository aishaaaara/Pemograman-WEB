<!-- Praktikum 1. Function Isset -->
<?php

// Pengecekan apakah variabel $umur sudah didefinisikan dan bernilai 18 atau lebih.
$umur;
if(isset($umur) && $umur >= 18){
    echo "Anda sudah dewasa.";
}else{
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

echo "<br>";

// Pengecekan apakah kunci "nama" ada dalam array $data.
$data = array ("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])){
    echo "Nama: " . $data["nama"];
}else{
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}

?>
