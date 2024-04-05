<?php
/*class Animal {
    protected $name; // Properti untuk menyimpan nama hewan

    // Konstruktor untuk menginisialisasi nama hewan
    public function __construct($name)  
    {
        $this->name = $name; // Inisialisasi properti $name dengan nilai dari parameter konstruktor
    }

    // Metode untuk menampilkan pesan bahwa hewan sedang makan
    public function eat() {
        echo $this->name . " is eating.<br>"; // Menampilkan pesan bahwa hewan sedang makan
    }

    // Metode untuk menampilkan pesan bahwa hewan sedang tidur
    public function sleep()
    {
        echo $this->name . " is sleeping.<br>"; // Menampilkan pesan bahwa hewan sedang tidur
    }
}

// Definisi kelas Cat yang merupakan turunan dari kelas Animal
class Cat extends Animal {
    // Metode untuk menampilkan pesan suara "meow" dari kucing
    public function meow() {
        echo $this->name . " says meow!<br>"; // Menampilkan pesan suara "meow" dari kucing
    }
}

// Definisi kelas Dog yang merupakan turunan dari kelas Animal
class Dog extends Animal {
    // Metode untuk menampilkan pesan suara "woof" dari anjing
    public function bark() {
        echo $this->name . " says woof!<br>"; // Menampilkan pesan suara "woof" dari anjing
    }
}

// Instantiasi objek dari kelas Cat dengan nama "Whiskers"
$cat = new Cat("Whiskers");
// Instantiasi objek dari kelas Dog dengan nama "Buddy"
$dog = new Dog("Buddy");

// Memanggil metode eat() dari objek $cat untuk menampilkan bahwa kucing sedang makan
$cat->eat();
// Memanggil metode sleep() dari objek $dog untuk menampilkan bahwa anjing sedang tidur
$dog->sleep();

// Memanggil metode meow() dari objek $cat untuk menampilkan suara "meow" dari kucing
$cat->meow();
// Memanggil metode bark() dari objek $dog untuk menampilkan suara "woof" dari anjing
$dog->bark();*/

//modif2
class Animal {
    // Properti publik, dilindungi, dan pribadi
    public $name; // Properti publik
    protected $age; // Properti dilindungi
    private $color; // Properti pribadi

    // Konstruktor untuk menginisialisasi properti
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    // Metode untuk mendapatkan nama hewan
    public function getName()
    {
        return $this->name;
    }

    // Metode untuk mendapatkan usia hewan
    public function getAge()
    {
        return $this->age;
    }

    // Metode untuk mendapatkan warna hewan
    public function getColor()
    {
        return $this->color;
    }
}

// Membuat objek dari kelas Animal
$animal = new Animal("Dog", 3, "Brown");

// Menampilkan informasi hewan
echo "Name: " . $animal->name . "<br>"; // Properti publik dapat diakses langsung
echo "Age: " . $animal->getAge() . "<br>"; // Properti dilindungi hanya dapat diakses melalui metode
echo "Color: " . $animal->getColor() . "<br>"; // Properti pribadi tidak dapat diakses langsung


?>