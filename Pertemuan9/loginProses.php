<!-- Praktikum Bagian 2. Login Single User 
Untuk menjalankan proses login-->
<?php
    include "koneksi.php"; //mengoneksikan pada file koneksi.php agar bisa terhubung pada database

    // Mendapatkan data username dari form login
    $username = $_POST['username'];

    // Mendapatkan data password dari form login dan mengenkripsi menggunakan MD5
    $password = md5($_POST['password']);

    // Membuat query SQL untuk memeriksa kecocokan username dan password
    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

    // Eksekusi query SQL
    $result = mysqli_query($conn, $query);

    // Menghitung jumlah baris hasil query
    $cek = mysqli_num_rows($result);

    // Jika jumlah baris lebih dari 0, maka login berhasil
    if ($cek){
        echo "Anda berhasil login"; ?>
        <!-- Tautan ke halaman home -->
        <a href="homeAdmin.html">Halaman Home</a>
    <?php
    } else {
        // Jika jumlah baris 0, maka login gagal
        echo "Anda gagal Login, silahkan "; ?>
        <!-- Tautan untuk kembali ke halaman login -->
        <a href="loginForm.html">Login Kembali</a>
    <?php
        // Menampilkan pesan error jika terjadi masalah dengan koneksi atau query SQL
        echo mysqli_error($conn); 
    }
?>
