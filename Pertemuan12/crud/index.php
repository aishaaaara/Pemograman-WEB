<?php
// Memasukkan file crud.php yang berisi definisi kelas Crud
require_once 'crud.php';

// Membuat objek dari kelas Crud
$crud = new Crud();

// Memeriksa apakah permintaan yang diterima adalah permintaan POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data yang dikirimkan melalui formulir untuk menambahkan data baru ke database
    $jabatan = $_POST['jabatan'];
    $keterangan = $_POST['keterangan'];
    
    // Menambahkan data baru ke database menggunakan metode create dari objek Crud
    $crud->create($jabatan, $keterangan);
}

// Memeriksa apakah ada permintaan untuk menghapus data jabatan
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    // Mengambil ID jabatan yang akan dihapus dari parameter GET
    $id = $_GET['id'];
    
    // Menghapus data jabatan dari database menggunakan metode delete dari objek Crud
    $crud->delete($id);
}

// Membaca data jabatan dari database menggunakan metode read dari objek Crud
$tampil = $crud->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Tombol untuk menampilkan modal tambah data -->
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambahModal">Tambah</button>
        
        <!-- Tabel untuk menampilkan data jabatan -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menampilkan data jabatan dalam baris tabel
                foreach ($tampil as $show) {
                    echo "<tr>";
                    echo "<td>" . $show['id'] . "</td>";
                    echo "<td>" . $show['jabatan'] . "</td>";
                    echo "<td>" . $show['keterangan'] . "</td>";
                    echo "<td>";
                    // Tombol untuk mengarahkan ke halaman edit.php untuk mengedit data
                    echo "<a href='edit.php?id=". $show['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                    // Tombol untuk menghapus data jabatan
                    echo "<a href='index.php?action=delete&id=" . $show['id'] . "' class='btn btn-danger btn-sm'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal untuk menambah data jabatan baru -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role=document>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jabatan</h5>
                    <!-- Tombol untuk menutup modal -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk menambah data jabatan -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Jabatan:</label>
                            <!-- Input untuk menambahkan nama jabatan -->
                            <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Keterangan:</label>
                            <!-- Textarea untuk menambahkan keterangan jabatan -->
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <!-- Tombol untuk menyubmit form -->
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk memuat library JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
