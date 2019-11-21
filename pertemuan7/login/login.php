<?php


//  cek apakah tombol submit sudah di tekan
if(isset($_POST["submit"])){
// cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123"  ){

        header("Location: admin.php");
        exit;

    }else{

        $error = true;

    }



}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    

<ul>
    <form action="admin.php" method="post">
        <li> 
            <label for="username"> Username :</label> 
            <input type="text" name="nama" id="username">
        </li>
        <li>
            <label for="password"> Password : </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
          <button type="submit" name="submit"> KIRIM YA ZHEYENG </button>
        
        </li>

    </form>
</ul>



</body>
</html>