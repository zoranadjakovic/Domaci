<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Automobil sa punim rezervoarom od 40l predje x kilometara. (x je random broj od 300 do 500). Izracunati kolika je prosecna potrosnja na 100km. Prikazati i x i resenje. 
    

    // $auto = 40;
    // $x = mt_rand(300,500);
    // $potrosnja = $auto / $x * 100;
    // echo "$x <br />";
    // echo  "$potrosnja";

    // Cena krompira je 50din/kg. Izracunati cenu za x grama. (x je random broj do 5.000 - 20.000). Prikazati i x i resenje.-->
    <?php
    $cena_krompira = 50;
    $x = mt_rand(5.000,20.000);
    echo "$x";
    $resenje = $cena_krompira / 1000 * $x;
    echo "$resenje"; 
    ?>

    <!-- // Za dva slucajna broja (-10 do 10), ispitati da li su istog znaka. --> 
    <?php
    $a = mt_rand(-10,10);
    $b = mt_rand(-10,10);

    echo "$a ";
    echo "$b <br/>";


    if( $a > 0 && $b > 0 ){
        echo "istog su znaka.";
    }
    elseif ($a < 0 && $b < 0){
        echo "istog su znaka";
    }
    else{
        echo "nisu istog znaka <br />";
    }

    // Dva automobila se krecu. Prvi je presao x1 duzinu za t1 vreme. Drugi automobil je presao x2 duzinu za t2 vreme. (x1,x2,t1,t2 su slucajni brojevi od 100-200). Koji je automobil brzi?

    // Za tri slucajna broja (1 do 10), ispitati da li je neki od njih jednak zbiru ostala dva.

    $a = mt_rand(1,10);
    $b = mt_rand(1,10);
    $c = mt_rand(1,10);
    echo "$a <br />"; 
    echo "$b <br />";
    echo "$c <br />";

    if($a + $b == $c){
        echo "$c je zbir";
    }
    elseif($b + $c == $a){
        echo "$a je zbir";    
    }
    elseif($c + $a == $b){
        echo "$b je zbir"; 
    }
    else{
        echo  "Nisu zbir";
    }

    // Ucitati 2 reci iz forme. Prikazati duzu rec svim velikim slovima a kracu svim malim. (pronaci na netu fju za pretvaranje u vekika i mala slova)
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
        }




    ?>


    
    
    

</body>
</html>