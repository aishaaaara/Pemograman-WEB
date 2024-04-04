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
        // Mengambil data dari form dan mencegah serangan SQL injection
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        
        // Menyusun query SQL untuk menambahkan jabatan baru ke database
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan','$keterangan')";

        // Menjalankan query dan memberikan pesan sesuai hasil eksekusi query
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Baru Ditambahkan.");
        } else {
            pesan('danger', "Gagal Menambahkan Jabatan Karena: " . mysqli_error($koneksi));
        }

        // Mengarahkan pengguna kembali ke halaman jabatan setelah selesai
        header("Location: ../index.php?page=jabatan");
    } 
    // Jika terdapat parameter GET 'anggota'
    elseif (!empty($_GET['anggota'])) {
        // Mengambil data dari form dan mencegah serangan SQL injection
        $username = antiinjection($koneksi, $_POST['username']);
        $password = antiinjection($koneksi, $_POST['password']);
        $level = antiinjection($koneksi, $_POST['level']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);
        $salt = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;
        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);
    
        // Menyusun query SQL untuk menambahkan pengguna baru dan anggota baru ke database
        $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";
        
        // Menjalankan query dan memberikan pesan sesuai hasil eksekusi query
        if (mysqli_query($koneksi, $query)) {
            $last_id = mysqli_insert_id($koneksi);
            $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan')";
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Baru Ditambahkan.");
            } else {
                pesan('danger', "Gagal Menambahkan Anggota Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
        }
        
        // Mengarahkan pengguna kembali ke halaman anggota setelah selesai
        header("Location: ../index.php?page=anggota");
    } 
    // Jika tidak ada parameter GET yang diberikan
    else {
        // Tidak melakukan apa-apa
    }
}
?>
