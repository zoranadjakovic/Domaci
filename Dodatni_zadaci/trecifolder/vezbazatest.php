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




// 1.Napisati fju koja za dati niz izracunava i vraca zbir brojeva po apsolutnoj vrednosti.
    function ksksk($niz){
        $zbir=0;
        for($i=0;$i<count($niz);$i++){
            if($niz[$i] >= 0){
                $zbir += $niz[$i];
                return $zbir;
        }
        elseif($niz[$i] < 0){
            $zbir += abs($niz[$i]);
        }
        }
    } 
    echo ksksk([-1,1,0]);

// 2.Napisati fju koja za dati niz izracunava i vraca zbir neparnih brojeva na parnim mestima.

    function racuna($niz2){
        $zbir1=0;
        
        for($i=0; $i<count($niz2); $i++){
            if($niz2[$i] % 2 != 0 and $i % 2 == 0){
                 $zbir1 += $niz2[$i];
            }
            return $zbir1;
        }
        
    }
// 3.Napisati fju koja za dati niz stringova prikazuje samo stringove cije je pretposlednje slovo veliko.

    function prikazuje_vel_slovo_stringa($niz3){
            $nova = [];
            for($i=0; $i<count($niz3); $i++){
                $rec = $niz3[$i];
                if(strpos($rec, -2) == strtoupper($rec[-2])){
                    array_push($niz3,$nova);
                }
            }
            return $nova;
        }
            
            print_r($nova);
            prikazuje_vel_slovo_stringa(["zorana", "petAr"]) ;
              
        
// 4.Napisati fju koja za dati niz stringova pronalazi koji stringovi imaju dve reci (razmak u sredini) i zatim prikazuje njihovu drugu rec.  
// npr ["imamo test", "i nece", "davati", "nista", "novo", "zato", "ce biti", "bas lak"], 
// fja prikazuje "test" "nece" "biti" "lak"

$niz4=["imamo test", "i nece", "davati", "nista", "novo", "zato", "ce biti", "bas lak"];
    function stringovi($niz4){
        for($i=0; $i<count($niz4); $i++){
            array_search(" ", $niz4[$i]) 
        }
    }



//5. Napisati fju koja od datog niza reci pravi i vraca niz koji ima samo reci cija je duzina vec aod 5 karaktera.



$fk = [
    ["ime"=>"Radnicki", "grad"=>"Pirot", "pobede"=>4, "porazi"=>0, "nereseno"=>2],
    ["ime"=>"Proleter", "grad"=>"Zrenjanin", "pobede"=>1, "porazi"=>4, "nereseno"=>1],
    ["ime"=>"Sloga", "grad"=>"Despotovac", "pobede"=>2, "porazi"=>3, "nereseno"=>1],
    ["ime"=>"Sloboda", "grad"=>"Uzice", "pobede"=>2, "porazi"=>2, "nereseno"=>2]
];
// Niz $fk - dodati  kao globalan niz unutar svih fja osim pod b) !
// Napisati fje:

// a/"broj_bodova" koja za dato ime tima racuna i vraca broj bodova po formuli: pobede*3+nereseno. Npr Radnicki ima 4*3+2 = 14 bodova. Funkcija vraca 14. 
// Proveriti pozivom:  broj_bodova( "Radnicki" );

function broj_bodova($ime){
    global $fk;
    

}

// b/"prikazi_tim" koja za dati tim prikazuje:
//             FK … iz grada…. Ima ukupno …. bodova.  
// Proveriti pozivom:  prikazi_tim ( $fk[1] );
 function prikazi_tim($tim){ 
  

// c/ "prikazi_tim_po_imenu" koja za dato ime tima prikazuje:
//             FK … iz grada…. Ima ukupno …. bodova.  
// Proveriti pozivom:   prikazi_tim_po_imenu( "Sloga" );



// d/ "upisi_rezultat" koja za data 2 imena tima i rezultat, dodaje timovima po pobedu, nereseno ili poraz. 
// Npr za poziv:      upisi_rezultat("Sloboda", "Proleter", "2:1");  - Slobodi dodaje pobedu a Proleteru poraz. 
// Proveriti sledecim kodom:
//      prikazi_tim_po_imenu( " Sloboda " );
//      upisi_rezultat("Sloboda", "Proleter",  "2:1");
//      prikazi_tim_po_imenu( " Sloboda " );

// e / "obrisi_tim" koji za dato ime brise tim iz niza. 

// f /"dodaj_kolonu_bodovi"  svim timovima dodaje novu kolonu "bodovi" i upisuje koliko trenutno imaju bodova u tu kolonu. 

?>
</body>
</html>