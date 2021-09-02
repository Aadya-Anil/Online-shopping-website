<?php
require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Lifestyle store | Products</title>
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

.row{
margin-right: -15px;
margin-left: -15px;
}

</style>
</head>
<body>
<?php
include header.php;
include Check-if-added.php;
?>
<br><br><br><br><br>
<div class="container">
<div class="jumbotron">
<h1>Welcome to our Lifestyle Store!</h1>
<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
</div></div>

<div class="row">
<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/5.jpg" alt="" >
<div class="caption">
<h3>Cannon EOS</h3>
<p>Price:Rs.36000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(1))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/2.jpg" alt="" >
<div class="caption">
<h3>Sony DSLR</h3>
<p>Price:Rs.40000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(2))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/3.jpg" alt="" >
<div class="caption">
<h3>Sony DSLR</h3>
<p>Price:Rs.50000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(3))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/4.jpg" alt="" >
<div class="caption">
<h3>Olympus DSLR</h3>
<p>Price:Rs.80000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(4))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>

</div>
</div>
</div>
<div class="row">

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/9.jpg" alt="" >
<div class="caption">
<h3>Titan #301</h3>
<p>Price:Rs.13000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(5))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/10.jpg" alt="" >
<div class="caption">
<h3>Titan Model #201</h3>
<p>Price:Rs.3000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(6))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>

</div><div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/11.jpg" alt="" >
<div class="caption">
<h3>HMT Milan</h3>
<p>Price:Rs.8000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(7))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/12.jpg" alt="" >
<div class="caption">
<h3>Faber Luba #111</h3>
<p>Price:Rs.18000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(8))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>
</div>
<div class="row">

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/8.jpg" alt="">
<div class="caption"><br>
<h3>H&W</h3>
<p>Price:Rs.800.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(9))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/6.jpg" alt="" >
<div class="caption">
<h3>Luis Phillp</h3>
<p>Price:Rs.1000.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(10))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/13.jpg" alt="" >
<div class="caption">
<h3>John Zok</h3>
<p>Price:Rs.1500.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(11))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>
</div>
</div>

<div class ="text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
 <img src="Bootstrap/14.jpg" alt="" >
<div class="caption">
<h3>Jhalsani</h3>
<p>Price:Rs.1300.00</p>
<?php 
 if (!isset($_SESSION['email'])) 
{ ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
  <?php } 
 else { 
 if (check_if_added_to_cart(12))
   { 
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
   } 
 else 
{ 
?> 
<a href="cart-add.php?id="12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php } 
} ?>
</div></div>

</div>
</div>
</div>

<br><br><br><br>
<?php
include footer.php;
?>
</body>
</html>
