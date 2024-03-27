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
        // Menampilkan nilai dari session "favcolor" dan "favanimal"
        echo "Favorite color is " . $_SESSION["favcolor"] . "<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>
</body>
</html>
