<?php
include("config.php");
error_reporting(0);

$query ="SELECT * FROM `detail`";


$fire =mysqli_query($conn,$query);


$result = mysqli_fetch_assoc($fire);


$row1 =$result['header'];

$row2 =$result['description'];

$row3 =$result['mainimg'];

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet " href="contentone.css"/>

    <title>Protein Plan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


    <link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">

<link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">





</head>
<body>
    
<?php

include("headernav.php");

?>

<div class="heading">

<h1><?php echo$row1; ?></h1>

</div>




<div class="boxer">



    <div class="box2">

         


        
        
        <div class="circle"> 
            
            <img src="<?php echo$row3; ?>" alt="">
        
        
        
        </div>
        </div>




<div class="box1">

    <p><?php echo$row2 ;?></p>

  <a href="#">About Us</a>



</div>






</div>


</body>
</html>