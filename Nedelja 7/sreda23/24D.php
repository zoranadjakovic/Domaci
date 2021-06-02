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
    //1. Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false.
        
        $niz = [3,10,18,20,5,66];
        function vraca($niz){
            foreach($niz as $ind=>$element){
                if($element === 0){
                    return false;
                }
                else{
                    return true;
                }
            }
        }
        $x = vraca($niz);
        var_dump ($x);

    //2. Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
    // Koji dan je najuspesniji
    // Kolika je prosecna uspesnost
    // Razliku izmedju najbolje i najgore uspesnosti

    $asoc= ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak'=>28];

    function najbolji($asoc, $a){
        if($a === 'najuspesniji'){
            $max = max($asoc);
            $ind = array_search($max, $asoc);
        }
        return $ind;
    }
    $bo = najbolji($asoc,'najuspesniji');
    echo $bo;

    function prosek($asoc){
        $zbir = 0;
        foreach($asoc as $ind=>$el){
            $zbir += $el;
        }
        return $zbir/count($asoc);
    }
    echo prosek($asoc);

    function najgori($asoc,$b){
     if($b === 'najgori'){
            $min = min($asoc);
            $ind_1 = array_search($min, $asoc);
        }
        return $ind_1;
    }
    $g = najgori($asoc, 'najgori');
    echo $g;

    function razlika($asoc){
        return $bo - $g;
    }
    razlika($asoc);
    
    
    
     ?>
    
</body>
</html>