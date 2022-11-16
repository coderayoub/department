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
    
        <h1>Votre information </h1> <br>
        <?php
        
         
 mysql_connect("127.0.0.1","ayoub","")or die ("erreur");
mysql_select_db("ayoub") or die ("la base de donne ");
if ($_POST){
    $prenom = $_POST["prenom"];
    echo "votre prenom est " . $prenom."<br>"; 
    $name = $_POST["name"];
    echo "votre nom est ". $name ."<br>"; 
    $level = $_POST["level"];
    echo "votre spicialite est " . $level ; 
        mysql_query('insert into class(prenom,name,level)values("'.$prenom.'","'.$name.'","'.$level.'")')or die ('erreue'.mysql_error());
        
   
} 
         
        
         
        ?> 
        <br><br><br><br><br><br><br><br><br><br><br><br> <br> <br> <br> <br><br> <br> <br>
        <?php include('footer.html');?>
    
</body>
</html>