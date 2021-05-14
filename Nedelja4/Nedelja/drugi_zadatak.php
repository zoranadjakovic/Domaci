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
    echo "$prvi, $drugi, $treci";

    if ($prvi > $drugi && $prvi > $treci){
        echo "<p> $prvi </p>";
    }
    if ($drugi > $treci){
        echo "<p> $drugi </p>";
    }
    if ( $treci < $prvi && $treci < $drugi)
        echo "<p> $treci </p>";
?>
</body>
</html>