<!DOCTYPE html>
<html lang="en" >
<head>

<title>Login</title>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">

<link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">


<link rel="stylesheet" href="login.css"/>

</head>
<body>

<div class="circle"></div>

<div class="box">
    <div class="contentadd">
    <img src="image/iconlogo.png"/>
    <h2>Welcome Host</h2>
    <hr>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi enim aliquid voluptates, quis consectetur excepturi aut? Laboriosam </p>


   <a href="registration.php">Registration</a>


    </div>


  
<div class="content">

<h2>Login Here</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" autocomplete="off" method="POST" >
    



<input type="text" placeholder="Enter Name" name="username"  required>

<span></span>



<input type="Password" placeholder="Enter Password" name="password" required >
<span></span>


<input type="submit" name="submit" value="login">

<span id="megg"></span>



</form>

<?php

include("config.php");

if(isset($_POST['submit'])){

 $username =$_POST['username'];

 $password =md5($_POST['password']);



  $query ="SELECT * FROM `user`WHERE name = '{$username}' AND password = '{$password}'";

 
   $data =mysqli_query($conn,$query) or die("Query failed");



   if(mysqli_num_rows($data)>0)
   {


     while($row=mysqli_fetch_assoc($data))
     {

     session_start();
     $_SESSION["name"]= $row['name'];
     $_SESSION["mobile"] =$row['mobile'];
     $_SESSION["address"] =$row['address'];
     $_SESSION["id"] =  $row['id'];

   

    header("Location:index.php");
   

    

      
    
     }


   }else{

      echo"<script>
      
     alert('username and Password not match');
     
      
      
      </script>";

   }

  



}



?>



</div>
</div>
</div>

<div class="circle1"></div>
</body>





</html>