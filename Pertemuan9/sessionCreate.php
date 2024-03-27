<!-- Praktikum Bagian 8. Membuat Session -->
<?php
    // Memulai session
    session_start();
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <?php
        // Mengatur nilai dari dua variabel sesi
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";

        // Menampilkan pesan bahwa variabel sesi telah diatur
        echo "Session variables are set.";
    ?>
</body>
</html>
