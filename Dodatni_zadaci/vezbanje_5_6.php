<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color:red;
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <?php

    // echo "Filter  [1,2,3,4,5] -> [2,4] <br/>";
    // echo "Reduce  [1,2,3] -> 6 <br/>";
    // echo "Map     [1,2,3] -> [a,b,c] <br/>";
    // echo "Potreban ti je index -> koristi foreach.";
    

    echo " <p> 1. Napisati fju koja za dati niz izracunava i vraca zbir brojeva po------0 apsolutnoj vrednosti. </p>";

   // koristiti reduce

    $niz_brojeva = [2 , 4, 5, 1, -4, 0, -3];
    function zbir_brojeva_po_apsolutnoj_vrednosti($niz){
        $rezultat = array_reduce($niz, function($a, $b) { 
                return $a + abs($b); 
            },
            0
        );
        return $rezultat;
    }

    echo zbir_brojeva_po_apsolutnoj_vrednosti($niz_brojeva);

echo " <p> 2. Napisati fju koja za dati niz izracunava i vraca zbir neparnih brojeva na parnim mestima.</p>";

// koristiti foreach

    function zbir_neparnih_brojeva_na_parnim_mestima($niz){
        $zbir = 0;
        foreach($niz as $index => $vrednost){
            if($index % 2 == 0){
                if($vrednost % 2 !== 0){
                    $zbir += $vrednost;
                }
            }
        }
        return $zbir;
    }
    echo zbir_neparnih_brojeva_na_parnim_mestima($niz_brojeva);

echo " <p> 3. Napisati fju koja za dati niz stringova prikazuje samo stringove cije je pretposlednje slovo veliko.</p>";

// filter

    function stringovi_sa_pretposlednjim_velikim_slovom($niz){
        $provera = array_filter($niz, function($element) {
                return substr($element, -2, 1) === strtoupper(substr($element, -2, 1));
            }
        );
        return $provera;
    }

    $stringovi = ['reci', 'neke', 'taMo', 'nemam', 'pojMa'];
    echo join(", ", stringovi_sa_pretposlednjim_velikim_slovom($stringovi));

echo " <p> 4. Napisati fju koja za dati niz stringova pronalazi koji stringovi imaju dve reci (razmak u sredini) i zatim prikazuje njihovu drugu rec.</p>";
// npr ["imamo test", "i nece", "davati", "nista", "novo", "zato", "ce biti", "bas lak"], 
// fja prikazuje "test" "nece" "biti" "lak"

// filter i map
    function druga_rec($niz){
        $stringovi_sa_razmakom = array_filter($niz,function($element){
                return strpos($element, " ") !== false;
            }
        );
        $druge_reci = array_map(function($element){
                return substr($element, strpos($element, " ")+1);
            }, 
            $stringovi_sa_razmakom
        );
        return $druge_reci;
    }

    $test_reci = ["imamo test", "i nece", "davati", "nista", "novo", "zato", "ce biti", "bas lak"];
    echo join(" ", druga_rec($test_reci));

echo " <p>  5. Napisati fju koja od datog niza reci pravi i vraca niz koji ima samo reci cija je duzina veca od 5 karaktera.</p>";

// filter
    function reci_duze_od_pet_karaktera($niz){
        return array_filter($niz,function($element){
                return strlen($element) > 5;
            }
        );
    }

    echo join(", ", reci_duze_od_pet_karaktera($test_reci));

echo " <p>  6. Dat je niz fudbalskih timova:</p>";
$fk = [
["ime"=>"Radnicki", "grad"=>"Pirot", "pobede"=>4, "porazi"=>0, "nereseno"=>2],
["ime"=>"Proleter", "grad"=>"Zrenjanin", "pobede"=>1, "porazi"=>4, "nereseno"=>1],
["ime"=>"Sloga", "grad"=>"Despotovac", "pobede"=>2, "porazi"=>3, "nereseno"=>1],
["ime"=>"Sloboda", "grad"=>"Uzice", "pobede"=>2, "porazi"=>2, "nereseno"=>2]
];
// Niz $fk - dodati  kao globalan niz unutar svih fja osim pod b) !
// Napisati fje:

echo " <p>  6.1. \"broj_bodova\" koja za dato ime tima racuna i vraca broj bodova po formuli: pobede*3+nereseno. Npr Radnicki ima 4*3+2 = 14 bodova. Funkcija vraca 14. Proveriti pozivom:  broj_bodova( \"Radnicki\" );</p>";

function nadji_tim($fk, $ime_tima){
    // Array column vraca niz vrednosti iz zadate kolone (zajednicki kljuc/key u ugnjezdenim asocijativnim nizovima)
    $imena_timova = array_column($fk, 'ime');
    $index = array_search($ime_tima, $imena_timova);
    $tim = $fk[$index];
    return $tim;
}

function broj_bodova($ime_tima) {
    global $fk;
    $imena_timova = array_column($fk, 'ime');
    $index = array_search($ime_tima, $imena_timova);
    $tim = $fk[$index];
    return $tim['pobede']*3 + $tim['nereseno'];
}

echo broj_bodova('Radnicki');

echo " <p> 6.2. \"prikazi_tim\" koja za dati tim prikazuje: FK … iz grada…. Ima ukupno …. bodova. Proveriti pozivom:  prikazi_tim ( \$fk[1] );</p>";

function prikazi_tim($tim){
    echo "FK ".$tim['ime']." iz grada ".$tim['grad'].", ima ukupno ".broj_bodova($tim['ime'])." bodova.";
}

prikazi_tim($fk[0]);

echo " <p>  6.3. \"prikazi_tim_po_imenu\" koja za dato ime tima prikazuje: FK … iz grada…. Ima ukupno …. bodova. Proveriti pozivom: prikazi_tim_po_imenu( \"Sloga\" );</p>";

function prikazi_tim_po_imenu($ime_tima){
    global $fk;
    $imena_timova = array_column($fk, 'ime');
    $index = array_search($ime_tima, $imena_timova);
    $tim = $fk[$index];
    prikazi_tim($tim);
}

echo prikazi_tim_po_imenu('Sloga');

echo " <p>  6.5. \"obrisi_tim\" koji za dato ime brise tim iz niza. </p>";

// koristi array_splice(niz, od, koliko, novi1, novi2 ...)  
// 	Brisanje 3.člana niza: array_splice($niz, 2, 1);  //od indexa 2 brisi 1
function obrisi_tim($ime_tima){
    global $fk;
    $imena_timova = array_column($fk, 'ime');
    $index = array_search($ime_tima, $imena_timova);
    array_splice($fk, $index, 1);
}

obrisi_tim('Sloga');
print_r($fk);

echo " <p>   6.6. \"dodaj_kolonu_bodovi\" svim timovima dodaje novu kolonu \"bodovi\" i upisuje koliko trenutno imaju bodova u tu kolonu. </p>";

// koristi map
function dodaj_kolonu_bodovi(){
    global $fk;
    $fk = array_map(function($tim){
            $tim['bodovi'] = broj_bodova($tim['ime']);
            return $tim;
        },
        $fk
    );
}

dodaj_kolonu_bodovi();
print_r($fk);

// ["ime"=>"Sloboda", "grad"=>"Uzice", "pobede"=>2, "porazi"=>2, "nereseno"=>2]
echo "<p> 6.4. \"upisi_rezultat\" koja za data 2 imena tima i rezultat, dodaje timovima po pobedu, nereseno ili poraz. 
 Npr za poziv: upisi_rezultat(\"Sloboda\", \"Proleter\", \"2:1\");  - Slobodi dodaje pobedu a Proleteru poraz. 
 Proveriti sledecim kodom:
      prikazi_tim_po_imenu( \" Sloboda \" );
      upisi_rezultat(\"Sloboda\", \"Proleter\",  \"2:1\");
      prikazi_tim_po_imenu( \" Sloboda \" );</p>";

      function upisi_rezultat($ime_tima_domaci, $ime_tima_gosti, $rezultat){
          global $fk;
          $imena_timova = array_column($fk, 'ime');
          $index_domaci = array_search($ime_tima_domaci, $imena_timova);

          $index_gosti = array_search($ime_tima_gosti, $imena_timova);

          $golovi_domaci = substr($rezultat, 0, strpos($rezultat, ":"));
          $golovi_gosti = substr($rezultat, strpos($rezultat, ":")+1);

          if($golovi_domaci > $golovi_gosti){
              $fk[$index_domaci]['pobede'] = $fk[$index_domaci]['pobede'] + 1;
              $fk[$index_gosti]['porazi'] = $fk[$index_gosti]['porazi'] + 1;
          } elseif ($golovi_domaci < $golovi_gosti){
              $fk[$index_gosti]['pobede'] = $fk[$index_gosti]['pobede'] + 1;
              $fk[$index_domaci]['porazi'] = $fk[$index_domaci]['porazi'] + 1;
          } else {
              $fk[$index_domaci]['nereseno'] = $fk[$index_domaci]['nereseno'] + 1;
              $fk[$index_gosti]['nereseno'] = $fk[$index_gosti]['nereseno'] + 1;
          }
          dodaj_kolonu_bodovi();
      }

    print_r($fk);
    echo "<br />";
    prikazi_tim_po_imenu("Sloboda");
    echo "<br />";
    upisi_rezultat("Sloboda", "Proleter", "22:0");
    echo "<br />";
    prikazi_tim_po_imenu("Sloboda");
    echo "<br />";
    print_r($fk);
?>
</body>
</html>