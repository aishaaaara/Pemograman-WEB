<!-- Praktikum 4 : HTML Injection -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <h2>Form Input Data Diri</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Pengecekan apakah formulir sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memeriksa apakah input email yang dimasukkan adalah email yang valid
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Nama: " . $nama . "<br>";
            echo "Email yang dimasukkan adalah email yang valid.";
        } else {
            // Tangani input yang tidak valid
            echo "Input yang dimasukkan bukan merupakan email yang valid.";
        }
    }
    ?>
</body>
</html>
