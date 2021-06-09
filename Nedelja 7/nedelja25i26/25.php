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
// <!-- 1.Dodati u gornji niz jos 4 osobe po zelji.
$niz = [ 
['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
['ime'=>"Ivana", "godine"=>20, "grad"=>"Beograd", "pozicija"=>"dizajner"],
['ime'=>"Sinisa", "godine"=>25, "grad"=>"Novi Sad", "pozicija"=>"menadzer"],
['ime'=>"Stojan", "godine"=>50, "grad"=>"Novi Sad", "pozicija"=>"programer"],
['ime'=>"Zoran", "godine"=>42, "grad"=>"Nis", "pozicija"=>"instruktor"],
['ime'=>"Bojana", "godine"=>35, "grad"=>"Smederevo", "pozicija"=>"prodavac"],
['ime'=>"Goran", "godine"=>35, "grad"=>"Loznica", "pozicija"=>"vodoinstalater"],
['ime'=>"Milana", "godine"=>38, "grad"=>"Uzice", "pozicija"=>"direktor"],
];

var_dump($niz);
// 2.Napisati fju koja prikazuje imena svih programera.
function imenaProgramera($niz){
    for($i=0; $i<count($niz); $i++){
        if($niz[$i]['pozicija'] === "programer"){
            echo $niz[$i]['ime'];
        }       
    }
}
imenaProgramera($niz);
 
// 3.Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s. -->

function sviPodaci($niz,$osoba){
    foreach($niz as $ind=>$osoba){
        if($osoba['ime'] === $ime){
            var_dump($osoba);
        }
    }
}
sviPodaci($niz,"Goran");

foreach($niz as $ind=>$osoba){
    if(strpos($osoba['ime'], "S")){
        sviPodaci($niz,$osoba['ime']);
    }
}
?>

</body>
</html>