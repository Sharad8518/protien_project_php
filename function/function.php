<?php

include("config.php");

//
function getUserip(){

  switch(true){
   
    case(!empty($_SERVER['HTTP_X_REAL_IP'])):return $_SERVER['HTTP_X_REAL_IP'];

    case(!empty($_SERVER['HTTP_CLIENT_IP'])):return $_SERVER['HTTP_CLIENT_IP'];

    case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) :return $_SERVER['HTTP_X_FORWARDED_FOR'];

    default:return $_SERVER['REMOTE_ADDR'];

  }





function addcart(){

global $conn;

  if(isset($_GET['add_cart'])){

    $ip_add=getUserip();

    $p_id =$_GET['add_cart'];

    $product_qty =$_GET['product_qty'];
      
  

  $check_query ="SELECT  * FROM `addcard` WHERE ip_add ='$ip_add' AND pro_id ='$p_id'";


  $run_check = mysqli_query($conn,$check_query);

  if(mysqli_num_rows($run_check)>0){

    echo"<script>alert('this product is already Add')</script>";
 
    echo"<script>window.open('detail.php?pro_id=$p_id','_self')</script>";
 
   }
   else{

    $query ="INSERT INTO `addcard`(`pro_id`, `ip_add`, `qty`) VALUES ('$ip_add','$p_id','$product_qty')";


    $run_query=mysqli_query($conn,$query);
    
    echo"<script>window.open('detail.php?pro_id= $p_id','_self')</script>";

    echo"<script>alert('Add Cart Successfully')</script>";

   }




   }
  
   

   

}
}


?>