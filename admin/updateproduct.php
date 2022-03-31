<?php


//get data for update start

include("config.php");

error_reporting(0);

if(isset($_GET['id_key'])){

    $pro_id =$_GET['id_key'];


$query ="SELECT * FROM `product` WHERE pro_id =
$pro_id";

    $fire =mysqli_query($conn,$query);


$row =mysqli_fetch_assoc($fire);


$product_id=$row['pro_id'];

$pro_name =$row['product_name'];

$pro_prize =$row['product_prize'];

$pro_desc =$row['product_desc'];

$pro_off =$row['off_product'];

$pro_img1 =$row['product_img1'];

$pro_img2 =$row['product_img2'];

$pro_img3 =$row['product_img3'];


}

//get data for update end

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product </title>

<link rel="stylesheet" href="updateproduct.css">
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
    
<div class="updatebox">
<h2>Update Product</h2>


    <form action="" method="POST" enctype="multipart/form-data">

    <input type="text" style="visibility:hidden"  placeholder="Product Description" name="u_id" value="<?php echo$product_id; ?>"  >
<input type="text"  placeholder="Product name" name="u_name" value="<?php echo$pro_name;?>" >

<input type="text" name="u_prize"  placeholder="Product Prize" value="<?php echo $pro_prize; ?>" >


<input type="text" name="u_desc"  placeholder="Product Description" value="<?php echo$pro_desc;     ?>"  >


<input type="text" name="u_off"  placeholder="OFF on Product" value="<?php echo$pro_off;     ?>"  >


<input type="text" name="old_img1" style="visibility:hidden"  placeholder=""  value="<?php echo$pro_img1; ?>">

<input type="file" name="update_img1">

<input type="text" name="old_img2" placeholder="" style="visibility:hidden"  value="<?php echo$pro_img2; ?>">

<input type="file" name="update_img2">
<input type="text" name="old_img3"  style="visibility:hidden"  value="<?php echo $pro_img3  ?>">

<input type="file" name="update_img3"  >

<input type="submit" name="submit" value="Update Product" id="btn">

</form>

</div>

<!-- update product start-->

<?php

include("config.php");

if(isset($_POST['submit'])){

$up_id =$_POST['u_id'];

$up_name =$_POST['u_name'];

$up_prize =$_POST['u_prize'];

$up_desc =$_POST['u_desc'];

$up_off =$_POST['u_off'];

$old_img1 =$_POST['old_img1'];

$old_img2 =$_POST['old_img2'];

$old_img3 =$_POST['old_img3'];



if(isset($_FILES['update_img1']['name'])&&($_FILES['update_img1']['name']!="")){

$temp_name1=$_FILES['update_img1']['tmp_name'];
$product_name1 =$_FILES['update_img1']['name'];

$folderone ="productimg/".$product_name1;

unlink("productimg/".$old_img1);

move_uploaded_file($temp_name1,$folderone);

}else{

    $folderone =$old_img1;

}

if(isset($_FILES['update_img2']['name'])&&($_FILES['update_img2']['name']!='')){

$temp_name2 =$_FILES['update_img2']['tmp_name'];
$product_name2=$_FILES['update_img2']['name'];

$foldersecond ="productimg/".$product_name2;

unlink("productimg/".$old_img2);

move_uploaded_file($temp_name2,$foldersecond);

}else{

    $foldersecond =$old_img2;

}
if(isset($_FILES['update_img3']['name'])&&($_FILES['update_img2']['name']!='')){

$temp_name3 =$_FILES['update_img3']['tmp_name'];

$product_name3=$_FILES['update_img3']['name'];


$folderthird ="productimg/".$product_name3;

unlink("productimg/".$old_img3);

move_uploaded_file($temp_name3,$folderthird);


}else{

    $folderthird = $old_img3;

}



$updata ="UPDATE `product` SET `product_name`='$up_name',`product_prize`='$up_prize',`product_desc`='$up_desc ',`off_product`='$up_off',`product_img1`='$folderone',`product_img2`='$foldersecond',`product_img3`='$folderthird ' WHERE pro_id=$up_id";



$fire =mysqli_query($conn,$updata);


if($fire){

echo"<script>alert('Update Product Successfully')</script>";

}else{

    echo"<script>alert('Update Product failed')</script>";

}

}

?>
<!-- update product end-->

<script src="update.js"></script>




</body>
</html>