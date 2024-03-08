<?php
    echo "<h1> Tugas Daftar Mahasiswa Array Multidimensi </h1>";
    $daftar = array(
        array( "profile" => "img/1.png", "Nama" => "Aisha Rahmadia", "Jurusan" => "Teknologi Informasi", "email" => "aisha8@gmail.com"),
        array( "profile" => "img/2.png", "Nama" => "Lee Dong wok", "Jurusan" => "Teknik Mesin", "email" => "wokDong66@gmail.com"),
        array("profile" => "img/3.png", "Nama" => "Kim Mingyu", "Jurusan" => "Teknik Sipil", "email" => "mingyugtg@gmail.com"),
        array( "profile" =>"img/4.png", "Nama" => "Han so Hee", "Jurusan" => "Administrasi Niaga", "email" => "akuhansohe@gmail.com"),
        array("profile" => "img/5.png", "Nama" => "Park Bogum", "Jurusan" => "Teknik Kimia", "email" => "parkbogum97@gmail.com")
    );
    ?>

    <ul>
        <?php foreach ($daftar as $data): ?>
            <li><img src="<?= $data["profile"] ?>" alt="Foto <?= $data["Nama"] ?>" width="90" height="80">
                <br></li>
            <li>Nama: <?= $data["Nama"] ?><br></li>
            <li>Jurusan: <?= $data["Jurusan"] ?><br></li>
            <li>Email: <?= $data["email"] ?><br></li>
                <br>

        <?php endforeach; ?>
</ul>
