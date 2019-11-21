<?php 


$angka = [10,20,54,73,56,45,42,5,67,90,98];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan</title>


    <style>
    
    .kotak{

        width : 50px;
        height : 50px;
        background-color : salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float : right;



    }

    .clear{ clear:both }
    
    
    
    </style>





</head>
<body>

<!-- tata cara menampilkan array dengan looping -->
<!-- cara pertama/cara manuanl -->
<?php for($i=0; $i < count($angka); $i++) { ?>
<div class="kotak"><?php echo $angka[$i]; ?> </div>
<?php } ?>

<div class="clear"></div>

<!-- cara kedua -->
<?php foreach( $angka as $a ) {?>
<div class="kotak"><?php echo $a; ?></div>
<?php }?>

<div class="clear"></div>

<!-- cara ketiga -->
<?php foreach ( $angka as $a) : ?>
<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>


</body>
</html>