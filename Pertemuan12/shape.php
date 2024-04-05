<?php
/*
interface Shape
{
    // Metode untuk menghitung luas bentuk
    public function calculateArea();
}

// Implementasi kelas Circle yang mengimplementasikan interface Shape
class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Metode untuk menghitung luas lingkaran
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Implementasi kelas Rectangle yang mengimplementasikan interface Shape
class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Metode untuk menghitung luas persegi panjang
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Fungsi untuk mencetak luas bentuk yang diimplementasikan oleh interface Shape
function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

// Membuat objek Circle dan Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Memanggil fungsi printArea() dengan objek Circle dan Rectangle sebagai argumen
printArea($circle);
printArea($rectangle);
*/

//modif2
abstract class Shape {
    // Metode abstrak untuk menghitung luas bentuk
    abstract public function calculateArea();
}

// Implementasi kelas Circle yang merupakan turunan dari kelas abstrak Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementasi metode calculateArea() untuk menghitung luas lingkaran
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Implementasi kelas Rectangle yang merupakan turunan dari kelas abstrak Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementasi metode calculateArea() untuk menghitung luas persegi panjang
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Membuat objek Circle dan Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Menampilkan luas lingkaran dan persegi panjang
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

?>