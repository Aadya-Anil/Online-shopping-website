<?php
require 'common.php';
$user_id=$_GET['user_id'];
mysqli_query($con, "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart');
header('location: products.php');
?>
