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
 $x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];

// <!-- 1.Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)

   $y = array_map(function($osoba){
      for($i=0;$i<count($x);$i++){
      $osoba['godina_staza'][$i]= mt_rand(1,3);
      }
      return $osoba;
   }$x);

   print_r($x);
   // <!-- 2.Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba) -->
    
usort($x,function($a,$b){
   if($a['godina_staza'] == $b['godina_staza']){
      if($a['godine']>$b['godine']){
         return -1;
      }
      else{
         return 1;
      }
   }
   if($a['godina_staza']>$b['godina_staza']){
      return -1;
   }
   else{
      return 1;
   }
});
// <!-- 3.Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter) --> 
   $max = $x['godina_staza'=>0];
   foreach($x as $osoba){
      if($max['godina_staza'] < $osoba['godina_staza']){
            $max=$osoba;
      }

   }
   $najveci_staz = array_filter($x, function($osoba){
      if($osoba['godina_staza'] == $max['godina_staza']){
         return true;
      }
      else{
         return false;
      }
   });
   print_r($najveci_staz);
   
//    Najveći element i njegova pozicija (njegov index):
// $max = $x[0]; $ind = 0;
// for($i=1; $i<count($x); $i++)
//     if($max < $x[$i]){ 
//         $max = $x[$i]; $ind = $i;
//     }
// echo "$max, $ind";
// ILI
// $max = -INF;  //minus beskonacno
// foreach($x as $i=>$el){
//     if($max < $el){ 
//         $max = $el; $ind = $i;
//     }
// }
// echo "$max, $ind";
// ILI
// $max = max($x);
// $ind = array_search($max, $x);
// echo "$max, $ind";
?>
</body>
</html>