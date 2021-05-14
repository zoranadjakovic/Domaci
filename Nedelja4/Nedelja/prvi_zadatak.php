<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .green{
        color:green;
    }
    .red{
        color:red;
    }
    </style>
</head>
<body>
    <?php
    // Data su dva slucajna broja. Prikazati veci broj u zelenoj, a manji broj u crvenoj boji.  Uraditi zadatak na 2 načina: 
    // Boje ubaciti u inline style
    // Boju odrediti preko klase, tako da php samo pravi element sa odredjenom klasom.
    
    
    
    $prvi_slucajni = mt_rand(1,100);
    $drugi_slucajni = mt_rand(1,100);
    echo "$prvi_slucajni, $drugi_slucajni";

    if ($prvi_slucajni > $drugi_slucajni){
        echo "<p style='color:green'> $prvi_slucajni</p>";
    }
    if ($prvi_slucajni < $drugi_slucajni){
        echo "<p style='color:red'> $drugi_slucajni</p>";
    }


    $prvi_slucajni = mt_rand(1,100);
    $drugi_slucajni = mt_rand(1,100);
    echo "$prvi_slucajni, $drugi_slucajni";

    if ($prvi_slucajni > $drugi_slucajni){
        echo "<p class=\"green\"> $prvi_slucajni </p>";
    } 
    elseif ($prvi_slucajni < $drugi_slucajni){
        echo "<p class=\"red\"> $drugi_slucajni </p>";
    }
        
    
    

    
    
    ?>
</body>
</html>