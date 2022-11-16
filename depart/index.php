<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<?php include('head.html');?>

    

<br> <br>
    <section>
    <strong>BIENVENUE<span style="color: #000000; font-size: 10pt;">&nbsp;sur le site du département </span></strong>
        <h1>page d'acceill </h1>
        <p style="font-family" >Site de gestion des etudiant du departement d'informatique de l'université 20 Aout 1955 skikda</p>
        <br/>
    </section>
    <style>

.wrapper{
  position: relative;
  width: 500px;
  height: 400px;
}
.wrapper .img{
  position: absolute;
  width: 100%;
  height: 100%;
}
.wrapper .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  clip-path: circle(0% at 0% 100%);
  transition: all 0.7s;
}
#one:checked ~ .img-1 img{
  clip-path: circle(150% at 0% 100%);
}
#two:checked ~ .img-1 img,
#two:checked ~ .img-2 img{
  clip-path: circle(150% at 0% 100%);
}
#three:checked ~ .img-1 img,
#three:checked ~ .img-2 img,
#three:checked ~ .img-3 img{
  clip-path: circle(150% at 0% 100%);
}
#four:checked ~ .img-1 img,
#four:checked ~ .img-2 img,
#four:checked ~ .img-3 img,
#four:checked ~ .img-4 img{
  clip-path: circle(150% at 0% 100%);
}
#five:checked ~ .img-1 img,
#five:checked ~ .img-2 img,
#five:checked ~ .img-3 img,
#five:checked ~ .img-4 img,
#five:checked ~ .img-5 img{
  clip-path: circle(150% at 0% 100%);
}
.wrapper .sliders{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 99;
  display: flex;
}
.wrapper .sliders label{
  border: 2px solid rgb(142,197,252);
  width: 13px;
  height: 13px;
  margin: 0 3px;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.3s ease;
}
#one:checked ~ .sliders label.one,
#two:checked ~ .sliders label.two,
#three:checked ~ .sliders label.three,
#four:checked ~ .sliders label.four,
#five:checked ~ .sliders label.five{
  width: 35px;
  border-radius: 14px;
  background: rgb(142,197,252);
}
.sliders label:hover{
  background: rgb(142,197,252);
}
input[type="radio"]{
  display: none;
}

    </style>
    
    
    
    <div class="wrapper">
      <input type="radio" name="slide" id="one" checked>
   
      <input type="radio" name="slide" id="four">
      <input type="radio" name="slide" id="five">
      <div class="img img-1">
        <img src="img-1.jpg" alt="">
      </div>
      
      <div class="img img-3">
        <img src="img-3.jpg" alt="">
      </div>
      <div class="img img-4">
        <img src="img-4.jpg" alt="">
      </div>
      <div class="img img-5">
        <img src="img-5.jpg" alt="">
      </div>
      <div class="sliders">
        <label for="one" class="one"></label>
        
        
        <label for="four" class="four"></label>
        <label for="five" class="five"></label>
      </div>
    </div>

</center> <br> <br>
<?php include('footer.html');?>



</body>
</html>