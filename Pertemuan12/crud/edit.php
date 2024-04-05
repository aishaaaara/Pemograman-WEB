<?php
// Memasukkan file crud.php yang berisi kelas Crud
require_once 'crud.php';

// Membuat objek dari kelas Crud
$crud = new Crud();

// Mengambil ID jabatan dari parameter GET
$id = $_GET['id'];

// Membaca data jabatan berdasarkan ID
$tampil = $crud->readById($id);

// Memeriksa jika form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data yang di-submit melalui form
    $jabatan = $_POST['jabatan'];
    $keterangan = $_POST['keterangan'];

    // Memperbarui data jabatan menggunakan metode update dari kelas Crud
    $crud->update($id, $jabatan, $keterangan);

    // Mengarahkan kembali ke halaman utama setelah berhasil diperbarui
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Jabatan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Edit Jabatan</h2>
            <!-- Form untuk mengedit data jabatan -->
            <form action="" method="post">
                <div class="form-group">
                    <label for="jabatan">Jabatan:</label>
                    <!-- Input untuk mengedit nama jabatan -->
                    <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $tampil['jabatan'];?>" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <!-- Textarea untuk mengedit keterangan jabatan -->
                    <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required><?php echo $tampil['keterangan'];?></textarea>
                </div>
                <!-- Input hidden untuk menyimpan ID jabatan yang akan diupdate -->
                <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
                <!-- Tombol untuk menyubmit form -->
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <!-- Script untuk memuat library JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
