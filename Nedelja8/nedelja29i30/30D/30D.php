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
    1. Nastaviti zadatak sa casa i :
    Napraviti klasu WebSite. Metode: 
     - header() sa naslovom "Dobro dosli u web-shop" - link ka index.php.
     - footer() sa naslovom "Bolje vas nasli" 
     - meni() koji prikazuje listu svih grupa. Svaki naziv grupe je link - index.php?grupa=…
    2. Prepraviti index.php i detaljnije.php da prikazuju i header, pa meni, pa proizvode, pa footer...
    3.* dopunski - neobavezno: napraviti meni tako sto se pokupe sve grupe iz niza podaci, i naprave svi linkovi.
    
    class WebSite{

        function header(){
            echo "<a href='index.php'> Dobro dosli u web-shop </a>";
        }
        
        function footer(){
            echo "<h2> Bolje vas nasli! </h2>";
        }

        function meni(){
            <a href="index.php">SVE</a><br/>
            <a href="index.php?grupa=milka">MILKA</a><br/>
            <a href="index.php?grupa=zelje">Najlepse ZELJE</a><br/>
            <a href="index.php?grupa=nestle">NESTLE cokolade</a><br/>
        }
    }

        $website = new WebSite();
    ?>
</body>
</html>