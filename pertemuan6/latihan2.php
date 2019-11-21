<?php 


$Player = [
    [
        "Nama" => "Neymar JR",
        "Nama club" => "Paris Saint German",
        "No.punggung" => "082828268088",
        "Gaji" => "$.1000.000",
        "Kewarganegaraan" => "Inggris"
    ],
    [
        "Nama" => "Mohammad Salah",
        "Nama club"=> "Liverpoll FC",
        "No.punggung" => "082821344244",
        "Gaji" => "$.1200.000",
        "Kewarganegaraan" => "Inggris"
        

    ],
    [
        "Nama" => "Lionel Messi",
        "Nama club"=> "Barcelona FC",
        "No.punggung" => "082821344244",
        "Gaji" => "$.1200.000",
        "Kewarganegaraan" => "Inggris"
    ],
    [
        "Nama" => "H.Kane",
        "Nama club"=> "Totenham Hotspur",
        "No.punggung" => "10",
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
    <title>Pertemuan 6 latihan 2</title>
</head>
<body>



<?php foreach ( $Player as $p  ) : ?>
    <ul>
        <li>Nama : <?=$p["Nama"];?></li>
        <li>Nama club : <?=$p["Nama club"];?> </li>
        <li>No.Punggung : <?=$p["No.punggung"];?> </li>
        <li>Gaji : <?=$p["Gaji"];?> </li>
        <li>Kewarganegaraan : <?=$p["Kewarganegaraan"];?> </li>

    </ul>
<?php endforeach; ?>










    
</body>
</html>