<!-- Praktikum 2. Multi Upload File -->
<?php
// Proses unggah dokumen
$targetDirectory =  "documents/"; // Direktori untuk menyimpan dokumen
if (!file_exists($targetDirectory)){
    mkdir($targetDirectory, 0777, true); // Buat direktori jika belum ada
}
if ($_FILES['files']['name'][0]){ // Memeriksa apakah ada file yang diunggah
    $totalFiles = count($_FILES['files']['name']); // Menghitung total file yang diunggah

    // Loop untuk mengunggah setiap file
    for ($i = 0; $i < $totalFiles; $i++){
        $fileName = $_FILES['files']['name'][$i]; // Nama file
        $targetFiles = $targetDirectory . $fileName; // Path lengkap untuk menyimpan file

        // Memindahkan file ke direktori yang ditentukan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFiles)){
            echo "File $fileName berhasil diunggah.<br>"; // Menampilkan pesan sukses
        } else {
            echo "Gagal mengunggah file $fileName.<br>"; // Menampilkan pesan kesalahan
        }
    }
} else {
    echo "Tidak ada file yang diunggah"; // Menampilkan pesan jika tidak ada file yang diunggah
}

// Proses unggah gambar
$targetDirectory =  "upload/"; // Direktori untuk menyimpan gambar
if (!file_exists($targetDirectory)){
    mkdir($targetDirectory, 0777, true); // Buat direktori jika belum ada
}
if ($_FILES['files']['name'][0]){ // Memeriksa apakah ada file yang diunggah
    $totalFiles = count($_FILES['files']['name']); // Menghitung total file yang diunggah

    // Loop untuk mengunggah setiap file
    for ($i = 0; $i < $totalFiles; $i++){
        $fileName = $_FILES['files']['name'][$i]; // Nama file
        $targetFiles = $targetDirectory . $fileName; // Path lengkap untuk menyimpan file

        // Memindahkan file ke direktori yang ditentukan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFiles)){
            echo "File $fileName berhasil diunggah.<br>"; // Menampilkan pesan sukses
        } else {
            echo "Gagal mengunggah file $fileName.<br>"; // Menampilkan pesan kesalahan
        }
    }
} else {
    echo "Tidak ada file yang diunggah"; // Menampilkan pesan jika tidak ada file yang diunggah
}
?>
