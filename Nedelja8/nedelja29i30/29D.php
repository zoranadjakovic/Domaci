<?php
// Napraviti klasu SastojakHrane koja ce imati clanice: naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu.
class SastojakHrane{
    public $naziv, $mera, $kalorije;

    function __construct($naziv, $mera, $kalorije){
        $this->naziv = $naziv;
        $this->mera = $mera;
        $this->kalorije = $kalorije;
    }

    function promeniMeru($mera){
        $this->mera = $mera;
    }
    
    function prikazi(){
        echo "<p>Naziv sastojka je:". $this->naziv ."<br>"."Mera je:". $this->mera ." i ima ".$this->kalorije. "kalorija.</p>";
    }
}
$sastojak1 = new SastojakHrane("Ovsene pahuljice", 500, 150);
$sastojak1 -> prikazi();
$sastojak1 -> promeniMeru( 300 );

// Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
// Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  

// Proveriti kod sledecim naredbama:
//

class Jelo{
    public $naslov, $opis, $podaci;

    function __construct($naslov, $opis, $podaci){
        $this->naslov = $naslov;
        $this->opis = $opis;

        foreach($podaci as $sastojak){
            $this->podaci = [] = new SastojakHrane($sastojak['naziv'], $sastojak['mera'], $sastojak['kalorije']);
        }

        function prikazi(){
            foreach($this->podaci as $sastojak){
                $sastojak -> prikazi();
            }
        }

        function promeniMeru($naziv, $mera){
            foreach($this->podaci as $sastojak){
                if($naziv == $sastojak -> naziv){
                    $sastojak -> promeniMeru($mera);
                }
            }
        }
    }
}


$podaci = [
        ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
        ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
        ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
        ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
    ]
    $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    $jelo->promeniMeru("brasno", "400g");
    $jelo->prikazi();
?>