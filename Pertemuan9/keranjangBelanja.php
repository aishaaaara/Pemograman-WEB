<!-- Praktikum Bagian 7. Penerapan Cookies pada Fitur Keranjang Belanja -->
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php
    // Mengambil nilai cookies "beliNovel" dan "beliBuku"
    $beliNovel = $_COOKIE['beliNovel'];
    $beliBuku = $_COOKIE['beliBuku'];

    // Menampilkan jumlah novel yang dibeli
    echo "Jumlah Novel: " . $beliNovel . "<br>";

    // Menampilkan jumlah buku teks yang dibeli
    echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>
</html>
