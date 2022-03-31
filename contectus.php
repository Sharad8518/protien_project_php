<?php

session_start();
error_reporting(0);

if(!isset($_SESSION['name'])){


    header("Location:login.php");
    
    
    }


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactus</title>

<link rel="stylesheet" href="contactus.css">

<link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">

<link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">





</head>
<body>


    
<?php
include("navbar.php");
session_start();

?>
    
<h1>Contact Us</h1>

<div class="contactanim">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_7wwm6az7.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>

   









</div>

<div class="detail">

<div class="addres">
<img src="image/placeholder.png" alt="" srcset="">
<h3>Address</h3>
</div>
<div class="peradres">
<p>Makroniya Near XYZ</p>
</div>


<div class="phone">
<img src="image/phone-book.png" alt="" srcset="">
<h3>Phone</h3>
</div>
<div class="perphone">
<p>8269656605</p>
</div>


<div class="email">
    <img src="image/email.png" alt="" srcset="">
    <h3>Email</h3>
    </div>
    <div class="peremail">
    <p>proteinplan@gmail.com</p>
    </div>


</div>

<div class="inputbox">
   <form  autocomplete="off"  method="post" onsubmit="return valide()">
<textarea name="message" id="textare" cols="40" rows="10" placeholder="How can help you sir....."></textarea><br>
<span class="einput" id="einput"></span>
<br>
<input type="submit" name="submit" value="SEND">
</form> 

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include("footer.php");

session_start();




?>




<?php

include("config.php");



if(isset($_POST['submit'])){


$message =convert_uuencode($_POST['message']);


$query     =  " INSERT INTO `messagebox`( `userid`, `username`, `mobile`, `message`) VALUES ('".$_SESSION['id']."','".$_SESSION["name"]."','".$_SESSION["mobile"]."','$message')";

$data =mysqli_query($conn,$query);

if($data){

    echo"<script>alert('message successfully send')</script>";

}
else{

    echo"<script>alert('message failed')</script>";

}


}



?>







<script>



function valide(){
var area =document.getElementById("textare").value;
if(area==""){

    document.getElementById("einput").innerHTML="**Please write something input Box**";
 document.getElementById("einput").style.color="red";
  
 document.getElementById("einput").style.fontSize="10px";
return false;

}

else
{

    document.getElementById("einput").innerHTML="";

     alert("send message Successfully");
    return true;
    



}
}

</script>


</body>
</html>