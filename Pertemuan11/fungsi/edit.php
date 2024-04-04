<?php
session_start();

// Memeriksa apakah sesi username tidak kosong
if (!empty($_SESSION['username'])) {
    // Memasukkan file koneksi.php dan fungsi-fungsi yang diperlukan
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Memeriksa apakah terdapat parameter 'jabatan' dalam URL
    if (!empty($_GET['jabatan'])) {
        // Mengambil dan membersihkan data dari form edit jabatan
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);

        // Menyiapkan query untuk mengupdate data jabatan
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";

        // Menjalankan query dan memberikan pesan berhasil atau gagal
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Karena: " . mysqli_error($koneksi));
        }

        // Mengarahkan kembali ke halaman jabatan setelah selesai
        header("Location: ../index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) { // Memeriksa apakah terdapat parameter 'anggota' dalam URL
        // Mengambil dan membersihkan data dari form edit anggota
        $user_id = antiinjection($koneksi, $_POST['id']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);
        $username = antiinjection($koneksi, $_POST['username']);
        
        // Menyiapkan query untuk mengupdate data anggota
        $query_anggota = "UPDATE anggota SET 
            nama = '$nama', 
            jenis_kelamin = '$jenis_kelamin',
            alamat = '$alamat',
            no_telp = '$no_telp',
            jabatan_id = '$jabatan'
            WHERE user_id = '$user_id'";
        
        // Menjalankan query untuk mengupdate data anggota
        if (mysqli_query($koneksi, $query_anggota)) {
            // Memeriksa apakah terdapat perubahan password
            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
                // Generate random salt
                $salt = bin2hex(random_bytes(16));
                // Gabungkan salt dengan password
                $combined_password = $salt . $password;
                // Hash password dengan salt
                $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);
                // Menyiapkan query untuk mengupdate password
                $query_user = "UPDATE user SET 
                    username = '$username', 
                    password = '$hashed_password', 
                    salt = '$salt' 
                    WHERE id = '$user_id'";
                
                // Menjalankan query untuk mengupdate password
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else { // Jika tidak ada perubahan password
                // Menyiapkan query untuk mengupdate username
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                // Menjalankan query untuk mengupdate username
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi));
        }
        // Mengarahkan kembali ke halaman anggota setelah selesai
        header("Location: ../index.php?page=anggota");
    } else {
        // Jika tidak ada parameter yang sesuai, tidak melakukan apa-apa
    }
}
// Akhir dari blok kode PHP
?>
