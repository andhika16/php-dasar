<?php

require "functions.php";

// ambil data di url 

$id = $_GET["id"];

//  query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","phpdasar");


// cek apakah tombol sudah ditekan atau belum
if( isset($_POST["submit"]) ){
    

    // cek apakah data berhasil diubah atau tidak

    if( ubah($_POST) > 0  ){

        echo "      
           <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";


    } else {

        echo "       
        <script>
            alert('data gagal diubah!');
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
    <title>Ubah Data Mahasiswa</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>






    <h1> Ubah Data Mahasiswa </h1>

<div class="wrapper">
    <form action="" method="post" >

        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        
        <div class="contact-form">
            
            <div class="input-fields">

            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" required
            value="<?= $mhs["nama"]; ?>">
            
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp"
            value="<?= $mhs["nrp"]; ?>" >
            
            
            <label for="email">Email : </label>
            <input type="text" name="email" id="email"
            value="<?= $mhs["email"]; ?>" >
            
            
            <label for="jurusan">jurusan : </label>
            <input type="text" name="jurusan" id="jurusan"
            value="<?= $mhs["jurusan"]; ?>">
            
            
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar"
            value="<?= $mhs["gambar"]; ?>">
            
            <button type="submit" name="submit"> Ubah Data !</button>

            
            </div>
            

        </div>
     
        

    </form>

    </div>


            <a href="index.php">Kembali ke halaman sebelumnya</a>






    
</body>
</html>