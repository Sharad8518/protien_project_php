<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>


</head>
<body>
    

<form method ="POST">
<br>
<br>
<br>



<input type="text" name="usernm"  placeholder="Username">
<br>
<br>
<input type="text" name="Password"  placeholder="Password">
<br>
<br>
<input type="submit" name="submit"  value="Submit">

   
    
</form>


<?php

include("config.php");

if(isset($_POST['submit'])){

    $user =$_POST['usernm'];


    $password =md5($_POST['Password']);

 $query ="  INSERT INTO `adminrg`( `name`, `password`) VALUES ('$user','$password')";

  
 $data =mysqli_query($conn,$query);

  if($data){

   echo"<script>alert('successfull registrated')</script>";

  }else{

    echo"<script>alert('registrated failed')</script>";


  }

}






?>



</body>
</html>