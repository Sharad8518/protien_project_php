<?php
include("config.php");


$query ="SELECT * FROM `messagebox`";

$data = mysqli_query($conn,$query);

$output ="";

if(mysqli_num_rows($data)>0){

while($row=mysqli_fetch_assoc($data)){

  $result =convert_uudecode($row['message']);

 $output.="
 <div class='content' >

 <div class='row'>
<img src='image/delete.png' alt='' id='delete'>
<h2>{$row["username"]}</h2>
<h3>{$row["mobile"]}</h3>

<p class='mgs'>{$result}</p>




</div>




 
 
 
 
 
 
 
 ";




}

echo"</div>";


mysqli_close($conn);

echo $output;


}else{

    echo"<h2>recode not find</h2>";


}









?>