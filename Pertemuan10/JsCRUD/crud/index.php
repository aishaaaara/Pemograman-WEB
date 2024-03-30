<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Anggota</title>
    <!-- Memasukkan stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Data anggota</h2>
        <!-- Tombol untuk menambahkan data anggota -->
        <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
        <br><br>
        <?php
        // Memasukkan file koneksi.php
        include('koneksi.php');
        // Membuat query untuk mengambil data anggota dan mengurutkannya berdasarkan ID secara descending
        $query = "SELECT * FROM anggota order by id desc";
        // Menjalankan query
        $result = mysqli_query($koneksi, $query);
        ?>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis kelamin</th>
                    <th>Alamat</th>
                    <th>No telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Variabel untuk nomor urut
                $no = 1;
                // Mengambil data anggota satu per satu dan menampilkannya dalam tabel
                while ($row = mysqli_fetch_assoc($result)) {
                    // Mengonversi jenis kelamin menjadi teks yang lebih deskriptif
                    $kelamin = ($row["jenis_kelamin"] == 'L') ? "Laki-laki" : "Perempuan";
                    ?>
                    <tr>
                        <!-- Menampilkan nomor urut -->
                        <td>
                            <?= $no++ ?>
                        </td>
                        <!-- Menampilkan nama anggota -->
                        <td>
                            <?= $row["nama"] ?>
                        </td>
                        <!-- Menampilkan jenis kelamin anggota -->
                        <td>
                            <?= $kelamin ?>
                        </td>
                        <!-- Menampilkan alamat anggota -->
                        <td>
                            <?= $row["alamat"] ?>
                        </td>
                        <!-- Menampilkan nomor telepon anggota -->
                        <td>
                            <?= $row["no_telp"] ?>
                        </td>
                        <!-- Tombol untuk mengedit dan menghapus data anggota -->
                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?= $row["id"] ?>">Edit</a>
                            <a class="btn btn-danger" href='#' data-toggle='modal'
                                data-target='#hapusModal<?= $row["id"] ?>'>Hapus</a>
                        </td>
                    </tr>
                    <!-- Modal konfirmasi hapus data anggota -->
                    <div class='modal fade' id='hapusModal<?= $row["id"] ?>' tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Pesan konfirmasi hapus data anggota -->
                                    <?= "Apakah anda yakin ingin menghapus data dengan nama " . $row['nama'] . "?" ?>
                                </div>
                                <div class="modal-footer">
                                    <!-- Tombol untuk menghapus data anggota -->
                                    <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
                                    <!-- Tombol untuk membatalkan hapus data anggota -->
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Memasukkan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Memasukkan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Memasukkan Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
