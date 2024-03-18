<!-- Praktikum Bagian 2. Associative Array -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styleArray2.css">
</head>
<body>
    <?php
    // Mendefinisikan sebuah array asosiatif dengan nama $Dosen yang berisi informasi tentang seorang dosen
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    // Mencetak informasi nama dosen dengan menggunakan indeks 'nama', 'domisili, 'jenis_kel' dari array list Dosen
    echo "<table>";
    echo "<tr><th>Informasi Dosen</th><th>Data</th></tr>";
    foreach ($Dosen as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
?>
</body>
</html>