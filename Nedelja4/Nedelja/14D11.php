<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti formu koja u jednom inputu prihvata ime i prezime razdvojene razmakom. Posle slanja forme, prikazati inicijale u obliku I.P. (sad saljem sa uputstvom 😊 za prvo slovo - je lako, za drugo slovo - nadjite poziciju razmaka preko strpos, a onda preko substr uzmete slovo na sledecoj poziciji) -->
    <?php
        $i = $_GET['zorana'];
        $p = $_GET['djakovic'];
        
        $inicijali_i = substr( $i, 0, 1);
        $inicijali_p = substr ($p, 0, 1);
        echo "$inicijali_i . $inicijali_p .";
    ?>
</body>
</html>