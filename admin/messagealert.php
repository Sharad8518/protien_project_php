







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>

<link rel="stylesheet" href="messagest.css">

</head>
<body>
    <h1>Message Box</h1>

<div class="content" id="row">


</div>



<script src="js/jquery.js"></script>
<script>

$(document).ready(function(){

    $.ajax({

    url:"message_get.php",
    type:"POST",
    success :function(data){
    $("#row").html(data);



    }

    });








});









</script>






</body>
</html>