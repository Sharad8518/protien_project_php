<?php
 include("config.php");

 if(isset($_GET['key_pro']))
  {
  
    $profile_key =$_GET['key_pro'];


   $query ="SELECT `id`, `name`, `mobile`, `address` FROM `user` WHERE id= $profile_key";

  $query_fire =mysqli_query($conn, $query);

   $row =  mysqli_fetch_assoc($query_fire);

    
   $userid =$row ['id'];

   $username =$row['name'];

   $usermobile =$row['mobile'];


   $useraddress =$row['address'];


  

 }









?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>

<link rel="stylesheet" href="updateprofile.css">


<link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">

     <link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
     <link rel="manifest" href="/site.webmanifest">
     <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">




</head>
<body>
    

<div class="box">
  
    <h2>Change Profile</h2>
   <form action="" method="POST">

   <input type="text" style="visibility: hidden;"  placeholder="Change name" name="userid" value="<?php echo$userid ;?>">

    <input type="text" name="username" placeholder="Change name" value="<?php echo $username;?>">

    <input type="text" name="usermobile" placeholder="Change mobile" value="<?php  echo $usermobile;?>">

    <input type="text" name="useraddress" placeholder="Change Address" value="<?php echo $useraddress;  ?>">
    <span id="msg"></span>
    <input type="submit" name="submit" value="Change Profile">
    
</form>




<?php

if(isset($_POST['submit'])){

    $upid =$_POST['userid'];
$upname =$_POST['username'];
$upmobile =$_POST['usermobile'];
$upaddress =$_POST['useraddress'];

$getdata ="UPDATE `user` SET `name`='$upname',`mobile`='$upmobile',`address`='$upaddress' WHERE id =$upid";


$data_fire =mysqli_query($conn,$getdata);

if($data_fire){

echo" 
 <script>document.getElementById('msg').innerHTML='Change Profile Successfully';</script>


";



}else{

    echo" 
    <script>document.getElementById('msg').innerHTML='not Change Profile';</script>
   
   
   ";

}




}







?>








</div>







</body>
</html>