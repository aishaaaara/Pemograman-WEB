<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <!-- Form untuk mengirim data dengan metode POST ke halaman yang sama -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
<?php
// Dilakukannya pemeriksaan apakah permintaan yang dikirim adalah metode POST
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_REQUEST['fname']; // Mengambil nilai input dengan nama 'fname' dari formulir
    if (empty($name)){  // Memeriksa apakah input nama kosong
        echo "Name is empty";
    }else{
        echo $name;
    }
    } 
?>
</body>
</html>