<!-- Date and Time -->
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h3> Date </h3>
    <?php
        // Menampilkan tanggal hari ini dengan format tahun/bulan/tanggal (misal: 2023/03/25)
        echo "Today is " .date("Y/m/d") ."<br>";

        // Menampilkan tanggal hari ini dengan format tahun.bulan.tanggal (misal: 2023.03.25)
        echo "Today is " .date("Y.m.d") ."<br>";

        // Menampilkan tanggal hari ini dengan format tahun-bulan-tanggal (misal: 2023-03-25)
        echo "Today is " .date("Y-m-d") ."<br>";

        // Menampilkan nama hari ini dalam bahasa Inggris (misal: Saturday)
        echo "Today is " .date("l") ;
    ?>
</body>
</html>
