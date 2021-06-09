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
// 1) Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
// Napisati konstruktor koji dobija i  postavlja sve clanice.
// Napisati metodu za citanje cene.
// Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."


class Krevet{
    public $duzina;
    public $sirina;
    public $materijal;
    private $cena;

    function __construct($nduzina, $nsirina, $nmaterijal, $ncena){
        $this -> duzina = $nduzina;
        $this -> sirina = $nsirina;
        $this -> materija = $nmaterijal;
        $this -> cena = $ncena;
    }
    function citanje_cene(){
        echo $this -> cena;
    }
    function __toString(){
        echo "Krevet je duzine $this ->duzina i sirine $this->sirina napravljen od $this->materijal po ceni $this->cena";
    }
    function popust($popust){
        $this ->cena = $cena - ($this->cena*$popust/100);
    }
}

// 2) Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.

        $objekat1= new Krevet(200,160,"drvo",400);
        $objekat2= new Krevet(200,140,"drvo",250);
        if($objekat1 > $objekat2){
            echo $objekat1;
        }
        else{
            echo $objekat2;
        }

// 3) U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
// Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.

    $objekat3 = new Krevet(189, 300,"furnir", 433);
    echo $objekat3;
    echo "<br />";

    $objekat3->popust(10);
    echo $objekat3;


        

    ?>
</body>
</html>