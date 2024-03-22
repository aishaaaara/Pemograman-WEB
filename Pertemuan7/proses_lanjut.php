<!-- Praktikum 6 : Form Lanjut -->

<?php
// Memeriksa apakah formulir sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai yang dipilih dari formulir
    $selectedBuah = $_POST['buah']; // Mengambil nilai buah yang dipilih
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna']; // Mengambil nilai warna yang dipilih
    } else {
        $selectedWarna = []; // Menangani jika tidak ada warna yang dipilih
    }
    $selectedJenisKelamin = $_POST['jenis_kelamin']; // Mengambil nilai jenis kelamin yang dipilih

    // Menampilkan hasil pemilihan
    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>"; // Menampilkan warna favorit yang dipilih
    } else {
        echo "Anda tidak memilih warna favorit.<br>"; // Menampilkan jika tidak ada warna yang dipilih
    }
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin; // Menampilkan jenis kelamin yang dipilih
}
?>
