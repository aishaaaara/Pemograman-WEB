<!-- Praktikum Bagian 4. Login Multiuser -->
<?php
    // Mengimpor file koneksi agar dapat menyambung ke database
    include "koneksi.php";

    // Mengambil data username dari form login
    $username = $_POST['username'];

    // Mengambil data password dari form login dan mengenkripsi menggunakan MD5
    $password = md5($_POST['password']);

    // Membuat query SQL untuk memeriksa kecocokan username dan password
    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

    // Eksekusi query SQL
    $result = mysqli_query($conn, $query);

    // Mengambil satu baris hasil query sebagai asosiatif array
    $row = mysqli_fetch_assoc($result);

    // Memeriksa level user
    if ($row['level'] == 1){
        // Jika level user adalah 1, tampilkan pesan berhasil untuk admin
        echo "Anda berhasil login, silahkan menuju"; ?>
        <!-- Tautan ke halaman home admin -->
        <a href="homeAdmin.html">Halaman Home</a>
        <?php
    } else if ($row['level'] == 2){
        // Jika level user adalah 2, tampilkan pesan berhasil untuk tamu
        echo "Anda berhasil login, silahkan menuju"; ?>
        <!-- Tautan ke halaman home tamu -->
        <a href="homeGuest.html">Halaman Home</a>
        <?php
    } else {
        // Jika tidak ada baris yang cocok atau level tidak dikenali, tampilkan pesan gagal login
        echo "Anda gagal login, silahkan ";?>
        <!-- Tautan untuk kembali ke halaman login -->
        <a href="loginForm.html">Login Kembali</a>
        <?php
        // Tampilkan pesan error jika terjadi masalah dengan koneksi atau query SQL
        echo mysqli_error($conn);
    }
?>
