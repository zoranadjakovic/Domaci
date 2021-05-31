<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре) -->
<?php

    function veci_broj($num_prvi,$num_drugi,$num_treci){
        if($num_prvi > $num_drugi and $num_prvi > $num_treci){
            return $num_prvi;
        }
        elseif($num_prvi < $num_drugi and $ $num_treci < $num_drugi){
            return $num_drugi;
        }
        else{
            return $num_treci;
        }
    }
//     2. Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
// редом бројеве од 1 до N

    function returnDiv($n){
        $div = "";
        for($i=1; $i<=$n; $i++){
            $div .= "<span> $i </span>";
            
        }
        return "<div>$div</div>";
    }
        
        echo returnDiv(15);
    
?>
</body>
</html>