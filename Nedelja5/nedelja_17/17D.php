<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta) -->

    <?php
        function paragraf(){
            $ime = "Zorana";
            $prezime = "Djakovic";
            echo "<p><span>$ime<span> $prezime</span></span></p>";
            echo strlen($ime) + strlen($prezime);
            

        }
        paragraf();
        for($i=0; $i<=14; $i++){
            echo paragraf();
        }

    ?>
</body>
</html>