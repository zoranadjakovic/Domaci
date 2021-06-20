<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "KlasaBaza.php";

    $baza = new Baza('turisticka_agencijaa');

    $r = $baza -> izvrsi_select('SELECT count(id) AS broj_rezervacija FROM `spisak_putnika`');

    if($r["uspesno"] == true){
        echo $r['niz'][0]['broj_rezervacija'];
    } 
    else {
        die $r['poruka'];
    } 

    $baza -> prikazi_destinacije();
    
    $baza -> prikazi_putnike();
    
    $baza -> otkazi_rezervaciju();
    ?>
</body>
</html>