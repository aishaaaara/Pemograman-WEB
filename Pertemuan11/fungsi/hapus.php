<?php
session_start();

// Memeriksa apakah sesi username tidak kosong, jika tidak kosong, maka lanjutkan
if (!empty($_SESSION['username'])) {
    // Memasukkan file koneksi.php dan pesan_kilat.php
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Jika terdapat parameter GET 'jabatan'
    if (!empty($_GET['jabatan'])) {
        // Mengambil ID jabatan dari parameter GET dan mencegah serangan SQL injection
        $id = antiinjection($koneksi, $_GET['id']);
        
        // Menyusun query SQL untuk menghapus jabatan dari database
        $query = "DELETE FROM jabatan WHERE id = '$id'";

        // Menjalankan query dan memberikan pesan sesuai hasil eksekusi query
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }

        // Mengarahkan pengguna kembali ke halaman jabatan setelah selesai
        header("Location: ../index.php?page=jabatan");
    } 
    // Jika terdapat parameter GET 'anggota'
    elseif (!empty($_GET['anggota'])) {
        // Mengambil ID anggota dari parameter GET dan mencegah serangan SQL injection
        $id = antiinjection($koneksi, $_GET['id']);

        // Menyusun query SQL untuk menghapus anggota dari database
        $query2 = "DELETE FROM anggota WHERE user_id = '$id'";
        
        // Menjalankan query penghapusan anggota terlebih dahulu, kemudian penghapusan data login
        if (mysqli_query($koneksi, $query2)) {
            $query = "DELETE FROM user WHERE id = '$id'";
            if (mysqli_query($koneksi, $query)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('danger', "Data Login Tidak Terhapus Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna kembali ke halaman anggota setelah selesai
        header("Location: ../index.php?page=anggota");
    }
}
?>
