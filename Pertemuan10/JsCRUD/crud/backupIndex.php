<!-- Praktikum 1. CRUD Bagian Read -->
<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan file CSS -->
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">Tambah Anggota</a> <!-- Tombol untuk menambah anggota baru -->
        <?php
        // Menghubungkan ke database
        include('koneksi.php');

        // Mengambil data anggota dari database
        $query = "SELECT * FROM anggota order by id desc";
        $result = mysqli_query($koneksi, $query);

        // Memeriksa apakah ada data anggota yang ditemukan
        if (mysqli_num_rows($result) > 0) {
            $no = 1;
            echo "<table>"; // Memulai tabel untuk menampilkan data anggota
            echo "<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th><th>Alamat</th><th>No. Telp</th><th>Aksi</th></tr>"; // Baris header tabel
            while ($row = mysqli_fetch_array($result)) {
                $kelamin = ($row["jenis_kelamin"] === 'L') ? 'Laki-Laki' : 'Perempuan'; // Mengonversi jenis kelamin menjadi teks
                echo "<tr> <!-- Baris data anggota -->
                      <td>" . $no++ . "</td><td>" . $row["nama"] . "</td> <!-- Nomor urut dan nama anggota -->
                      <td>" . $kelamin . "</td><td>" . $row["alamat"] . "</td> <!-- Jenis kelamin dan alamat anggota -->
                      <td>" . $row["no_telp"] . "</td> <!-- Nomor telepon anggota -->
                      <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <!-- Tombol edit -->
                      <a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"" . $row["nama"] . "\")'>Hapus</a></td> <!-- Tombol hapus -->
                      </tr>";
            }
            echo "</table>"; // Mengakhiri tabel
        } else {
            echo "Tidak ada data."; // Pesan jika tidak ada data anggota
        }
        mysqli_close($koneksi); // Menutup koneksi ke database
        ?>
    </div>
    <script>
        // Fungsi untuk konfirmasi penghapusan data anggota
        function konfirmasiHapus(id, nama) {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama " + nama + "?"); // Konfirmasi melalui dialog
            if (konfirmasi) {
                window.location.href = "proses.php?aksi=hapus&id=" + id; // Redirect ke proses hapus
            }
        }
    </script>
</body>
</html>