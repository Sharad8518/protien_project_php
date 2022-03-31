

<?php

if(isset($_GET["get_key"])){

    $red_id =$_GET["get_key"];



include("config.php");


$query ="SELECT * FROM `detail` Where id= $red_id ";

$fire =mysqli_query($conn,$query);

$data =mysqli_fetch_assoc($fire);

$id =$data["id"];
$heading =$data["header"];

$descript =$data["description"];

$image =$data["mainimg"];

}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail </title>
   <link rel="stylesheet" href="updatedetail.css">

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
    
<div class="content">

    <h2>Change Notes Board</h2>


<form>
    
<p style="visibility:hidden"><?php echo$id ?></p>
    <input type="text" placeholder="Header name" value="<?php echo$heading; ?>">
    <textarea name="" id="" cols="30" rows="10"><?php echo$descript;  ?></textarea>


<input type="file" name="updateimg" >

<p style="margin-left: 20px; ">old Image</p>

<img src="<?php echo$image  ?>" style="width: 100px;"alt="">


<input type="submit" value="Change" >



</form>

</div>

</body>
</html>