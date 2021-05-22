<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- //         Napraviti dva slucajna broja $n i $x u opsegu od 1-10. Prikazati ih.
// Napisati funkciju koja pravi i prikazuje "n" span elemenata. Svaki span ima text Ovo je span 1, Ovo je span 2… 
// Napraviti "x" divova, pri cemu svaki div dobija "n" spanova pozivajuci prethodnu funkciju.
// primer: za n=3 x=4; resenje:
// <div><span></span><span></span><span></span></div>
// <div><span></span><span></span><span></span></div>
// <div><span></span><span></span><span></span></div>
// <div><span></span><span></span><span></span></div> -->
<?php
        $n = mt_rand(1,10);
        echo "<br>";
        $x = mt_rand(1,10);
        echo $n, $x; echo "<br>";
        
        function nspan(){
            global $n, $x;
            for ($i = 0; $i <= $n; $i++)
            echo "<span>Ovo je span $i</span>";
        }    
        nspan();
    
        for($i = 0; $i <= $x; $i++){
            echo "<br>";
            echo "<div>";
            echo nspan();
            echo "</div>";
        }
?>
</body>
</html>