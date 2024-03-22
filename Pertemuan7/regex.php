<!-- Praktikum 5 : Penggunaan Regex Pada PHP :Regex adalah alat yang kuat untuk mencari, mencocokkan, atau memanipulasi teks berdasarkan pola tertentu. -->
<?php
// Contoh 1: Mencari huruf kecil dalam sebuah teks
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if(preg_match($pattern,$text)){ //mengembalikan hasil pencocokan ke dalam array $matches
    echo "huruf kecil ditemukan !";
}else{
    echo "tidak ada huruf kecil !";
}

echo "<br>";
echo "<hr>";

// Contoh 2: Mencocokkan angka dalam sebuah teks
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';

if(preg_match($pattern,$text,$matches)){ //mengembalikan hasil pencocokan ke dalam array $matches
    echo "cocokan : ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

echo "<br>";
echo "<hr>";

// Contoh 3: Mengganti kata 'apple' dengan 'banana' dalam sebuah teks
$pattern = '/apple/';
$replacement = 'banana';
$text = 'i like apple pie.';
$new_text = preg_replace($pattern,$replacement,$text); //mencari dan mengganti pola regex dalam string.
echo $new_text;

echo "<br>";
echo "<hr>";

// Contoh 4: Mencocokkan pola 'go{2,3}d' dalam sebuah teks
$pattern = '/go{2,3}d/'; //cocokan god, good, gooooood - mencocokkan string dengan 'g', diikuti oleh 2 atau 3 huruf 'o', dan diakhiri dengan huruf 'd'.
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "cocokan : ".$matches[0];
}else{
    echo "tidak ada yang cocok!";
}

?>