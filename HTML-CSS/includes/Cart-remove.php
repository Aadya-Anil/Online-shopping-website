<?php
require 'common.php'; 
mysqli_query($con, "DELETE FROM user WHERE user_id=$user_id AND item_id=$item_id");
header(location:cart.php);
?>
