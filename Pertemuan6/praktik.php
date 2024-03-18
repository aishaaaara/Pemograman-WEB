<!-- Code membalik string dengan strrev -->
<?php
//code untuk Membalik String  menggunakan perintah strrev().
$pesan = "Saya arek malang";
#ubah veriabel pesan menjadi array dgn perintah explode
$pesanPerKata = explode(" ", $pesan);
#ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
#gabungkan kembali array menjadi string
$pesan = implode("", $pesanPerKata);

echo $pesan. "<br>";
?>