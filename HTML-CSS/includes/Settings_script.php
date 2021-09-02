<?php
require 'common.php';
if (!isset($_SESSION['email']))
{header('location:index.php');}
$password=$_POST['old_pwd'];
$new_pwd=$_POST['new_pwd'];
$retype_pwd=$_POST['retype_pwd'];
if(strlen($new_pwd)!=strlen($retype_pwd))
{echo "Passwords do not match!";
header(location:'settings.php');}
else
{mysqli_query($con,"UPDATE password=$new_pwd FROM user WHERE password=$password");}

?>
