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
// Uraditi sve kao na predavanju:
// U bazi napraviti tabele: korpa (id, datum_vreme, ukupno)
// stavke_korpe (id, korpa_id, proizvod_id, cena, kolicina)
// proizvodi (id, naziv, cena)
// Popuniti podacima samo tabelu "proizvodi".

// 2.  Napraviti niz stavke_korpe u sesiji kao prazan niz. Svaka stavka ce imati id_proizvoda, naziv, cenu i kolicinu.
// Napraviti 3 funkcije za dodavanje novog proizvoda, menjanje kolicine proizvoda, i brisanje proizvoda iz niza. (ko zna, moze i preko klase :)). 
// Proveriti sve fje pozivanjem. 

// 3.  Napraviti stranicu za prikaz liste proizvoda. Svaki proizvod ima dugme kupi. Dugme pripada formi koja ima i skriveno polje proizvod_id. Forma poziva skriptu koja snima proizvod u niz stavke_korpe u sesiji:
//     - ako proizvod sa tim id-em ne postoji u nizu, onda cita podatke proizvoda sa tim id-em iz baze i upisuje id, naziv, cenu i kolicinu 1 u niz stavke_korpe u sesiji. 
//     - ako proizvod sa tim id-em vec postoji u nizu stavke_korpe, onda dodaje 1 na kolicinu

?>
    
</body>
</html>