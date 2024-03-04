<!-- Praktikum Bagian 1. Variabel dan Konstanta -->
<?php
/* penggunaan variabel untuk operasi matematika dasar */
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";
echo "<br>";
echo "<br>";

/* Membuat variabel baru dengan  menampilkan nilai variabel benar dan salah
dengan tipe data boolean*/
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

/* Membuat kode baru konstanta yg berguna untuk mendefinisikan informasi*/
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);
echo "<br>";
echo "<br>";
echo"Selamat datang di ". NAMA_SITUS . ", situs yang
didirikan pada tahun ". TAHUN_PENDIRIAN . "."; 
?>