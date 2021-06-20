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
    // Metoda prikazi_destinacije koja prikazuje sva putovanja (drzava, grad, datum_polaska, datum_povratka)
    // Metoda prikazi_putnike prikazuje sve putnike i njihovo putovanje (ime_prezime, drzava, grad, datum_polaska, datum_povratka)
    // Metoda otkazi_rezervaciju koja za dati  broj_pasosa otkazuje sva njegova putovanja
    
    // Napraviti obekat ove klase i pozvati sve metode po jednom za proveru.
    
    class Baza{
        public $conn;

        function __construct($baza){
            $this->conn = new mysqli('localhost', 'root', '', 'turisticka_agencijaa');
            
            if ($this->conn->connect_error)
                die('Greska: '. $this->conn->connect_error);
            // else
            //     echo 'Konektovan!';
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

        function prikazi_destinacije(){
            $r = $this -> izvrsi_select(
                "SELECT 'drzava', 'grad', 'datum_polaska', datum_povratka' FROM 'putovanja' JOIN 'destinacije' ON putovanja.'destinacija_id'=destinacije.'id';"
            );
            if($r["uspesno"] == true){
                foreach($r ['niz'] as $putovanje){
                    echo $putovanje['drzava']. " " .$putovanje['grad']. " " .$putovanje['datum_polaska']. " " .$putovanje['datum_povratka'];
                }
            }
            else {
                die;
            }

        }
        
        function prikazi_putnike(){
            $r = $this->izvrsi_select(
                "SELECT CONCAT (putnici.ime, '', putnici.prezime)AS ime_prezime, drzava, grad, datum_polaska, datum_povratka FROM 'putnici' JOIN 'spisak_putnika' ON putnici.`broj_pasosa`=spisak_putnika.`broj_pasosa` JOIN `destinacije` ON id_destinacije=destinacije.id JOIN `putovanja` ON destinacije.id=putovanja.id"
            );
            if($r["uspesno"] == true){
                foreach($r['niz'] as $putovanje){
                    echo $putovanje['ime_prezime']." ".$putovanje['drzava']." ".$putovanje['grad']." ".$putovanje['datum_polaska']." ".$putovanje['datum_povratka']."<br />";
                }
            } 
            else {
                die;
            }  
        }
        // Metoda otkazi_rezervaciju koja za dati  broj_pasosa otkazuje sva njegova putovanja
            function otkazi_rezervaciju($broj_pasosa){
                $uspesno = $this -> conn -> query("DELETE FROM `spisak_putnika` WHERE broj_pasosa = $broj_pasosa");
                if($uspesno === false) {
                    echo "Greska!";
                } 
                else {
                    $broj_obrisanih = $this -> conn -> affected_rows;
                    if($broj_obrisanih > 0) {
                        echo "Obrisano je: $broj_obrisanih.";
                    } 
                    else {
                        echo "/";
                    }
                }
            }    
        }
    }
    ?>
</body>
</html>