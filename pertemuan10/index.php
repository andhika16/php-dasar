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

    <br>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    
    <br>
    <br>


    
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th>NRP</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Gambar</th>
</tr>

<?php $i = 1;  ?>
    <?php foreach($mhs as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin akan di hapus');">hapus</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["email"] ;?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    
    
    </table>




</body>
</html>