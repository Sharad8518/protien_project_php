<?php
include("config.php");


$sql ="SELECT * FROM `product`";

$fire =mysqli_query($conn,$sql) or die("SQL Query Failed.");

$result ="";

if(mysqli_num_rows($fire)>0){

$result ='<table border="1" width="100%" cellspacing="0" cellpadding="10px">

<tr>
<th>id</th>
<th>Product name</th>
<th>Product Prize</th>
<th>Product Description</th>
<th>Discount</th>
<th>Product Image1</th>
<th>Product Image2</th>
<th>Product Image3</th>
<th>Product Delete</th>
<th>Product Edit</th>
</tr>';

while($row = mysqli_fetch_assoc($fire)){

     $getid =$row["pro_id"];


    $result .="<tr>
    
    <td>{$row["pro_id"]}</td>
    
    <td>{$row["product_name"]}</td>
    
    <td>{$row["product_prize"]}</td>
    
    <td>{$row["product_desc"]}</td>
    
    <td>{$row["off_product"]}</td>
    
    <td>{$row["product_img1"]}</td>
    
    <td>{$row["product_img2"]}</td>
    
    <td>{$row["product_img3"]}</td>
    
    <td><img src='image/delete.png'class='delete-btn' id='delete' data-id='$getid'></td>
    <td><a href='updateproduct.php?id_key=$getid'><img src='image/edit.png' alt='' id='edit' style='width:40px;height:40px'></a></td>
    
    
    </tr>";
}

    $result.="</table>";

    mysqli_close($conn);

echo $result;




}else{


    echo"<h2>recode not find</h2>";

}




?>