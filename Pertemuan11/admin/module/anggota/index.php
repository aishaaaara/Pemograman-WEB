<!DOCTYPE html>
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        // Memasukkan file menu.php
        require 'admin/template/menu.php';
        ?>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Judul halaman -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Anggota</h1>
            </div>

            <!-- Tombol untuk menambahkan anggota -->
            <div class="row">
                <div class="col-lg-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa fa-plus"></i> Tambah Anggota
                    </button>
                </div>
            </div>

            <?php
            // Memeriksa apakah terdapat pesan flash data
            if (isset($_SESSION['_flashdata'])) {
                echo "<br>";
                foreach ($_SESSION['_flashdata'] as $key => $val) {
                    // Menampilkan pesan flash data
                    echo get_flashdata($key);
                }
            }
            ?>

            <!-- Tabel untuk menampilkan daftar anggota -->
            <div class="table-responsive small">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Username</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Menampilkan daftar anggota dari database
                        $no = 1;
                        $query = "SELECT * FROM anggota a, jabatan j, user u WHERE a.jabatan_id=j.id AND a.user_id= u.id order by a.id desc";
                        $result = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['jabatan']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td>
                                    <!-- Tombol untuk mengedit dan menghapus anggota -->
                                    <a href="index.php?page=anggota/edit&id=<?php echo $row['user_id']; ?>" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </a>
                                    <a href="fungsi/hapus.php?anggota=hapus&id=<?php echo $row['user_id']; ?>" onclick="javascript:return confirm('Hapus Data Jabatan ?');" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal untuk menambahkan anggota baru -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Anggota</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="fungsi/tambah.php?anggota=tambah" method="POST">
                            <div class="modal-body">
                                <!-- Form untuk menambahkan anggota -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                    <input type="text" name="nama" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jabatan:</label>
                                    <!-- Select untuk memilih jabatan -->
                                    <select class="form-select" name="jabatan" aria-label="Default select example">
                                        <option selected>Pilih Jabatan</option>
                                        <?php
                                        // Menampilkan opsi jabatan dari database
                                        $query2 = "SELECT * FROM jabatan order by jabatan asc";
                                        $result = mysqli_query($koneksi, $query2);
                                        while ($row2 = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?= $row2['id']; ?>"><?= $row2['jabatan']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label>
                                    <!-- Radio button untuk memilih jenis kelamin -->
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
                                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Alamat:</label>
                                    <!-- Textarea untuk alamat anggota -->
                                    <textarea class="form-control" name="alamat" id="message-text"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">No Telepon:</label>
                                    <!-- Input untuk nomor telepon anggota -->
                                    <input type="number" name="no_telp" class="form-control" id="recipient-name">
                                </div>
                                <!-- Bagian untuk data login anggota -->
                                <hr class="border border-primary border-3 opacity-75">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username:</label>
                                    <!-- Input untuk username -->
                                    <input type="text" name="username" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for "recipient-name" class="col-form-label">Password:</label>
                                    <!-- Input untuk password -->
                                    <input type="password" name="password" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Level:</label>
                                    <!-- Select untuk memilih level -->
                                    <select class="form-select" name="level" aria-label="Default select example">
                                        <option selected>Pilih Level</option>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- Tombol untuk menutup modal dan menyimpan data -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="fa fa-times" aria-hidden="true"></i> Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
