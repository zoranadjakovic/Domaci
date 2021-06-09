<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- // 3 a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz
    // b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.
    // c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
    // d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna.  -->
    <?php
        function vraca_niz(){
            $input = $_GET['brojevi'];
            $x = explode(" ", $input);
            return $x;
        }
        $niz = vraca_niz();
        echo "<p>".join(" ",$niz)."</p>";


        $nizz= [10,4,7,8,33,55,59,15];
        function tri_parna_broja($nizz){
            $parni = false;
            $brojac = 0;
            for($i=0; $i<count($nizz); $i++){
                if($nizz[$i] % 2 == 0){
                    $brojac++;
                    if($brojac > 3){
                        $parni = true;
                    }
                }
            }
            return $parni;
        }
        $a = tri_parna_broja($nizz);
        


        function manji_od_1000($nizz){
            $manji = true;
            for($i=0; $i<count($nizz); $i++){
                if($nizz[$i] > 1000){
                    $manji = false;
                }
            }
            return $manji;
        }
        $b = manji_od_1000($nizz);
        

        function manjiOd1000I3Parna($niz){
            $a = tri_parna_broja($niz);
            $b = manji_od_1000($niz);    
        }
        var_dump($a);
        echo "<br>";
        var_dump($b);

        manjiOd1000I3Parna($niz);
        
    ?>
</body>
</html>