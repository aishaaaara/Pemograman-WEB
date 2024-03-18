<!-- Variabel Super Global - Variabel Server -->
<?php
// Akan enampilkan alamat file skrip yang sedang dieksekusi
echo $_SERVER['PHP_SELF'];
echo "<br>"; 
// Menampilkan nama server yang sedang digunakan
echo $_SERVER['SERVER_NAME'];
echo "<br>";
// Menampilkan host HTTP dari permintaan saat ini
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// Menampilkan URL halaman web yang mereferensikan skrip saat ini
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
// Menampilkan informasi tentang agen pengguna yang melakukan akses ke halaman saat ini
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
// Menampilkan path dari skrip yang sedang dieksekusi
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>