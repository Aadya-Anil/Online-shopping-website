<?php
function check_if_added_to_cart($item_id)
{
$_SESSION['user_id']=$user_id;
require 'common.php';
$result_cart=mysqli_query($con, "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'");
$total_rows = mysqli_num_rows($result_cart);
if (mysqli_num_rows >=1)
return 1;
else return 0;
}
?>
