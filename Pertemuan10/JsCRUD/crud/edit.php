<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit data anggota</title>
    <!-- Memasukkan stylesheet Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    // Memasukkan file koneksi.php
    include('koneksi.php');
    // Mendapatkan ID anggota dari parameter URL
    $id = $_GET['id'];
    // Membuat query untuk mengambil data anggota berdasarkan ID
    $query = "SELECT * FROM anggota WHERE id = $id";
    // Menjalankan query
    $result = mysqli_query($koneksi, $query);
    // Mendapatkan satu baris hasil query sebagai asosiatif array
    $row = mysqli_fetch_assoc($result);
    // Menutup koneksi database
    mysqli_close($koneksi);
    ?>
    <div class="container mt-4">
        <h2>Edit data anggota</h2>
        <!-- Form untuk mengubah data anggota -->
        <form action="proses.php?aksi=ubah" method="post">
            <!-- Input hidden untuk menyimpan ID anggota -->
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama : </label>
                <!-- Input untuk nama anggota -->
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis kelamin : </label>
                <div class="form-check">
                    <!-- Radio button untuk jenis kelamin laki-laki -->
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if ($row['jenis_kelamin'] === 'L')
                        echo 'checked'; ?> required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <!-- Radio button untuk jenis kelamin perempuan -->
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if ($row['jenis_kelamin'] === 'P')
                        echo 'checked'; ?> required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat : </label>
                <!-- Input untuk alamat anggota -->
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="no_telp">No telp : </label>
                <!-- Input untuk nomor telepon anggota -->
                <input type="text" class="form-control" name="no_telp" id="no_telp"
                    value="<?php echo $row['no_telp']; ?>" required>
            </div>
            <!-- Tombol untuk menyimpan perubahan -->
            <button type="submit" class="btn btn-primary">Simpan perubahan</button>
        </form>
        <!-- Tombol untuk kembali ke halaman utama -->
        <a class="btn btn-secondary mt-2" href=index.php>Kembali</a>
    </div>
    <!-- Memasukkan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Memasukkan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Memasukkan Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
