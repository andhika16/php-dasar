<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 3b</title>
</head>
<body>
<?php if(isset($_POST["submit"])) : ?>
    <h1> Selamat datang <?= $_POST["nama"]; ?> </h1>
<?php endif; ?>

<form action="" method="post">

    Masukan Nama : 
    <input type="text" name="nama" >
    <br>
    <button type="submit" name="submit"> Send! </button>

</form>


    
</body>
</html>