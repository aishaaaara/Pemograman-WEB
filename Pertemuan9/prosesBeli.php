<!-- Praktikum Bagian 7. Penerapan Cookies pada Fitur Keranjang Belanja -->
<?php
// Memeriksa apakah data "beliNovel" dan "beliBuku" telah dikirimkan melalui metode POST
if (isset($_POST['beliNovel']) && isset($_POST['beliBuku'])){
    // Mengatur cookies "beliNovel" dengan nilai yang dikirimkan melalui metode POST
    setcookie("beliNovel", $_POST["beliNovel"]);

    // Mengatur cookies "beliBuku" dengan nilai yang dikirimkan melalui metode POST
    setcookie("beliBuku", $_POST["beliBuku"]);

    // Mengarahkan pengguna ke halaman "keranjangBelanja.php"
    header("location: keranjangBelanja.php");
}
?>
