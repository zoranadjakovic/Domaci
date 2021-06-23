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
// Napraviti klasu za rad sa bazom turisticka_agencija:
// Konstruktor ima konekciju sa bazom
// Metoda izvrsi_select izvrsava neki select upit i vraca rezultate

// Metoda koja za dati id destinacije pronalazi sva putovanja sa tom destinacijom
// Metoda koja za dati id putovanja brise sve aranzmane iz spiska putnika koji su zakazali to putovanje.
// Pronaci id destinacije po zelji pomocu prve metode.
// Pronaci sva putovanja sa tom destinacijom pomocu druge metode.
// A zatim uzeti id prvog putovanja, i u spisku putnika trecom metodom obrisati sve aranzmane za to putovanje.

class Baza{
    public $conn;

    function __construct($baza){
        $this->conn = new mysqli('localhost', 'root', '', 'turisticka_agencijaa');
        
        if ($this->conn->connect_error)
            die('Greska: '. $this->conn->connect_error);
        else{
            echo 'Konektovan!';
        }
           
        
        function izvrsi_select($upit){
            $podaci = $this->conn->query($upit);
            if($podaci === false)
                return [
                    'uspesno'=>false, 'poruka'=>$this->conn->error];
            else{
                $niz = $podaci->fetch_all(MYSQLI_ASSOC);
                return [
                    'uspesno'=>true, 
                    'niz'=>$niz];
            }
// Metoda koja za datu drzavu i grad vraca id te destinacije
        function vraca_id_destinacije(){
            $r = $this -> izvrsi_select("SELECT drzava, grad, datum_polaska, datum_povratka FROM 'putovanja' JOIN destinacije ON putovanja. id_destinacije, id where destinacije. id=$id");
                "SELECT 'drzava', 'grad' FROM 'destinacije';"
            )
            if($r['uspesno'] == true){
                return $r['niz'];
                }
                else{
                    die("Greska. ".$r['poruka'])
                }
            }
            function brise_sve_aranzmane(){
                $a=$this->conn->query("DELETE FROM 'spisak_putnika' WHERE id_putovanja=$id");
                if($a === false){
                    die('Greska'. $this->conn->error);
                }
                else{
                    "Uspesno."
                }
            }
        }
        $b=new Baza ('turisticka_agencijaa');
    ?>
</body>
</html>