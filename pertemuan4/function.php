<?php
function salam($salam="assalamualaikum",$nama="Admin"){

    return "$salam,$nama";

}


function penutup($tutup="terimakasih", $nama="admin"){

    return " $tutup,$nama";

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1><?= salam(); ?></h1>


    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo commodi in corporis recusandae. Quibusdam cupiditate molestias ab impedit, accusamus aut quidem architecto in obcaecati saepe pariatur dolorum odit facere eos?</p>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum magnam illum ipsam voluptas laudantium molestiae nam repellat debitis necessitatibus perferendis eligendi recusandae ut accusantium corporis nisi a, quod repudiandae ea fugit suscipit sed, distinctio placeat commodi culpa! In accusantium consequuntur id possimus eum repellat fugiat quod est dolor placeat excepturi autem perferendis, molestiae quibusdam? Nemo repellendus quos deleniti ut vero, illo quisquam deserunt incidunt tempora cupiditate porro quaerat impedit. Consequuntur veritatis ab totam ea recusandae facere fuga consectetur perferendis quis! Vel tempore voluptatibus adipisci eum, pariatur quibusdam harum, impedit aut placeat sed fuga quo est architecto ex ullam labore. Vero?</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam dicta, similique quae ducimus quidem architecto quam. Nisi temporibus, consectetur, iure labore possimus omnis vel quidem ipsum quisquam similique illo delectus neque iste dicta, earum dolorum voluptatibus ea tenetur consequatur dolorem ut voluptate. Minima, totam fugiat reprehenderit deleniti molestias odit officia.</p>



    <h1><?= penutup(); ?></h1>





    
</body>
</html>