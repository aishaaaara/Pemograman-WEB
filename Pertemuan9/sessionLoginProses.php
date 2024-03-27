<?php
// Mengimpor file koneksi database
include "koneksi.php";

// Mengambil data username dan password dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

// Membuat query SQL untuk memeriksa kecocokan username dan password
$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";

// Eksekusi query SQL
$result = mysqli_query($conn, $sql); 

// Menghitung jumlah baris hasil query
$cek = mysqli_num_rows($result);

// Jika ada baris yang cocok, maka login berhasil
if ($cek > 0){
    // Memulai session
    session_start();

    // Menyimpan username dan status login ke dalam session
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    // Menampilkan pesan bahwa login berhasil dan tautan ke halaman home
    echo "Anda berhasil Login, silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    // Jika tidak ada baris yang cocok, maka login gagal
    echo "Gagal login silahkan login lagi <a href='sessionLoginHome.html'>Halaman Login</a>";

    // Menampilkan pesan error jika terjadi masalah dengan koneksi atau query SQL
    echo mysqli_error($conn);
}
?>
