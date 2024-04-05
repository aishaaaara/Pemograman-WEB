<?php
/*class Car {
    public $brand; // Property untuk merepresentasikan merek mobil
    
    public function startEngine() {
        echo "Engine Started"; // Metode untuk memulai mesin mobil
    }
}

$car1 = new Car(); // Membuat objek pertama dari kelas Car
$car1->brand = "Toyota"; // Menetapkan merek mobil untuk objek pertama

$car2 = new Car(); // Membuat objek kedua dari kelas Car
$car2->brand = "Honda"; // Menetapkan merek mobil untuk objek kedua

$car1->startEngine(); // Memanggil metode startEngine() dari objek pertama
echo $car2->brand; // Menampilkan merek mobil dari objek kedua*/

//modif2
/*class Car
{
    private $model; // Properti untuk merepresentasikan model mobil
    private $color; // Properti untuk merepresentasikan warna mobil

    // Konstruktor untuk menginisialisasi model dan warna mobil
    public function __construct($model, $color)
    {
        $this->model = $model; // Inisialisasi properti $model dengan nilai dari parameter konstruktor
        $this->color = $color; // Inisialisasi properti $color dengan nilai dari parameter konstruktor
    }

    // Metode untuk mendapatkan model mobil
    public function getModel()
    {
        return $this->model; // Mengembalikan nilai properti $model
    }

    // Metode untuk mendapatkan warna mobil
    public function getColor()
    {
        return $this->color; // Mengembalikan nilai properti $color
    }

    // Metode untuk mengubah warna mobil
    public function setColor($color)
    {
        $this->color = $color; // Mengubah nilai properti $color dengan nilai baru
    }
}

// Membuat objek dari kelas Car dengan model "Toyota" dan warna "Blue"
$car = new Car("Toyota", "Blue");

// Menampilkan model mobil menggunakan metode getModel()
echo "Model: " . $car->getModel() . "<br>";

// Menampilkan warna mobil menggunakan metode getColor()
echo "Color: " . $car->getColor() . "<br>";

// Mengubah warna mobil menjadi "Red" menggunakan metode setColor()
$car->setColor("Red");

// Menampilkan warna mobil yang telah diperbarui
echo "Updated Color: " . $car->getColor() . "<br>";*/

//modif3
class Car {
    private $brand; // Properti privat untuk merepresentasikan merek mobil

    // Konstruktor untuk menginisialisasi merek mobil
    public function __construct($brand)
    {
        $this->brand = $brand; // Inisialisasi properti $brand dengan nilai dari parameter konstruktor
    }

    // Metode untuk mendapatkan merek mobil
    public function getBrand()
    {
        return $this->brand; // Mengembalikan nilai properti $brand
    }

    // Metode khusus yang dipanggil ketika objek dihancurkan
    public function __destruct() {
        echo "The car is destroyed. <br>"; // Menampilkan pesan ketika objek dihancurkan
    }
}

// Membuat objek dari kelas Car dengan merek "Toyota"
$car = new Car("Toyota");
// Menampilkan merek mobil menggunakan metode getBrand()
echo "Brand: " . $car->getBrand() . "<br>";

?>
