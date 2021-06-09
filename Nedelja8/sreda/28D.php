<?php
include_once("27D.php");
?>
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
    // 1) Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
    // Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice.

    class Baldahin extends Krevet{
        public $visina;
        public $cenaBaldahina;

        function __construct($nduzina, $nsirina, $nmaterijal, $ncena, $nvisina, $ncenaBaldahina){
            $this -> visina = $nvisina;
            $this -> cenaBaldahina = $ncenaBaldahina; 

            parent:: __construct($nduzina, $nsirina, $nmaterijal, $ncena) ;
        }
    }
    
//  2) Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
// (Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")


     function __toString(){
         $cenaSaBaldahinom = $this->cena + $this->cenaBaldahina;
         echo "Cena kreveta bez baldahina je".$this->cena.",a cena sa baldahinom je".$cenaSaBaldahinom;
     }
    
     public function daj_cenu(){
         return $this->cena;
     }

     $b1= new Baldahin(300, 140, "Bukva", 2600, 150, 68);
     echo $b1;
     
    ?>
</body>
</html>