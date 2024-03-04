<!-- Praktikum Bagian 5 : Penggunaan Array Pada PHP -->
<?php
/* */
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: ". implode(',', $nilaiLulus);
echo "<br>";
/* */
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 5],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br>";
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 : " . implode(', ' , $karyawanPengalamanLimaTahun);

/* */
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ]
    ];

    $mataKuliah = 'Fisika';
    echo "<br>";
    echo "<br>";
    echo "Daftar Nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

    foreach($daftarNilai[$mataKuliah] as $nilai){
        echo "Nama: {$nilai[0]}, <br> Nilai:$nilai[1] <br>";
    }

/* Soal Cerita : Bantu guru ini mencetak daftar nilai siswa yang 
mencapai nilai di atas rata-rata kelas.*/




























?>