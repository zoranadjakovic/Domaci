<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .tabela{
        border: 1px solid black;
    }
    .tab{
        border: 1px solid black;
          
    }
    .taba{
        border: 1px solid black;
        width: 30px;
        height: 30px;
        color:black;
         
    }
    {
  background-color: black;
}
    

    </style>
</head>
<body>
    
<!-- Napravitabelu 3x4 u kojoj pise:  -->
<?php

echo "<table class='tabela'>";
    for($i=2; $i<=6; $i+2){
        
        echo "<tr>";
        for($j = 3; $j<=12; $j+3){
            echo "<td class='tabela'>".($i - $j)."</td>";
            
        }
        echo "</tr>";
    }
    echo "</table>";


// <!-- Dat je slucajan broj od 1 do 64.
// Napraviti tabelu 8x8. Sirina i visina svake celije je 30px i imaju border 1px. 
// Celiji sa datim brojem postaviti crnu pozadinu. (preko klase ili inline style). 
// Npr ako je broj 11, onda je celija u drugom redu i 3.koloni obojena crno. -->

$broj = mt_rand(1,64);
echo $broj;
echo "<table class='tab'>";
    for($i=1; $i<=8; $i++){
        echo "<tr>";
        for($j = 1; $j<=8; $j++){
            if($broj == $i*8+$j){
            echo "<td class='taba'> $broj </td>";
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