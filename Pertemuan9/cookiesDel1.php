<!-- Praktikum Bagian 6. Menghapus Nilai Cookies -->
<?php
// cookies diset dengan memiliki nilai kosong dan time dibuat - agar dianggap kadaluarsa
setcookie("user", "", time()-3600);
?>