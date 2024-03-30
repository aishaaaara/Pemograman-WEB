<?php
// Memasukkan file koneksi.php
include('koneksi.php');

// Mendapatkan aksi yang diambil dari URL
$aksi = $_GET['aksi'];

// Mendapatkan data yang di-post dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

// Jika aksi adalah tambah
if ($aksi == 'tambah'){
    // Membuat query untuk menambahkan data anggota ke dalam database
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) 
              VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";
            
    // Menjalankan query
    if (mysqli_query($koneksi, $query)){
        // Jika berhasil, redirect ke halaman utama
        header("Location: index.php");
        exit();
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}  
// Jika aksi adalah ubah
else if ($aksi == 'ubah'){
    // Memeriksa apakah ID anggota tersedia
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Membuat query untuk mengubah data anggota berdasarkan ID
        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'";
        
        // Menjalankan query
        if (mysqli_query($koneksi, $query)){
            // Jika berhasil, redirect ke halaman utama
            header("Location: index.php");
            exit();
        } else {
            // Jika gagal, tampilkan pesan error
            echo "Gagal mengupdate data: " . mysqli_error($koneksi);
        }
    }
} 
// Jika aksi adalah hapus
else if ($aksi == 'hapus'){ 
    // Memeriksa apakah ID anggota tersedia
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Membuat query untuk menghapus data anggota berdasarkan ID
        $query = "DELETE FROM anggota WHERE id='$id'";
        
        // Menjalankan query
        if (mysqli_query($koneksi, $query)){
            // Jika berhasil, redirect ke halaman utama
            header("Location: index.php");
            exit();
        } else {
            // Jika gagal, tampilkan pesan error
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    }
}
// Menutup koneksi database
mysqli_close($koneksi);
?>
