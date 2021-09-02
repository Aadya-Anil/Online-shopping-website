<?php
require 'common.php';
if (!isset($_SESSION['email']))
{header('location:index.php');}
mysqli_query($con,"UPDATE status='confirmed' FROM user_items");
echo "Your order is confirmed. Thank you for shopping with us. Click here to purchase any other item."
link("products.php","Click here");
?>
