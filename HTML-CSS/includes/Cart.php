<?php
require 'common.php';
if (!isset($_SESSION['user_id'])
{header('location: login.php');}
$user_id=$_GET['user_id'];
$result=mysqli_query($con, "SELECT * FROM user_items. INNER JOIN items. ON user_items.id = items.id;
$mysqli_num_rows = mysqli_num_rows($result);
if (mysqli_num_rows == 0)
{echo “Add items to the cart first!”; }
else
{ $sum=0;
  while(user_items.id!=NULL)
  {
   $sum+=items.price;
   ++user_items.id;
   
   }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Lifestyle store | Cart</title>
<style>
    body{ 
    width: 100%; 
    height: 100%; 
    margin: 0; }
a{ 
    text-decoration: none; 
    background-color: transparent;
    color:#ededed; 
}
 
.form-group{
margin-bottom:15px;
}
footer{
padding: 10px 0;
background-color: #101010;
color:#9d9d9d;
bottom:0;
width: 100%;
}
</style>
</head>
<body>
    
<?php
include "header.php"
?>
<br><br><br><br><br>
<div class="container">
<div class="col-sm-6 col-sm-offset-3" >
<table class="table">
<tbody>
<tr><th>Item Number</th><th>Item Name</th><th>Price</th><th> </th></tr>
<?php

?>
<tr><td> </td><td>Total</td><td><?php echo "Rs.".$sum; ?></td> <td><a href="success.html"><input type="submit" class="btn btn-primary" value="Confirm Order"></a></td>
</tbody>
</table>
</div></div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br>
<?php
include "footer.php"
?>
</body>
</html>
