<!-- Fungsi Rekursif -->
<?php
//pembuatan code baru dengan fungsi rekursif :  fungsi yang memanggil dirinya sendiri
/*function tampilkanHaloDunia(){
    echo "Halo Dunia! <br>";
    tampilkanHaloDunia();
}
//cetak tulisan halo dunia
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