<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1 TEZI ZADATAK -->
<!-- // Ucitati 2 reci iz forme. Prikazati duzu rec svim velikim slovima a kracu svim malim. (pronaci na netu fju za pretvaranje u vekika i mala slova)
        $a = $_GET['duzaaarec'];
        $b = $_GET['kracarec'];

        $a_velikim = strtoupper ($a);
        $b_malim = strtolower ($b);
        $a_malim = strtolower ($a);
        $b_velikim = strtoupper ($b);
        

        if(strlen($a) > strlen($b)){
            echo "$a_velikim";
            echo  "$b_malim";
        }
        elseif(strlen($a) < strlen($b)){
            echo "$a_malim";
            echo  "$b_velikim";
        } -->

<!-- 2. TEZI ZADATAK -->
<!-- Ucitati reč iz forme. Ako ima 5 slova, ispitati i prikazati da li jeste ili nije palindrom, a ako nema 5 slova prikazati recenicu “Greska. Rec mora imati tacno 5 slova".  (rec od 5 slova je palindrom ako ima isto 1. i 5.slovo, i 2.i 4.slovo) -->
<?php
    $rec = $_GET ['tenet'];

    $a = strlen($rec);
    echo "$a";

    $b = substr($rec, 0, 1);
    $c = substr($rec, 4, 5);
    echo "$b <br />"; 
    echo "$c <br />";
    $d = substr($rec, 0, 1);
    $f = substr($rec, 0, 3);
    echo "$d <br />"; 
    echo "$f <br />";


    if( $b == $c){
        echo "Rec je palindrom.";
    }

    // if( $a == 5){
    //     echo "ima pet slova";
    // }
    // elseif( $a < 5 && $a > 5){
    //     echo "greska";
    // }
    

    
?>
</body>
</html>