<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- // 3 Napisati fju koja od niza reči pravi html listu kao meni...  -->
    <!-- // Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.   -->  
<?php
    function meni_niz($niz){
        echo "<ul>";
        foreach($niz as $element){
            echo "<li>$element</li>";
        }
        echo "</ul>";  
    }
    meni_niz(["Stavka1, Stavka2, Stavka3, Stavka4, Stavka5, Stavka6"]);
?>
</body>
</html>