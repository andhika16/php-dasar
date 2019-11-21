<?php

$Player = [
    [
        "Nama" => "Neymar JR",
        "club" => "Paris Saint German",
        "No.punggung" => "082828268088",
        "Gaji" => "$.1000.000",
        "Kewarganegaraan" => "Inggris"
    ],
    [
        "Nama" => "Mohammad Salah",
        "club"=> "Liverpoll FC",
        "No.punggung" => "082821344244",
        "Gaji" => "$.1200.000",
        "Kewarganegaraan" => "Inggris"
        

    ]

]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    


<h1>Daftar Mahasiswa</h1>




<ul>
    <?php foreach ( $Player as $ply ) : ?>
         <li>
            <a href="latihan2.php?Nama=<?= $ply["Nama"]; ?>&club=<?= $ply["club"]; ?>&Gaji=<?= $ply["Gaji"]; ?>&Kewarganegaraan=<?= $ply["Kewarganegaraan"]; ?> ">
            <?= $ply["Nama"]; ?>
            </a>
         </li>      
    <?php endforeach; ?>
</ul>





















</body>
</html>
