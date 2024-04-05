<?php
// Definisi kelas Database
class Database {
    // Properti untuk informasi koneksi database
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "prakwebdb";
    public $conn; // Properti koneksi database

    // Konstruktor kelas Database
    public function __construct()
    {
        // Membuat objek koneksi menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah koneksi berhasil dibuat
        if ($this->conn->connect_error) {
            // Jika gagal, hentikan eksekusi dan tampilkan pesan kesalahan
            die("connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
