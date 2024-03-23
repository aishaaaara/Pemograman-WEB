<!-- Praktikum 3. Upload  File dengan PHP dan Jquery -->
<!-- Praktikum 4. Menghias Upload File  -->
<?php
// Jika file dikirim melalui formulir
if (isset($_FILES['file'])){
    $errors = array(); // Menyiapkan daftar kesalahan
    
    // Mendapatkan informasi file yang dikirim
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    
    // Mendapatkan ekstensi file
    @$file_ext = strtolower("" . end(explode('.', $_FILES['file']['name'])) . "");
    
    // Daftar ekstensi yang diperbolehkan
    $extensions = array("jpg", "jpeg", "png", "gif");

    // Memeriksa apakah ekstensi file valid
    if (in_array($file_ext, $extensions) === false){
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF";
    }
    
    // Memeriksa apakah ukuran file sesuai dengan batasan
    if ($file_size > 2097152){ // 2 MB (2 * 1024 * 1024)
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }
    
    // Jika tidak ada kesalahan, file akan diunggah
    if (empty($errors) == true){
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah";
    } else { 
        // Jika terdapat kesalahan, menampilkan pesan kesalahan
        echo implode(" ", $errors);
    }
}
?>
