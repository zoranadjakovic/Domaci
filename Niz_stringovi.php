<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .naslov{
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <p class='naslov'>Prvi zadatak:</p>
    <?php
    // 1. Napraviti funkciju koja od niza reči pravi i prikazuje span od svake reči koja je duža od 5 slova. 
        function vise_od_5_slova($niz){
            foreach($niz as $element){
                if(strlen($element) > 5){
                    echo "<span> ".$element." </span>";
                }
            }
        }
        $niz = ["DeRossi", "Totti", "Danielle", "Roma", "Amor", "Goal", "Zanetti", "DelPiero", "Francesco"];
        vise_od_5_slova($niz);
    ?>
    <p class='naslov'>Drugi zadatak:</p>
    <style>
        .kratka_rec{
            color: red;
        }
        .duza_rec{
            color: blue;
        }
    </style>
    <?php
    // 2. Napraviti funkciju koja od niza reči pravi i prikazuje span od svake reči koja počinje samoglasnikom. Svaka prikazana reč će imati klasu "kratka_rec" ako je kraća od 7 slova, a klasu "duza_rec" ako nije. Oznaciti klase drugacije preko css-a
        function samoglasnik($niz) {
            foreach($niz as $element){
                if (
                $element[0] == 'a' or
                $element[0] == 'e' or
                $element[0] == 'i' or
                $element[0] == 'o' or
                $element[0] == 'u'
                ) {
                    if (strlen($element) < 7){
                        echo "<span class='kratka_rec'>".$element." </span>";
                    } else {
                        echo "<span class='duza_rec'>".$element." </span>";
                    }
                }
            }
        }
        $niz = ["derossi", "andiamo", "emulatori", "roma", "amor", "goal", "zanetti", "analogni", "francesco"];
        samoglasnik($niz);
        ?>
    <p class='naslov'>Treci zadatak:</p>
    <?php
// 3. Napraviti funkciju koja od niza reči prikazuje samo palindrome. Svaki palindrom ide u poseban paragraf koji ima id:  p1, p2, p3....

        function palindromi($niz){
            $id_counter = 1;
            foreach($niz as $element){
                if($element == strrev($element)){
                    echo "<p id='".$id_counter++."'>".$element."</p>";
                }
            }
        }

        $niz = ["madam", "trcanje", "ratar", "css", "potop", "laptop", "pop"];

        palindromi($niz);
?>
    <p class='naslov'>Cetvrti zadatak:</p>
    <?php
    // 4. Data su dva niza jedan koji sadrži boje i drugi koji sadrži reči. Prikazati svaku reč preko spana u odgovarajućoj boji. Primer: $boje = ['green', 'blue', 'yellow'];       $reci = ['sto', 'stolica', 'mobilni']; Rec "sto" se prikazuje u zelenoj boji, stolica u plavoj, mobilni u zutoj.
        function nizovi($boje, $reci){
        if(count($boje) < count($reci)){
            die("Nizovi nisu jednake duzine");
        }
        foreach($reci as $index => $element){
            echo "<span style='color:".$boje[$index]."'>".$element." </span>";
        }
    }

    $boje = ['green', 'blue', 'yellow'];
    $reci = ['sto', 'stolica', 'mobilni'];
    nizovi($boje, $reci);
    ?>
    <p class='naslov'>Peti zadatak:</p>
    <?php
    // Napisati fju koja od niza reči pravi html listu kao meni... 
    // Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.  
    // Funkciji dodati parametar $oznacen koja pokazuje koji <li> treba imati klasu oznacen! U css, dodati klasu oznacen, kao i hover stanje za li. -->
        function pretvaranje_niza_u_meni($niz, $oznacen){
            echo "<ul>";
            foreach($niz as $index => $element){
                if($oznacen == $index){
                    echo "<li class='oznacen'>".$element."</li>";
                } else {
                    echo "<li>".$element."</li>";
                }
            }
            echo "</ul>";
        }
        
        $niz = ["Macka", "Pas", "Gavran", "Petao", "Hrcak"];
        $oznacen = mt_rand(0, 4);
        pretvaranje_niza_u_meni($niz, $oznacen);
    ?>
    <br/>
    <?php
        function fja($a){ 
                $a -= 2; 
                return $a; 
                }
            $b = 3; 
            fja($b);
            echo $b;
        ?>
</body>
</html>