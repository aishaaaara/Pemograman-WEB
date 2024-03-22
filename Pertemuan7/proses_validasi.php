<!-- Praktikum 7 : Validasi Form -->
<?php
// Memeriksa apakah formulir sudah disubmit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array(); // Array untuk menyimpan pesan kesalahan

    // Memastikan bahwa nama tidak kosong
    if (empty($nama)) {
        $errors[] = "Nama harus diisi";
    }

    // Memastikan bahwa email tidak kosong dan memiliki format yang benar
    if (empty($email)) {
        $errors[] = "Email harus diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }

    // Memastikan bahwa password tidak kosong dan memiliki panjang minimal 8 karakter
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter";
    }

    // Menampilkan pesan kesalahan jika ada
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Menampilkan data yang berhasil dikirim jika tidak ada kesalahan
        echo "Data berhasil dikirim:<br> Nama = $nama <br> Email = $email<br> Password = $password";
    }
}
?>
