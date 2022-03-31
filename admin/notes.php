
<?php

if(!isset( $_SESSION['adname'])){

header("Location:admin.php");


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notes board</title>
  <link rel="stylesheet" href="notes.css">



</head>
<body>
    <div class="box">
         
      <form action="#"  method="POST" enctype="multipart/form-data" onsubmit="return validat()">
         <input type="text" placeholder="header" id="header" name="header" />
         <span id="headd"></span>
        <textarea name="description" id="desc" cols="30" rows="10" placeholder="Description....."></textarea>
        <span id="descc"></span>

        <input type="file" name="upload" />
        <span></span>
        <input type="submit" name="submit" id="btn" />

      </form>

    </div>


<script>

   var are =document.getElementById("btn").addEventListener("click", function(){


    document.getElementById("btn").style.backgroundColor="#ff7675";


   })






  function validat(){

  var head = document.getElementsById("header").value;
  var desc = document.getElementById("desc").value;

    if(head==""){

     document.getElementById('headd').innerHTML="Please write in box";
     return false;
    
    }else{

      document.getElementById('headd').innerHTML="";
      return true;

    }
   if(desc ==""){

       document.getElementById('descc').innerHTML="Please write in box"
       return false;



   }else{

    document.getElementById('descc').innerHTML="";
    return true;


   }









  }



</script>
</body>
<?php
include("config.php");

if(isset($_POST['submit']))
{

$head =$_POST["header"];
$desc =$_POST["description"];


//upload files

$filename =$_FILES["upload"]["name"];
$file_tmpname =$_FILES["upload"]["tmp_name"];
$folder ="headimg/".$filename;

move_uploaded_file($file_tmpname,$folder);





  $query ="INSERT INTO `detail`( `header`, `description`, `mainimg`) VALUES ('$head','$desc','$folder')";

  $data =mysqli_query($conn, $query);

  
if($data){

echo"<script>alert('insert successfull')</script>";

}else{

  echo"<script>alert('insert failed')</script>";

}




}



?>









</html>