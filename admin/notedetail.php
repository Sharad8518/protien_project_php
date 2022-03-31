
<?php
include("config.php");


$query ="SELECT * FROM `detail` ";

$fire =mysqli_query($conn,$query);

$row =mysqli_fetch_assoc($fire);

$id =$row["id"];
$heading =$row["header"];

$descript =$row["description"];

$image =$row["mainimg"];



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Detail</title>

    <link rel="stylesheet" href="notedetail.css">

</head>
<body>
    <div class="content">


<h2><?php echo$heading; ?></h2>

<img src="<?php echo$image;?>" class="logoimg"  alt="">


<p><?php echo$descript;?></p>



<a href="updatenoteboard.php?get_key=<?php echo$id;  ?>" ><img src="image/edit.png" alt="" class="edit"></a>






    </div>


</body>
</html>