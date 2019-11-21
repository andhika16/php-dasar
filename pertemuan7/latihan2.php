<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["Nama"])){

    // redirect

    header("Location: latihan1.php");
    exit;

}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pemain</title>
</head>
<body>

<ul>

    <li><?= $_GET["Nama"];  ?></li>
    <li><?= $_GET["club"];  ?></li>
    <li><?= $_GET["Gaji"];  ?></li>
    <li><?= $_GET["Kewarganegaraan"];  ?></li>


</ul>

<a href="latihan1.php">Kembali ke halaman sebelumnya</a>
    
</body>
</html>