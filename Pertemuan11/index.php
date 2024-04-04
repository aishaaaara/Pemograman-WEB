<?php
// Memeriksa dan memulai session jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Memeriksa apakah level pengguna sudah ada dalam sesi
if (!empty($_SESSION['level'])) {
    // Mengimpor file-file eksternal yang diperlukan
    require 'config/koneksi.php'; // File koneksi ke database
    require 'fungsi/pesan_kilat.php'; // File fungsi untuk menampilkan pesan

    // Mengimpor template-header untuk area admin
    include 'admin/template/header.php';

    // Memuat halaman yang diminta berdasarkan parameter GET 'page'
    if (!empty($_GET['page'])) {
        include 'admin/module/' . $_GET['page'] . '/index.php'; // Memuat halaman modul
    } else {
        include 'admin/template/home.php'; // Jika tidak ada parameter, memuat halaman home admin
    }

    // Mengimpor template-footer untuk area admin
    include 'admin/template/footer.php';
} else {
    // Jika level pengguna tidak ditemukan dalam sesi, maka alihkan ke halaman login
    header("Location: login.php");
}

?>
