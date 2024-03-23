<!-- Praktikum 3. Upload File dengan PHP dan jQuery -->
<!-- Praktikum 4. Menghias Upload File -->

<!DOCTYPE html>
<html>
<head>
    <!-- Memuat file CSS eksternal untuk mendesain tata letak dan gaya formulir unggah -->
    <link rel="stylesheet" type="text/css" href="upload.css">
    <!-- Menetapkan judul halaman -->
    <title>Unggah File Dokumen</title>
</head>
<body>
    <!-- Memulai bagian tubuh dokumen HTML -->
    <div class="upload-form-container">
        <!-- Menampilkan judul formulir -->
        <h2>Unggah File Dokumen</h2>
        <!-- Membuat formulir untuk mengunggah file -->
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
            <!-- Mengelompokkan elemen input file dalam sebuah wadah -->
            <div class="file-input-container">
                <!-- Membuat input file untuk memilih file yang akan diunggah -->
                <input type="file" name="file" id="file" class="file-input">
                <!-- Menampilkan label untuk input file sebagai tombol untuk memilih file -->
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <!-- Membuat tombol unggah -->
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>
        <!-- Menampilkan status unggah dalam sebuah wadah -->
        <div id="status" class="upload-status"></div>
    </div>
    <!-- Memuat library jQuery untuk menghandle interaksi JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Memuat file JavaScript eksternal yang berisi logika untuk mengaktifkan tombol unggah saat file dipilih dan menangani pengiriman data formulir menggunakan AJAX -->
    <script src="upload.js"></script>
</body>
</html>
