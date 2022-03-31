
<?php
include("config.php");


if(isset($_POST['submit'])){
    
$name =$_POST['user'];

$mobile =$_POST['mobile'];

$address =$_POST['address'];

$password =md5($_POST['password']);

$conpassword =md5($_POST['conpassword']);


$gendar =$_POST['one'];


/*$check_query="SELECT * FROM `user` WHERE mobile =$mobile";


$check_fire =mysqli_query($conn,$check_query);


if(mysqli_num_rows($check_fire)>0){

 echo"<script>alert('you already registrad')<script>";

}
else{  */

$query ="INSERT INTO `user`( `name`, `mobile`, `address`, `password`, `conpassword`, `gender`) VALUES ('$name','$mobile','$address','$password','$conpassword','$gendar')";

 $run_query =mysqli_query($conn,$query);

    if($run_query)
    {

  echo"<script>alert('registration Successfully and Login Now')</script>";

  header("Location:login.php");


    }
    else{

        echo"<script>alert('registration failed')</script>";

    }
  
 

}




?>





<!DOCTYPE html>
<html lang="en" >
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrion</title>

<link rel="stylesheet" href="registration.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">

     <link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">

     <link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
     <link rel="manifest" href="/site.webmanifest">
     <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">




</head>
<body>

<div class="circle"></div>
<!--this side description-->


<div class="box">
    <div class="contentadd">
    <img src="image/iconlogo.png"/>
    <h2>Welcome Host</h2>
    <hr>
    <p>this is Protein mart Company We are Make Protein and Good Food which you need for your body growth.We are provide good facilitate for our User  </p>
    
    <a href="login.php">Login</a>
   
</div>

<!--close side description-->
  
<div class="content">

<!--Registration form-->
<form action="" autocomplete="off" method="POST"   onsubmit="return validation()" >
    <h2>Registration</h2>


<input type="text" class="text" placeholder="Enter name" name="user" id="user" >

<span id="userrr"></span>


<input type="text" class="text" placeholder="Enter Mobile" name="mobile" id="mobile"  >
<span id="mobilee"></span>



<input type="text"  class="text" placeholder="Enter Address" name="address" id="address" >
<span id="addresss"></span>



<input type="Password" placeholder="Enter Password" name="password" id="password" >
<span id="passworddd"></span>



<input type="Password" placeholder="Enter Password" name="conpassword" id="conpassword">
<span  id="conpassworddd" ></span>

<div class="hide">
<input type="checkbox" id="passhide" ><p>Show Password</p>

</div>

<div class="gendar">
<input type="radio" name="one" value="male"><p>Male</p> 

<input type="radio" name="one" value="female"><p>Female</p> 
<input type="radio" name="one" value="Both"><p>Both</p>
</div>
<input type="submit" name="submit">



</form>
<!--Registration form close-->

</div>
</div>
</div>

<div class="circle1"></div>
</body>


<script >
   
    //Password hide and show





//validation in javascript
   
function validation(){
var user = document.getElementById("user").value;
var mob = document.getElementById("mobile").value;
var add = document.getElementById("address").value;
var pass =document.getElementById("password").value;
var conpass =document.getElementById("conpassword").value;




if(user==""){

document.getElementById("userrr").innerHTML="**Please write something in box**";
document.getElementById("userrr").style.fontSize="10px";

document.getElementById("userrr").style.color="red";

return false;

}
if(user.length<2){

document.getElementById("userrr").innerHTML="**Please write more then two charecter**";
document.getElementById("userrr").style.fontSize="10px";

document.getElementById("userrr").style.color="red";
   return false;


}
if(!isNaN(user)){

document.getElementById("userrr").innerHTML="**Please write only alphabets not number**";
document.getElementById("userrr").style.fontSize="10px";

document.getElementById("userrr").style.color="red";
   return false;


}
else{
 document.getElementById("userrr").innerHTML="";
     }


if(mob==""){

document.getElementById("mobilee").innerHTML="**Please write something in box**";
document.getElementById("mobilee").style.fontSize="10px";

document.getElementById("mobilee").style.color="red";
return false;


}
if(isNaN(mob)){

document.getElementById("mobilee").innerHTML="**Please write Number only in box**";
document.getElementById("mobilee").style.fontSize="10px";

document.getElementById("mobilee").style.color="red";

return false;
}

if(mob.length<10||mob.length>10){
document.getElementById("mobilee").innerHTML="**Please write  valid number  in box**";
document.getElementById("mobilee").style.fontSize="10px";

document.getElementById("mobilee").style.color="red";
return false;
    }

else{

    document.getElementById("mobilee").innerHTML="";
     }



if(add==""){

document.getElementById("addresss").innerHTML="**Please write something in box**";
document.getElementById("addresss").style.fontSize="10px";

document.getElementById("addresss").style.color="red";

return false;


}
if(add.length<5){

    document.getElementById("addresss").innerHTML="**Please write in detail**";
document.getElementById("addresss").style.fontSize="10px";

document.getElementById("addresss").style.color="red";




  return false;


}
else{

    document.getElementById("addresss").innerHTML="";
     }


if(pass==""){

document.getElementById("passworddd").innerHTML="**Please write something in box**";
document.getElementById("passworddd").style.fontSize="10px";

document.getElementById("passworddd").style.color="red";


  return false;


}
if(pass.length<6){

document.getElementById("passworddd").innerHTML="**Please write make Strong password Like this User@12**";
document.getElementById("passworddd").style.fontSize="10px";

document.getElementById("passworddd").style.color="red";
return false;
}
if(pass.search(/[0-9]/)==-1){

document.getElementById("passworddd").innerHTML="**Please write any Number**";
document.getElementById("passworddd").style.fontSize="10px";

document.getElementById("passworddd").style.color="red";
return false;
}

if(pass.search(/[a-z]/)==-1){

document.getElementById("passworddd").innerHTML="**Please write small charcter**";
document.getElementById("passworddd").style.fontSize="10px";

document.getElementById("passworddd").style.color="red";
return false;
}

if(pass.search(/[A-Z]/)==-1){

document.getElementById("passworddd").innerHTML="**Please write Capital charcter**";
document.getElementById("passworddd").style.fontSize="10px";

document.getElementById("passworddd").style.color="red";
return false;
}

if(pass.search(/[\@\$\~\%\#\&\*]/)==-1){

document.getElementById("passworddd").innerHTML="**Please write atleast  special symbol @#$%&**";
document.getElementById("passworddd").style.fontSize="10px";

document.getElementById("passworddd").style.color="red";
return false;
}





else{

    document.getElementById("passworddd").innerHTML="";
     }

if(conpass ==""){

document.getElementById("conpassworddd").innerHTML="**Please write something in box**";
document.getElementById("conpassworddd").style.fontSize="10px";

document.getElementById("conpassworddd").style.color="red";
return false;


}
if(conpass!==pass){

document.getElementById("conpassworddd").innerHTML="**Password not match**";
document.getElementById("conpassworddd").style.fontSize="10px";

document.getElementById("conpassworddd").style.color="red";
return false;


}










else{

    document.getElementById("conpassworddd").innerHTML="";
     
   

}







   }






</script>





</html>