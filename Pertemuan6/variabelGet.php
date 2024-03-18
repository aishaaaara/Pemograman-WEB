<!-- Variabel Super Global - Variabel get -->
<?php
// Mengakses nilai dari parameter 'nama' dan 'usia' yang dikirimkan melalui URL
$nama = @$_GET['nama'];
$usia = @$_GET['usia'];

// Menampilkan pesan yang menggunakan nilai dari variabel 'nama' dan 'usia'
echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>