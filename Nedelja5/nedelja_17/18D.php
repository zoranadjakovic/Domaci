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
// <!-- 1. Ispisati brojeve od 20 do 1 preko while ciklusa.

$a = 1;
while($a <= 20){
    echo "Ispisani brojevi...$a <br>";
    $a ++;
}
// 2. Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom.

$proizvod = 1;
$i = 30;
while($proizvod<=100000){
    $proizvod *= $i;

    $i--;
    
}
$i += 1;
echo "<p class='green'>$i</p>";
echo "<p class='red'>$proizvod<p>";

// <!-- 3. Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4. --> 


    for($i=30;$i<=99;$i++){
        
        $prva = (string) $i;
        $prva_cifra = $prva[0];
        $druga_cifra = $prva[1];

        if($prva_cifra % 3 != 0 && $druga_cifra % 4 != 0 ){
            echo $i;
            echo "<br>";
        }
        
        else {
            continue;
        }

    }


  
    
   

    
?>

</body>
</html>