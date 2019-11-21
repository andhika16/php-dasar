<?php

require "functions.php";

// koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","phpdasar");


// cek apakah tombol sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    

    // cek apakah data berhasil ditambahkan atau tidak

    if( tambah($_POST) > 0  ){

        echo "      
           <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";


    } else {

        echo "       
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }





}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>






    <h1> Tambah Data Mahasiswa </h1>


    <form action="" method="post">

        <ul>
           
            <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required>
            </li>
            <li>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp">
            </li>
            <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="jurusan">jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit"> Tambah Data !</button>
     
        </ul>

    </form>


            <a href="index.php">Kembali ke halaman sebelumnya</a>






    
</body>
</html>