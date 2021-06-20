<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <style>
        .logo{
            float: left;
            position: fixed;
            color: rgb(255, 255, 177);
            font-family: 'Open Sans', sans-serif;;
            font-style: italic;
            font-size: 50px;
            padding: auto;
            margin-left: 50px;
            border: 1px solid rgb(255, 255, 177);
            padding: 30px;
            
        }
        body{
            background-image: url('vinonaslovna.jpg');
            background-size:cover;
        }
       
        .meni_ul{
            font-size: 30px;
            float: right;
            list-style-type: none;
            padding: 25px; 
            padding-right: 75px;
            color: white;
            margin-left: 30px;
            font-family: 'Open Sans', sans-serif; 
        
        }
        .meni_ul:hover{
            cursor: pointer;

        }
        li{
            display: inline;
            padding: 10px;
            position: sticky;
        } 

        .ime{
            color: pink;
            font-family: 'Open Sans', sans-serif;
            font-weight:;  
            text-align: center;
            top: 30px;
            left: 50px;
            padding: 8%;
            background-image: url(me.png);
            background-repeat: no-repeat;
            background-position: center;
           
        }
        .naslov{
            margin-top: 80px;
            color: white; 
            text-align: center;  
            font-size: 80px;
            font-weight: bold;
            font-family: 'Megrim', cursive;

            
        }
        .recenica{
           color: white;      
           background-color: rgba(0, 0, 0, 0.514);
           padding: 15px; 
           margin-top: 10px;
           font-size: 20px;
           font-family: 'Open Sans', sans-serif;
           
        }
        .rec_vinarija{
            color: rgb(255, 255, 177);
            font-size: 30px;
            font-style: italic;
            
        }
        .rose{
            color: rgb(255, 255, 177);
            
        }
        



-------------------------------------------------------------------------------------------------------------------





  .ponuda {
  font-family: 'Open Sans', sans-serif;
  font-size: 22px;
  color: pink;
  letter-spacing: 2px;
  margin-top: 1000px;
}

.wrapper {
  display: flex;
  justify-content: center;
  align-items: contain;
  > * {
    margin: 5px;
  }
}

.media {
  padding:200px;
  width: 300px;
  height: 400px;
  overflow: hidden;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: contain;
  img {
      max-width: 100%;
      height: auto;
    }
}

.layer {
  opacity: 0;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 10px;
  height: 50%;
  background: #FFF;
  color: #151E3F;
  transition: all 0.9s ease;
  cursor: pointer;
  p {
    transition: all 0.9s ease;
    transform: scale(0.1)
  }
}

p {
  font-family: 'Open Sans', sans-serif;
  text-align: center;
  font-size: 25px;
  letter-spacing:2px;
}

.media:hover .layer {
    color:black;
  opacity: 0.8;
  width: 75%;
  transition: all 0.5s ease;
  
  p {
    transform: scale(1);
    transition: all 0.9s ease;
  }
}

@media (max-width: 800px){
  body {
    transform: scale(0.6);
  }
}

@media (max-width: 600px) {
    .wrapper {
    display: block;
    > * {
      margin: 10px;
    }
  }
}
        </style>
</head>
<body>
<div class="meni">
        <ul class="meni_ul">
            <a target="_top"><li>O nama</li></a>
            <a target="_top"><li>Vina</li></a>
            <a target="_top"><li>Online prodaja</li></a>
            <a target="_top"><li>Kontakt</li></a>
            <a target="_top"><li>Korpa</li></a>
        </ul>
    </div>
    <div>
    <p class="logo">RW</p>

    <div class="ime"><p class="naslov"> VINARIJA <br> <span class="rose">"RW"</span> </span></br></p><br>
        <p class="recenica"><span class="rec_vinarija"> Vinarija "RW". </span>Ponosna na svoju bogatu istoriju i viziju vinarstva koja se zasniva na stvaranju specifičnih i karakternih vina sa pečatom podneblja.</p><br>
    
<br>
</br>

<h1 class="ponuda">Naša ponuda vina:</h1>
<div class="wrapper">
<div class="media">
<div class="layer">
    <p>ROZE VINA</p>
  </div>
<img src="vv.jpg" alt="Klikni za detaljnije" />
</div>
 <div class="media">
<div class="layer">
    <p>CRVENA VINA</p>
  </div>
<img src="cc.jpg" alt="Klikni za detaljnije" />
</div>
   <div class="media">
<div class="layer">
    <p>BELA VINA</p>
  </div>
<img src="bb.jpg" alt="Klikni za detaljnije" />
</div>
</div>
</body>
</html>