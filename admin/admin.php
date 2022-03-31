<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
    
    <div class="box">
    <h2>Admin Login</h2>

<form action="<?php $_SERVER['PHP_SELF'];?>" autocomplete="off" method="POST" >
<input type="text" placeholder="Username" name="usern" id="user">
<span id="userr"></span>

<input type="Password" placeholder="Password" name="password">

<input type="submit" name="submit" value="Login">


</form>
<?php

include("config.php");

if(isset($_POST['submit'])){

    $user =$_POST['usern'];

    $passsword =md5($_POST['password']);


    $query ="SELECT * FROM `adminrg` WHERE name = '{$user}' AND password ='{$passsword}'";


    $data =mysqli_query($conn, $query) or die("Query failed");



    if(mysqli_num_rows($data)>0){

          
           header("Location:adminpanel.php");


           echo"<script>alert('Login Successfully')</script>";


        }


        
        else{

            echo"<script>alert('Password not match')</script>";



    }

   


}














?>


</div>
</body>


















</html>