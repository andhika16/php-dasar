<?php

require "functions.php";

$mhs = query("SELECT * FROM mahasiswa");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman admin</title>

</head>
<body>
    


    <table border="1" cellpadding="10" cellspacing="0">
    
    <h1> Daftar Mahasiswa</h1>
    
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>

<?php $i = 1;  ?>
    <?php foreach($mhs as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
            <td><?= $row["nrp"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    
    
    </table>




</body>
</html>