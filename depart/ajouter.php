<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include('head.html');?> <br>
<style>
   input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid rgb(28, 54, 202);
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
  width: 50%;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 30px;
  width: 35%;
  margin: 50px;
  
  
}
    
</style>
    <section>
    
        
        <div>
            <form action="ajouter2.php" method="post">
              <label for="prenom">First Name</label>
              <input type="text" id="fname" name="prenom" placeholder="Your name..">
          
              <label for="name">Last name</label>
              <input type="text" id="lname" name="name" placeholder="Your last name..">
          
              <label for="country">spicialite</label>
              <select id="level" name="level">
                <option value="SI">SI</option>
                <option value="ISIL">ISIL</option>
                
              </select>
            
              <input type="submit" value="Submit">
            </form>
          </div> <br> <br> <br>

    <?php include('footer.html');?>
</body>
</html>