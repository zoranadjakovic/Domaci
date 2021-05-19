<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1. Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.
    2. (nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).
    3. (nastavak) Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći. -->
 
 <form action="16D1.php" method="GET">
 <input type="number" name="prvi"/>
 <input type="number" name="drugi"/>
 <input type="number" name="treci"/>
 <input type="number" name="cetvrti"/>
 <input type="submit" value="Posalji"/>
 </form>

</body>
</html>