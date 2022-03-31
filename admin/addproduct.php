
<?php

if(!isset( $_SESSION['adname'])){

header("Location:admin.php");


}


?>






<?php
include("config.php");

if(isset($_POST['submit'])){

$pro_name=$_POST["proname"];
$pro_prize =$_POST["proprize"];
$pro_desc =$_POST["prodesc"];
$pro_off =$_POST["prooff"];

// one image upload in folder

$file_nameone =$_FILES["uploadfirst"]["name"];
$file_tmpone =$_FILES["uploadfirst"]["tmp_name"];
$folderone  ="productimg/".$file_nameone;
move_uploaded_file($file_tmpone,$folderone);

//second image upload in folder

$file_namesecond =$_FILES["uploadsecond"]["name"];
$file_tmpsecond =$_FILES["uploadsecond"]["tmp_name"];
$foldersecond ="productimg/".$file_namesecond;
move_uploaded_file($file_tmpsecond,$foldersecond);

//third image upload in folder

$file_namethird =$_FILES["uploadthird"]["name"];
$file_tmpthird =$_FILES["uploadthird"]["tmp_name"];
$folderthird ="productimg/".$file_namethird;
move_uploaded_file($file_tmpthird,$folderthird);





$query ="INSERT INTO `product`( `product_name`, `product_prize`, `product_desc`, `off_product`, `product_img1`, `product_img2`, `product_img3`) VALUES ('$pro_name','$pro_prize','$pro_desc','$pro_off','$folderone','$foldersecond','$folderthird')";


//run query 


$data = mysqli_query($conn,$query);

if($data){

echo"<script>alert('Add Product Successfully')</script>";



}
else{

  echo"<script>alert(' Product failed')</script>";

}

echo$data;







}







?>










<html>

<head>

<title>Admin</title>

<link rel="stylesheet" href="styleadmin.css"/>

</head>
<body>

 <h2>Add Product</h2>



<div class="content">

    <form action="" autocomplete="off" method="POST"   onsubmit="return validation()" enctype="multipart/form-data" >
       
    
    
    <input type="text" class="text" placeholder="Product name" name="proname" id="user" >
    
    <span id="userrr"></span>
    
    
    <input type="text" class="text" placeholder="Product Prize " name="proprize" id="mobile"  >
    <span id="mobilee"></span>
    
    
    
    <input type="text"  class="text" placeholder="Product Description" name="prodesc" id="address" >
    <span id="addresss"></span>
    


    <input type="text"  class="text" placeholder="Off on Product" name="prooff" id="address" >


    <input type="file" name="uploadfirst"/>
    
   <input type="file" name="uploadsecond" />
    
   <input type="file"  name="uploadthird" />
    
   
    
    
    
    <input type="submit" name="submit" id="btn">
    
    
    
    </form>

</div>
</body>
<script>

  var area =document.getElementById("btn");

area.addEventListener("focus", function(){

 document.getElementById("btn").style.backgroundColor="#ff6b6b";




})





</script>




</html>