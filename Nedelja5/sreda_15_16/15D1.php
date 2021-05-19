<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .red{
        color:red;
    }
    .green{
        color:green;
    }
        
    
    </style>
</head>
<body>

<?php
// Napisati fju koja za zadata dva imena (globalne promenljive) ispisuje duze ime.
        $a = "duzeee";
        $b = "krace";
        echo "$a $b";

    function duze_ime(){
        global $a, $b;
        $c = strlen($a);
        $d = strlen($b);

        if($c > $d){
            echo "$a";
        }
        elseif ($c == $d){
            echo "Rec iste duzine";
        }
        else{
            echo "$d";
        }
    }
    duze_ime(); 

    // Napisati fju koja za zadata dva imena (globalne promenljive) vraca duze ime. Pri pozivanju prikazati rezultat.

    $a = "duzeee";
    $b = "krace";

    function ret(){
        global $a, $b;
        $c = strlen($a);
        $d = strlen($b);

        if($c > $d){
            return $a;
        }
        else{
            return $b;
        }
    }
    echo ret();
    
    // Dodati u prethodni program fju koja vraca krace ime. Prikazati duze ime u crvenoj, a krace ime u zelenoj boji. -->
    $a = "duzeee";
    $b = "krace";

    $c = strlen($a);
    $d = strlen($b);

     function krace_ime(){
         global $a, $b, $c, $d;
         if( $c < $d){
             echo "<p class='red'>$d</p>";
             return $b;
         }
         else{
             echo "<p class='green'>$c</p>";
             return $a;
         }
     }

     function duze_ime(){
        global $a, $b, $c, $d;
        if( $c > $d){
            echo "<p class='red'>$d</p>";
            return $b;
        }
        else{
            echo "<p class='green'>$c</p>";
            return $a;
        }
    }
    $di = krace_ime();
    echo "<p class='red'>$di</p>";
    $ki = duze_ime();
    echo "<p class='green'>$ki</p>";




    
        
        

    
?>

</body>
</html>