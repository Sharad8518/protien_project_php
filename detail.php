<!DOCTYPE >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>

    <link rel="stylesheet" href="detail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

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

include("config.php");
error_reporting(0);
if(isset($_GET['pro_id'])){

  $pro_id=$_GET['pro_id'];

  $getdata ="SELECT * FROM `product` where pro_id='$pro_id'";
  
  $rundata = mysqli_query($conn,$getdata);
  

   $row_product =mysqli_fetch_array($rundata);

   $product_id = $row_product['pro_id'];
   $product_name = $row_product['product_name'];
   $product_prize = $row_product['product_prize'];
  $product_decs = $row_product['product_desc'];
  $product_off = $row_product['off_product'];
  $product_img1 = $row_product['product_img1'];
$product_img2 = $row_product['product_img2'];
$product_img3 = $row_product['product_img3'];




}






?>




<div class="detailbox">

<br>
    <h1><?php echo $product_name  ?></h1>

    <div class="imgslide"> 
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo  $product_img1 ?>" class="d-block w-100 h-90" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo  $product_img2 ?>" class="d-block w-100 h-90" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo  $product_img3 ?>" class="d-block w-100 h-90" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>

<div class="boxdesc">

<ul>
<li><?php echo $product_decs  ?> </li>





</ul>


<br>

<?php

include("function/function.php");





?>



<form  method="GET">
<input type="text" placeholder="How Much?" name="product_qty"/>





<div class="prizelist">

<p>INR</p><p><?php echo$product_prize ?></p><p>/- Per Packed</p>

<p><?php echo$product_off  ?></p><p>OFF</p>

</div>
<div class="buyer">
<a href="">Buy Now</a>

<a href="index.php?add_cart=<?php echo$product_id; ?>">


Add card</a>


</div>

</form>
</div>




</div>


<?php

if(isset($_GET['add_cart'])){

  include("config.php");
session_start();



  $qty =$_GET['product_qty'];

  $prod_id =$_GET['add_cart'];

  $query ="INSERT INTO `card`(`pro_id`, `ip_add`, `qty`) VALUES ('$prod_id','".$_SESSION["id"]."','$qty')";


$fire =mysqli_query($conn,$query);


if($fire){


  echo"<script>alert('Add in Cart')</script>";



}else{


  echo"<script>alert(' not Add in Cart')</script>";
}


}







?>


</body>

</html>