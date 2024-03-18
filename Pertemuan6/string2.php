<!-- String 2 -->
<?php
//Code untuk menangani escape string
echo "Baris\nbaru <br>"; //10.a
echo 'Baris\nbaru <br>'; //10.b
echo "Baris\rDunia <br>"; //10.c
echo 'Baris\rDunia <br>'; //10.d

echo "<pre>Halo\tDunia!<pre>"; //10.e
echo '<pre>Halo\tDunia!<pre>'; //10.f

echo "Katakanlah \"Tidak pada narkoba!\" <br>"; //10.g
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; //10.H

// - 10.a: Hasilnya adalah "Baris\nbaru" dengan baris baru diinterpretasikan secara literal karena menggunakan tanda petik dua.
// - 10.b: Hasilnya adalah "Baris\nbaru <br>" dengan `\n` diinterpretasikan sebagai teks karena menggunakan tanda petik satu.
// - 10.c: Hasilnya adalah "Dunia baru" karena `\r` menggeser kursor ke awal baris, sehingga kata "Dunia" menimpa kata "Baris".
// - 10.d: Hasilnya adalah "Baris Dunia <br>" dengan kata "Dunia" menimpa kata "Baris" karena penggunaan tanda petik satu.
// - 10.e: Hasilnya adalah "Halo   Dunia!" dengan `\t` diinterpretasikan sebagai karakter tab karena menggunakan tanda petik dua.
// - 10.f: Hasilnya adalah "<pre>Halo\tDunia!<pre>" dengan `\t` diinterpretasikan sebagai teks karena menggunakan tanda petik satu.
// - 10.g: Hasilnya adalah "Katakanlah "Tidak pada narkoba!" <br>" dengan penggunaan tanda petik ganda yang melindungi tanda petik dalam string.
// - 10.h: Hasilnya adalah "Katakanlah 'Tidak pada narkoba!' <br>" dengan penggunaan tanda petik tunggal yang melindungi tanda petik dalam string.
?>