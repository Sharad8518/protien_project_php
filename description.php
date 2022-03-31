

<?php
include("config.php");
error_reporting(0);

$query ="SELECT * FROM `detail`";


$fire =mysqli_query($conn,$query);


$result = mysqli_fetch_assoc($fire);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet " href="description.css"/>

    <title>Protein Plan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


</head>
<body>
    
    <div class="navbar" id="navbar" >
        <img src="image/icons8-menu-24.png" alt="" class="menu" id="menu">
         <img src="image/close.png" alt=""  style="visibility: hidden;" class="menu" id="close">
        

    <img src="image/iconlogo.png" alt="">
    <p>Protein Plan</p>
    
    <ul id="boxmn">
    <li><a href="index.php" >Home</a></li>
    
    <li><a href="exerices.php">Exercise</a></li>
    
    <li><a href="tiffinbox.php"> TiffinBox</a></li>
    
    <li><a href="">Shopping Card</a></li>

    <li><a href="contectus.php">Contact us</a></li>
    <li><a href="login.php">Login</a></li>
    
    
    <li><a href="signout.php">Sign Out</a></li>
    
    
    
    
    
    
    
    
    </ul>
    
    
    
    
    </div>



</div>







<div class="heading">

<h1>Welcome Host</h1>

</div>

<div class="usernm">
<a href="profile.php">Hi<?php

echo $_SESSION["name"]; ?></a>


</div>



<div class="boxer">



    <div class="box2">

         


        
        
        <div class="circle"> 
            
            <img src="<?php echo$result['mainimg'] ; ?>" alt="">
        
        
        
        </div>
        </div>




<div class="box1">

    <p><?php echo$result['description'];?></p>

  <a href="#">About Us</a>



</div>






</div>

<script>

var menucli =document.getElementById("menu").addEventListener("click",function(){



    menucli =document.getElementById("menu").style.visibility="hidden";
    
    menucli =document.getElementById("close").style.visibility="visible";

    menucli =document.getElementById("boxmn").style.marginLeft="10px";

});


var closecli =document.getElementById("close").addEventListener("click",function(){


    closecli =document.getElementById("menu").style.visibility="visible";
    
    closecli=document.getElementById("close").style.visibility="hidden";

    closecli =document.getElementById("boxmn").style.marginLeft="-100%";
   

});


</script>




</body>
</html>