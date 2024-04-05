<?php
// Memasukkan file database.php yang mungkin berisi konfigurasi koneksi database
require_once 'database.php';

// Definisi kelas Crud
class Crud
{
    private $db; // Properti untuk menyimpan objek koneksi database

    // Konstruktor kelas
    public function __construct()
    {
        $this->db = new Database(); // Membuat objek koneksi database
    }

    // Method untuk membuat data baru
    public function create($jabatan, $keterangan) {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $result = $this->db->conn->query($query);
        return $result;
    }

    // Method untuk membaca semua data
    public function read() {
        $query = "SELECT * FROM jabatan";
        $result = $this->db->conn->query($query);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    // Method untuk membaca data berdasarkan ID
    public function readById($id) {
        $query = "SELECT * FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        }
        else {
            return null;
        }
    }

    // Method untuk memperbarui data
    public function update($id, $jabatan, $keterangan) {
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = $id";
        $result = $this->db->conn->query($query);

        return $result;
    }

    // Method untuk menghapus data berdasarkan ID
    public function delete($id) {
        $query = "DELETE FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
    }
}
?>
