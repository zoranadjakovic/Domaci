<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border: 1px solid black;
    }
    td{
        height: 30px;
        width: 30px;
        border:1px solid black;
        
    }
    .crno_polje{
        background: black;
    }
    </style>

</head>
<body>
<!-- Dat je slucajan broj od 1 do 64.
// Napraviti tabelu 8x8. Sirina i visina svake celije je 30px i imaju border 1px. 
// Celiji sa datim brojem postaviti crnu pozadinu. (preko klase ili inline style). 
// Npr ako je broj 11, onda je celija u drugom redu i 3.koloni obojena crno. -->
<?php

$broj = mt_rand(1,64);
echo $broj;
echo "<table class='tab'>";
    for($i=0; $i<=7; $i++){
        echo "<tr>";
        for($j = 1; $j<=8; $j++){
            if($broj == ($i*8+$j)){
            echo "<td class='crno_polje'> $broj </td>";
        }
        else{
            echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>