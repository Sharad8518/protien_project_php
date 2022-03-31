<?php

include("config.php");

$product_id =$_POST["id"];

$query ="DELETE FROM `product` WHERE pro_id={$product_id}";


if(mysqli_query($conn,$query)){


echo 1;


}else{

echo 0;

}








?>