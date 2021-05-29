<?php
    include_once("proizvod.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 2Napraviti stranicu proizvodi.php koja pomocu gornje funkcije pravi 3 proizvoda po zelji (birajte naziv i sliku), ali su dva proizvoda sa popustom i jedan bez. (ne mogu ciklusi, pozivate 3 puta funkciju) --> 
<?php
    opis_proizvoda("Kauc", "kauc.jpg", 150, 20 );
    opis_proizvoda("Sto", "sto.jpg", 400, mt_rand(30,50) );
    opis_proizvoda("Stolica", "stolica.jpg", 250, 0 );
?>
</body>
</html>