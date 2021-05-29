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
// <!--1 Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for)
    
function racuna($niz){
        $brojac_2 = 0;
        $brojac_3 = 0;
        for($i=0; $i<=count($niz); $i++){
            if($niz[$i] >= 100){
                $brojac_3++; 
            }
            elseif($niz[$i] > 9 and $niz[$i] <= 99 ){
                $brojac_2++;
            }
        }
       if( $brojac_2 > $brojac_3){
           echo "Ima vise dvocifrenih.";
       } 
       elseif($brojac_2 < $brojac_3){
           echo "Ima vise trocifrenih.";
       }
       else{
            echo "Jednak je broj.";
       }
       
    }
    racuna([12,234,111,99,333,444,666,46,78]);
?>

</body>
</html>