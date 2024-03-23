<!-- Praktikum 1. Upload File -->
<?php
// Memeriksa apakah tombol submit telah ditekan untuk unggahan dokumen
if (isset($_POST["submit"])){
    // Menentukan direktori tempat dokumen akan disimpan
    $targetDirectory = "documents/";
    // Mendapatkan nama file dokumen yang akan diunggah
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    // Mendapatkan ekstensi file dokumen
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Jenis-jenis ekstensi file yang diizinkan untuk dokumen
    $allowedDocumentExtensions = array("txt", "pdf", "doc", "docx");

    // Ukuran maksimum file dokumen (dalam bytes)
    $maxDocumentFileSize = 10 * 1024 * 1024; // 10 MB

    // Memeriksa apakah jenis file dokumen dan ukuran file dokumen sesuai dengan yang diizinkan
    if (in_array($documentFileType, $allowedDocumentExtensions) && $_FILES["documentToUpload"]["size"] <= $maxDocumentFileSize){
        // Memindahkan dokumen ke direktori yang ditentukan
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)){
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

// Memeriksa apakah tombol submit telah ditekan untuk unggahan gambar
if (isset($_POST["submit"])){
    // Menentukan direktori tempat gambar akan disimpan
    $targetDirectory = "upload/";
    // Mendapatkan nama file gambar yang akan diunggah
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    // Mendapatkan ekstensi file gambar
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Jenis-jenis ekstensi file yang diizinkan untuk gambar
    $allowedImageExtensions = array("jpg", "jpeg", "png", "gif");

    // Ukuran maksimum file gambar (dalam bytes)
    $maxImageFileSize = 5 * 1024 * 1024; // 5 MB

    // Memeriksa apakah jenis file gambar dan ukuran file gambar sesuai dengan yang diizinkan
    if (in_array($imageFileType, $allowedImageExtensions) && $_FILES["fileToUpload"]["size"] <= $maxImageFileSize){
        // Memindahkan gambar ke direktori yang ditentukan
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)){
            echo "File berhasil diunggah.";
            echo "<br><b>Pratinjau gambar:</b><br>";
            echo '<img src="upload/' . $_FILES["fileToUpload"]["name"] . '" alt="Uploaded Image" width="200px">';
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}

?>
