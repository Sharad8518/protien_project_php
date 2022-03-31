
<!DOCTYPE html>
<html lang="en">

    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein Plan</title>

    <link rel="stylesheet" href="home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">

     <link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">

     <link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
     <link rel="manifest" href="/site.webmanifest">
     <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">



</head>
<body>


<?php
include("description.php");

?>




<br>
<br>
  <br>  
<h1>Protien Breackfast</h1>

<div class='content'>
<?php

include("config.php");

//for get user id address






$query ="SELECT * FROM `product`";

$data =mysqli_query($conn,$query);






 while($result =mysqli_fetch_assoc($data ))
 
 {
  $pro_id = $result["pro_id"];



    echo "


    <div class='row'>
       
        
    
    
    <div class='circle'>
    
    <h2>Sale</h2>
    
    
    </div>
    <img src=".$result['product_img1']." alt=''>
    <h2>".$result['product_name']."</h2>
    
    <div class='prg'>
    <p >Buy</p><p>".$result['product_prize']."</p><p>/-</p><p>".$result['off_product']."</p><p>Off</p>
    </div>
    <div class='abs'>
    <a href='detail.php?pro_id=$pro_id'>Detail</a>
    
    <a href='index.php?add_cart=$pro_id'>Add Cart</a>
    
    </div>
    </div>";
    
    
    
    



 }



?>
<br>
    <br>






<?php
include("footer.php");


?>


</body>











</html>