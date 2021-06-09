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
    // 1 Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz.

    $nizz = ['Sto','Stolica','Kauc','Televizor','Racunar'];
    foreach($nizz as $ind=>$element){
        if(strlen($nizz[$ind]) > 5){
            echo "<span style='color:red'>".$element."</span>";
        }
        elseif(strlen($nizz[$ind]) < 5){
            echo "<span style='color:green'>".$element."</span>";
        }
    }
    // 2 Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti). 
        $nizzz = [5,15,6,8,9,10,33,4];
        $y =[];
        $zbir = 0;
        $brojac = 0;
        for($i=0; $i<count($nizzz); $i++){
            $zbir += $nizzz[$i];
            $brojac++;
        }
        $as = $zbir / $brojac;

        for($i=0; $i<count($nizzz); $i++){
            if($nizzz[$i] > $as){
                array_push($y, $nizzz[$i]);
            }
        }
        echo "y:".join(",", $y)."<br/>";
        

    ?>
</body>
</html>