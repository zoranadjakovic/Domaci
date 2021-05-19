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
    <?php
        $a = $_GET['prvi'];
        $b = $_GET['drugi'];
        $c = $_GET['treci'];
        $d = $_GET['cetvrti'];
        echo "$a, $b, $c, $d";

        if( $b > $a && $d > $c){
            echo "Ispunjen";
        }
        else{
            echo "Greska";
            die();
        }

        $zbir_1 = 0;
        $zbir_2 = 0;
        if($b > $a && $d > $c ){
            for( $i = $a; $i <= $b; $i++){
                if($i % 4 == 0){
                    $zbir_1 = $zbir_1 + $i
                }   
            }
            for( $i = $c; $i <= $d; $i++){
                if ($i % 3 == 0){
                $zbir_2 = $zbir_2 + $i
                }
            }
        }

        if($zbir_1 > $zbir_2){
                echo $zbir_1;
            }
            else{
                echo $zbir_2;
            }
    
    ?>
</body>
</html>