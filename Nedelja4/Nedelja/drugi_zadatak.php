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
// Data su tri broja. Prikazati ih u rastućem redosledu.
    $prvi = mt_rand(1,100);
    $drugi = mt_rand(1,100);
    $treci = mt_rand(1,100);
    echo "$prvi, $drugi, $treci<br/>";

    if ($prvi < $drugi && $prvi < $treci){
        echo " $prvi<br/>";
        if ($drugi < $treci){
            echo "$drugi<br/>";
            echo "$treci<br/>";
        }
        elseif ($treci<$drugi){
            echo "$treci<br/>";
            echo "$drugi<br/>";
        }
        
    }
    elseif($drugi < $prvi && $drugi < $treci){
        echo "$drugi <br/>";
        if ($prvi < $treci){
            echo "$prvi<br/>";
            echo "$treci<br/>";
        }
        elseif ($treci<$prvi){
            echo "$treci<br/>";
            echo "$prvi<br/>";
        }
    }
    elseif($treci < $prvi && $treci < $drugi)
        echo "$treci<br/>";
        if ($prvi < $drugi){
            echo "$prvi<br/>";
            echo "$drugi<br/>";
        }
        elseif ($drugi<$prvi){
            echo "$drugi<br/>";
            echo "$prvi<br/>";
        }

    /*if ($drugi < $treci){
        echo "$drugi";
    }
    if ( $treci > $prvi && $treci > $drugi)
        echo "$treci";*/
?>
</body>
</html>