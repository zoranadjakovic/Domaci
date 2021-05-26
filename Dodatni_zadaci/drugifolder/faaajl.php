<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blue{
            color:blue;
        }
            </style>
</head>
<body>
<!-- Brojevi
4.Napraviti formu za unos 3 naziva proizvoda, njihove cene i prodate kolicine. (ukupno 9 polja).  Prikazati naziv proizvoda koji ima najvecu vrednost (cena* kolicina).
8.Napisati f-ju koja preko while naredbe prikazuje 10 spanova sa textom Span10, span20, span30….span100.


<!-- Stringovi





<?php
// 1.Napraviti dva slucajna broja od 10 do 20. Prikazati sve parne brojeve od manjeg do veceg.
// $a=mt_rand(10,20);
// $b=mt_rand(10,20);

//     for($i = 10; $i <= 20; $i+=2){
//         echo "parni $a";
//     }
//     // Napraviti slucajan broj, izracunati zbir svih parnih do tog broja.
//     $a = mt_rand(1,100);
//     echo $a;
//     $zbir = 0;
//     for($i=1; $i<=$a;$i++){
//         if($i % 2 == 0){
//             $zbir += $i;
//         }
//     }
//     // Uneti rec i broj preko forme. Prikazati unetu rec toliko puta.

//     $a = "Rec";
//     $b = 4;
//     for($i=1; $i<=4;$i++){
//         echo $a;
//     }
//     // 6.Koliko ima brojeva od 500 do 600 koji su deljivi sa 2 a nisu deljivi ni sa 6 ni sa 5.

//     $brojac = 0;
//     for($i=500;$i<=600;$i++){
//         if($i % 2 == 0 && $i % 6 != 0 && $i % 5 != 0){
//             $brojac++;

//         }
//     }
//     echo $brojac;

    // 5..Napraviti formu za unos 5 ocena sa ispita (ocena je 5 - 10), izracunati i prikazati prosecnu ocenu samo polozenih ispita.(zbir polozenih / broj polozenih)
    // $a = 5;
    // $b = 6;
    // $c = 7;
    // $d = 8;
    // $f = 9;
    // $zbir = 0;
    // $brojac = 0;
    // if($a>5){
    //     $zbir += $a;
    //     $brojac ++;
    //     echo $zbir;
        
    // }
    // if($b>5){
    //     $zbir += $b;
    //     $brojac ++;
    //     echo $zbir;
        
    // }
    // if($c>5){
    //     $zbir += $c;
    //     $brojac ++;
    //     echo $zbir;
    // }
    // if($d>5){
    //     $zbir += $d;
    //     $brojac ++;
    //     echo $zbir;
    // }
    // if($f>5){
    //     $zbir += $f;
    //     $brojac ++;
    //     echo $zbir;
    // }
    // echo $zbir / $brojac;

    //NIJE URADJEN URADI Napraviti formu za unos 3 naziva proizvoda, njihove cene i prodate kolicine. (ukupno 9 polja).  Prikazati naziv proizvoda koji ima najvecu vrednost (cena* kolicina).



    // 1. U nekoj recenici po izboru izracunati kojih slova ima vise -  slova "a" ili slova "i". (paprikari - ima isti broj)

    // $recenica = "Recenica po izboru";
    // if(substr_count($recenica, 'a') > substr_count($recenica, 'i')){
    //     echo "a";
    // }
    // else{
    //     echo "i";
    // }

    // UUUUURADIIIIII OVO 2. U nekoj recenici po izboru ispitati da li se prvo pojavljuje slovo "a" ili slovo "i". (pipavo - prvo se pojavljuje i)

    // $rece = "Neka recenica po izboru je super";

    


    // Napisati f-ju koja preko while naredbe prikazuje 10 paragrafa, sa textom pargaraf5, paragraf6 …. paragraf14

    // function para(){
    //     $i=0;
    //     while($i<=10){
    //         echo "Paragraf $i";
        
    //     $i++;
    //     }
    // }
    // para();

    // Uneti neku rec u formu. Prebrojati koliko ima samoglasnika, pa zatim prikazati tu rec toliko puta. Olovka, Olovka, Olovka.

    // $h = "Olovka";
    // $brojac= 0;
    // $zbir = 0;
    
    // for($i=0; $i<strlen($h); $i++){
    //     if($h[$i] == "o" or $h[$i] == "a" or $h[$i] == "e" or $h[$i] == "u" or $h[$i] == "i" ){
    //         $brojac++;
    //         echo "$brojac";
    //         $brojac .= $h;
    //     }
    // }
    // echo "$brojac";
    
    
    // 4.	Napraviti formu za unos jedne reci. Forma poziva php skriptu koja ima:
    //     -	funkciju koja od unete reci prikazuje sve njene samoglasnike. 
    //     Resenje uraditi prvo preko for a zatim preko while.
    //     -	funkciju koja od unete reci pravi novu ciji su svi svi samoglasnici u plavoj boji. 
    //     Uputstvo: od svakog samoglasnika napraviti span sa klasom plava. 
    //     U style ubaciti  plavu boju. Suglasnike prikazivati normalno. Npr: Dragana - Dragana</p>
           
            
            // $rec= "Dragana";
            // function samoglasnici(){
            //     global $rec;
            //     for($i = 0; $i<strlen($rec); $i++){
            //         $slovo = $rec[$i]; //substr($rec, $i, 1)
            //         if($slovo == 'a' or $slovo =='e' or $slovo =='i' or $slovo =='o' or $slovo =='u'){
            //             echo $slovo;  //ieaa
            //         }
            //     }
            // }

            // function boje(){
            // global $rec;
            // $span = "";
            // for( $i = 0; $i<strlen($rec); $i++){
            //     $slovo = $rec[$i]; 
            //     if($slovo == 'a' or $slovo =='e' or $slovo =='i' or $slovo =='o' or $slovo =='u'){
            //         $span = $span."<span class='blue'> $slovo </span>";  
            //     }
            //     else{
            //         $span = $span . "<span> $slovo</span>";
            //     }
            // }
            // return $span;
        
            // samoglasnici();
            // $z = boje();
            // echo "samoglasnici, $z";





    // 4.	Napraviti formu za unos jedne reci. Forma poziva php skriptu koja ima:
    //     -	funkciju koja od unete reci prikazuje sve njene samoglasnike. 
    //     Resenje uraditi prvo preko for a zatim preko while.
    //     -	funkciju koja od unete reci pravi novu ciji su svi svi samoglasnici u plavoj boji. 
    //     Uputstvo: od svakog samoglasnika napraviti span sa klasom plava. 
    //     U style ubaciti  plavu boju. Suglasnike prikazivati normalno. Npr: Dragana - Dragana</p>
        
            <?php
            $rec= $_GET['rec'];
            //dfgd
            function samoglasnici(){
                global $rec;
                for($i = 0; $i<strlen($rec); $i++){
                    $slovo = $rec[$i]; //substr($rec, $i, 1)
                    if($slovo == 'a' or $slovo =='e' or $slovo =='i' or $slovo =='o' or $slovo =='u'){
                        echo $slovo;  //ieaa
                    }
                }
            }
        
        
            ///zvijezdana
            function samoglasnici_r(){
                global $rec;
                $resenje = "";$nije_resenje = "";
                for($i = 0; $i<strlen($rec); $i++){
                    $slovo = $rec[$i]; //substr($rec, $i, 1)
                    if($slovo == 'a' or $slovo =='e' or $slovo =='i' or $slovo =='o' or $slovo =='u'){
                        $resenje = $resenje . $slovo;   // "ieaa"
                        $nije_resenje = $slovo;         // "a" //pamti samo jedno slovo
                    }
                }
                return $resenje;
            }
        
            samoglasnici();
        
            echo samoglasnici_r();
            //ili
            $b = samoglasnici_r();
            echo $b;



            // Napraviti select polje koja kao opcije ima sve brojeve od 1 do 9. Opcije praviti preko ciklusa

            // <form action="zad_9.php">
            // <select name="broj">
            //     <!-- 
            //         <option value="1">1</option>
            //         <option value="2">2</option>
            //         <option value="3">3</option>
            //         <option value="4">4</option>
            //         <option value="5">5</option>
            //         <option value="6">6</option>
            //         <option value="7">7</option>
            //         <option value="8">8</option>
            //         <option value="9">9</option> -->
            //     <?php
            //     for($i = 1; $i<=9; $i++)
            //         echo "<option value='$i'>$i</option>";
            //     ?>
            //     <input type="submit" value="Izracunaj">
            // </select>






?>
</body>
</html>