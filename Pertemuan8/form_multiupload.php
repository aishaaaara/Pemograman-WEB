<!-- Praktikum 2. Multi Upload File -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Digunakan untuk mengupload bentuk dokumen -->
    <!-- <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
        <input type="submit" value="Unggah">
    </form> -->

    <!-- Digunakan untuk mengupload bentuk gambar-->
    <h2>Unggah Gambar </h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".png, .jpg, .jpeg">
        <input type="submit" value="Unggah">
    </form>
</body>
</html