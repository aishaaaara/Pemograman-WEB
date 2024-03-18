<!-- Fungsi -->
<?php
//pembuatan kode baru yang menggunakan fungsi untuk menampilkan kalimat
/*function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalan, nama saya Elok<br/>"; 
    echo "Senang berjenalan dengan Anda <br/>";
}
perkenalan();
perkenalan();*/

//pembuatan code baru dengan menggunakan fungsi atau method berparamater
/*function perkenalan($nama, $salam){
    echo $salam.",";
    echo "Perkenalan, nama saya ".$nama."<br/>"; 
    echo "Senang berjenalan dengan Anda <br/>";
}
//pemanggilan fungsi 
perkenalan("Hamdana", "hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya,$ucapanSalam);*/

//pembuatan code baru menggunakan fungsi Parameter dengan Nilai Default
/*function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//Cara memanggil function yang telah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

//Memanggil function kembali
perkenalan($saya);*/

//pembuatan code baru dengan Fungsi yang Mengembalikan Nilai
/*function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2003, 2023) ." tahun"*/

//pembuatan code baru dengan Memangil Funsi di dalam fungsi
/*function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2003,2023) ." tahun </br>";
    echo "Senang berkenalan dengan anda </br>";
} perkenalan("Elok")*/

//pembuatan code baru dengan fungsi rekursif :  fungsi yang memanggil dirinya sendiri
/*function tampilkanHaloDunia(){
    echo "halo Dunia! <br>";
    tampilkanHaloDunia();
}
tampilkanHaloDunia();*/

//pembuatan code baru dengan fungsi rekursif dengan menggunaka perulangan for untuk menampilkan angka 1 - 25
/*for ($i=1; $i <=25; $i++){
    echo "Perulangan ke= {$i} <br>";
}

//pembuatan code baru dengan fungsi rekursif dengan menggunaka perulangan for di penerapan yg lain
function tampilkanAngka (int $jumlah, int $indeks = 1){
    echo "Perulangan ke= {$indeks} <br>";

    //prmanggilan diri sendiri selama indeks <= jumlah
    if($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks + 1);
    }
}*/

//pembuatan code baru penerapan array terindeks dan array assosiatif multidimensi
/*$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);*/

    ?>