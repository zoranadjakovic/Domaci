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
include "35D.php";

$id=$b->vraca_id_destinacije('Francuska','Paris');
echo $id."<br>";
$putovanja=$b->vraca_id_destinacije(1);
print_r($putovanja);
echo "<br>";
$b->brise_sve_aranzmane(1);
?>
</body>
</html>