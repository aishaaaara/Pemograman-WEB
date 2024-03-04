<!-- Praktikum Bagian 4 : Penggunaan Struktur Kontrol Pada PHP -->

<?php
/*Membuat code baru yang menggunakan pernyataan 
kondisional elseIf yang digunakan untuk melakukan pengecekan kondisi.*/
$nilaiNumerik = 92;
if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai Huruf: A";
}elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai Huruf: B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
}elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf: D";
}

/* Membuat code dan variabel baru yang menggunakan pengulangan kondisi dengan 
while saat kode dalam kondisi true atau benar.*/
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari;
}
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. ";

/* Membuat code dan variabel baru yg menggunakan perulangan FOR yang digunakan untuk 
mengatur aliran eksekusi (menghitung jumlah buah yang akan dipanen dari sejumlah lahan)*/
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

/*Membuat code dan variabel baru dengan menerapkan foreach 
untuk mengiterasi melalui setiap nilai dalam array di variabel SkorUjian*/
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "<br>";
echo "Total skor ujian adalah: $totalSkor";
echo "<br>";

/*Membuat sebuah variabel dan code baru yang menerapkan foreach 
mengiterasi melalui setiap elemen array $nilaiSiswa, yang menyimpan nilai-nilai ujian siswa 
dan dilakukan pengecekan kondisi menggunakan pernyataan if*/
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai:  $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai:  $nilai (Lulus) <br>";
}

/*Soal Cerita 1 : Bantu guru ini menghitung total nilai yang akan digunakan 
untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah*/
$nilaiMtk10 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    sort($nilaiMtk10);

    $jumlahNilaiMtk10 = 0;
    for ($i = 2; $i < (count($nilaiMtk10)-2); $i++){
        $jumlahNilaiMtk10 += $nilaiMtk10[$i];
    }
    $rataRataNilai = $jumlahNilaiMtk10 / (count($nilaiMtk10)-4);
    echo "<br> Rata-rata nilai Matematika = $rataRataNilai";
    echo "<br>";


/*Soal Cerita 2 : Bantu pelanggan ini untuk menghitung harga 
yang harus dibayar setelah mendapatkan diskon. */
$totalBayar = 12000;
    if ($totalBayar > 10000){
        echo "<br>Selamat! Anda mendapatkan diskon 20%<br>";
        echo "Total belanja : $totalBayar<br>";
        echo "Total bayar :". $totalBayar-($totalBayar*0.20) . "<br>";
    }else
        echo "<br>Total bayar : $totalBayar";
        echo "<br>";

/*Soal Cerita 3 : Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”*/
$hargaAwal = 120000;
$diskonPersentase = 0.20;

$hargaSetelahDiskon = $hargaAwal - ($diskonPersentase * $hargaAwal);
echo "Harga setelah diskon: Rp " . $hargaSetelahDiskon;
?>

