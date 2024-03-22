<!-- Praktikum Bagian 3 : Form Input PHP -->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){ //code untuk memeriksa apakah form yang diakses menggunakan metdhod post
    //mengambil nilai dari inputan nama dan email
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    //menampilkan nilai pada var nama dan email
    echo "Nama : ". $nama. "<br>";
    echo "Email : ". $email;
}
?>