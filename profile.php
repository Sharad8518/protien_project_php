




<?php

include("config.php");


session_start();

if(!isset($_SESSION['name'])){


header("Location:login.php");


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
<link rel="stylesheet" href="profile.css">


    <link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">

     <link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
     <link rel="manifest" href="/site.webmanifest">
     <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">










</head>
<body>
 <div class="boxPF">

        <h2>Profile</h2>
    <div class="profilelogo">
<img src="image/iconlogo.png" alt="">
<h1><?php echo $_SESSION['name'];?></h1>




</div>

<div class="content">

<div class="addres">
<img src="image/placeholder.png" alt="">
<h3>Address:</h3>
<h5><?php echo $_SESSION['mobile'];  ?></h5>

</div>


<div class="mobile">
    <img src="image/phone-book.png" alt="">
    <h3>Mobile:</h3>
    <h5><?php echo $_SESSION['address']; ?></h5>
    
    </div>

</div>



<a href="updateprofile.php?key_pro=<?php echo$_SESSION['id'];  ?>">Edit Profile</a>





</div>


</body>
</html>