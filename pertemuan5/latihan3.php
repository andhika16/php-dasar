<?php
$mahasiswa = [
    ["muhammad andhika zulkifli","343535","teknik informatika","moh.andhika16@gmail.com"],
    ["jhonny deep","349328950","pendidikan agama islam","iyan.hk15@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>asem buntung</title>
</head>
<body>


<h1> Data Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>


    
</body>
</html>