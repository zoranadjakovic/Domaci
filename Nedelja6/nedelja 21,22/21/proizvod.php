
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .proizvod{
        width:200px;
        display: inline-block;
    }
    img{
        width: 200px;
        height: 200px;
    }
    .crveno{
        color: red;
    }
    .zeleno{
        color: green;
    }
    </style>
</head>
<body>
<!-- 1Napraviti fajl proizvod.php koji sadrzi samo jednu funkciju koja za dato ime proizvoda, sliku, cenu i popust pravi div  (echo 😊) za prikaz svih podataka.
Div za proizvod ce biti sirine 200px, display inline-block ili float left, a sadrzi sliku (dimenzije 200x200), ispod toga naziv, ispod toga cena.
Ako je popust veci od 0, cena je obojena crveno, a prikazana je i cena sa popustom u zelenoj boji.
Ako je popust 0, prikazana je samo prava cena.
CSS nemojte inline, ali moze style u istom fajlu ako vam je lakse. -->
<?php
    function opis_proizvoda($ime, $slika, $cena, $popust){
        echo "<div><img src='$slika'>";
        echo "<br/>";
        echo "<span class='proizvod'>$ime</span>";

        if($popust > 0){
            $sa_popustom = $cena - $popust;
            echo "<p class='crveno'>$cena</p>";
            echo "<p class='zeleno'>$sa_popustom</p>";
        }
        else {
            echo "<p>$cena</p>";
        }
        echo "</div>";
    }

    opis_proizvoda("Namestaj", "kauc.jpg", 200, 30);

?>
    
</body>
</html>