








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel</title>

    <link rel="stylesheet" href="adminpanel.css">
</head>
<body>
    
<div class="main">

<div class="sidemenu">

<ul>

<li><a href="">Add Product</a></li>

<li><a href="">Add Notes Board</a></li>

<li><a href="">Notes Board</a></li>

<li><a href="">Notes  detail</a></li>

<li><a href="">Add Tiffin Box</a></li>

<li><a href="">Tiffin Box</a></li>

<li><a href="">User information</a></li>

<li><a href="messagealert.php">Message Box</a></li>

<li><a href="">Delivery Order</a></li>


</ul>


</div>


<div class="boxcontact">

<h1>Admin Panel</h1>

<table >

<td id="table-load"></td>










</tr>




</table>

</div>







</div>


<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">

$(document).ready(function(){

$.ajax({

url:"ajax_pro_get.php",

type:"POST",

success : function(data){

$("#table-load").html(data);

}



});

$(document).on("click",".delete-btn",function(){

    if(confirm("Do you really want to delete this Product")){



    

    var productid =$(this).data("id");
    var element =this;


    $.ajax({

      url:"delete.php",
      type:"POST",
    data :{id:productid},

    success:function(data){

     if(data==1){

    $(element).closest('tr').fadeOut();

    }else{
    
        alert('not delete Product');


    }

   }








    });


    }




});





});
</script>
</body>
</html>