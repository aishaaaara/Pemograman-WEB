<!-- Praktikum 1. Upload File -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Input untuk mengunggah file yang akan diproses oleh script "upload.php" -->
        
        <!-- Untuk upload file dengan tipe PNG, JPG, JPEG -->
        <!-- <input type="file" name="fileToUpload" id="fileToUpload"> --> 

        <!-- Untuk upload file dengan tipe TXT, PDF, Word, DOC, DOCX -->
        <input type="file" name="documentToUpload" id="documentToUpload">

        <!-- Tombol untuk mengirimkan file yang dipilih -->
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
