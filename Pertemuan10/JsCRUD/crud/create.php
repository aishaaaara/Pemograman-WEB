<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah data anggota</title>
    <!-- Menghubungkan dengan stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Tambah data anggota</h2>
        <!-- Form untuk menambah data anggota, action menuju proses.php dengan aksi tambah -->
        <form action="proses.php?aksi=tambah" method="post">
            <div class="form-group">
                <label for="nama">Nama : </label>
                <!-- Input untuk nama anggota -->
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis kelamin : </label>
                <!-- Input untuk jenis kelamin anggota (radio button) -->
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat : </label>
                <!-- Input untuk alamat anggota -->
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No telp : </label>
                <!-- Input untuk nomor telepon anggota -->
                <input type="text" class="form-control" name="no_telp" id="no_telp" required>
            </div>
            <!-- Tombol untuk menyimpan data -->
            <button type="submit" class="btn btn-primary">Simpan data</button>
        </form>
        <!-- Tombol untuk kembali ke halaman utama -->
        <a class="btn btn-secondary" href="index.php">Kembali</a>
    </div>
    <!-- Menghubungkan dengan jQuery, Popper.js, dan Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
