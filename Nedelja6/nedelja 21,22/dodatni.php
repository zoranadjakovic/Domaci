<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .oznacen{
        background:red;
    }
    </style>
</head>
<body>
<!-- 1*Za vezbu, nije obavezno:  prethodnoj funkciji dodati parametar $oznacen koja pokazuje koji <li> treba imati klasu oznacen na sledeci nacin:
Parametar oznacen predstavlja index niza (0 ili 1 ili 2….)
Parametar oznacen predstavlja sta pise u meniju ("Stavka 1", ili "Stavka 2"…)
 U css, dodati klasu oznacen - druga boja pozadine.
 <?php
    function ime($oznacen, $niz){
        echo "<ul>";
        foreach($oznacen as $ind => $element){
            echo "<li class='oznacen:$niz[$ind]'>".$element."</li>";
        }
        echo "</ul>";
    }
    $oznacen = mt_rand(0,3);
    $niz = ['Stavka 1', 'Stavka 2', 'Stavka 3'];
    ime($oznacen, $niz);

 ?>

2*Za vezbu, nije obavezno:  Data su dva niza jedan koji sadrži boje i drugi koji sadrži reči. Prikazati svaku reč preko spana u odgovarajućoj boji. Primer: $boje = ['green', 'blue', 'yellow'];       $reci = ['sto', 'stolica', 'mobilni']; 
Rec "sto" se prikazuje u zelenoj boji, stolica u plavoj, mobilni u zutoj. -->

        <?php
        function dva_niza($boje, $reci){
            foreach($reci as $ind => $element){
                echo "<span style='color:$boje[$ind]'>".$element."</span>"; 
            }    
            
        }
            $boje = ['green', 'blue', 'yellow'];
            $reci = ['sto','stolica','mobilni'];
            dva_niza($boje, $reci);
        ?>
</body>
</html>