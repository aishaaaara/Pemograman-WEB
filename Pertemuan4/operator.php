<!-- Praktikum Bagian 3 : Penggunaan Operator PHP-->
<?php
/* Penambahan code dengan operasi aritmetika seperti pertambahan, pengurangan, perkalian, 
pembagian, sisa bagi, dan perpangkatan menggunakan variabel $a dan $b.*/
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Pertambahan: {$hasilTambah}";
echo "<br>";
echo "Hasil Pengurangan: {$hasilKurang}";
echo "<br>";
echo "Hasil Perkalian: {$hasilKali}";
echo "<br>";
echo "Hasil Pembagian: {$hasilBagi}";
echo "<br>";
echo "Hasil Sisa Bagi: {$sisaBagi}";
echo "<br>";
echo "Hasil Perpangkatan: {$pangkat}";
echo "<br>";
echo "<br>";

/* Penambahan code dengan penggunaan operator perbandingan seperti ==, !=, <, >, <=, dan >= pada variabel $a dan $b. 
Hasil perbandingan ditampilkan dalam bentuk 1 (true) atau 0 (false) */
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: " . ($hasilSama ? "1" : "0");
echo "<br>";
echo "Hasil Tidak Sama: " . ($hasilTidakSama ? "1" : "0");
echo "<br>";
echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? "1" : "0");
echo "<br>";
echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? "1" : "0");
echo "<br>";
echo "Hasil Lebih Kecil Sama Dengan: " . ($hasilLebihKecilSama ? "1" : "0");
echo "<br>";
echo "Hasil Lebih Besar Sama Dengan: " . ($hasilLebihBesarSama ? "1" : "0");

/* Penambahan code dengan operasi logika AND, OR, NOT pada variabel $a dan $b. 
Hasil operasi logika ditampilkan dalam bentuk 1 (true) atau 0 (false).*/
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "<br>";
echo "Hasil AND: " . ($hasilAnd ? "1" : "0") . "<br>";
echo "Hasil OR: " . ($hasilOr ? "1" : "0") . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? "1" : "0") . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? "1" : "0") . "<br>";

/* Penambahan code dengan operasi penugasan seperti penambahan, pengurangan, 
perkalian, pembagian, dan sisa bagi pada variabel $a menggunakan variabel $b*/
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br>";
echo "Setelah ditambah: " . ($a += $b) . "<br>";
echo "Setelah dikurangkan: " . ($a -= $b) . "<br>";
echo "Setelah dikalikan: " . ($a *= $b) . "<br>";
echo "Setelah dibagi: " . ($a /= $b) . "<br>";
echo "Sisa bagi: " . ($a %= $b) . "<br>";

/* Penambahan code penerapan operasi identitas (=== dan !==) pada variabel $a dan $b*/
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil Identik: {$hasilIdentik}";
echo "<br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik}";
echo "<br>";


/* Sebuah restoran memiliki 45 kursi di dalamnya. 
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
Berapa persen kursi yang masih kosong di restoran tersebut?*/
echo "<br>";
echo "===== Menghitung Kursi Kosong =====";
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "<br>";
echo "Total Kursi: $totalKursi <br>";
echo "Kursi Terisi: $kursiTerisi <br>";
echo "Kursi Kosong: $kursiKosong <br>";
echo "Persentase Kursi Kosong: $persentaseKursiKosong% <br>";


?>