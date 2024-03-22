<!-- Praktikum 2. Function empty -->
<?php
$myArray = array();

// Menggunakan empty() untuk memeriksa apakah $myArray tidak terdefinisi atau kosong.
if(empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
}else{
    echo "Array terdefinisi dan tidak kosong";
}

echo "<br>";

// Memeriksa variabel $nonExistentVar menggunakan empty().
if (empty($nonExistentVar)){
    echo "Variabel tidak terdefinisi atau kosong.";

}else{
    echo "Variabel terdefinisi dan tidak kosong.";
}

//Penggunaan empty() berguna untuk memeriksa apakah sebuah variabel tidak terdefinisi atau memiliki nilai kosong (NULL, "", 0, atau array kosong)
?>