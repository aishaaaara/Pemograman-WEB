<!-- Date and Time -->
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h3> Time </h3>
    <?php
        // Menetapkan zona waktu default menjadi "Asia/Jakarta"
        date_default_timezone_set("Asia/Jakarta");
        
        // Menampilkan waktu saat ini dalam format jam:menit:detik:AM/PM
        echo date ("h:i:sa");
    ?>
    
</body>
</html>