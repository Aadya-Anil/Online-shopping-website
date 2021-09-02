<?php
require 'common.php';
$email=$_POST['email'];
$password=$_POST['password'];
$email=mysqli_real_escape_string($con,$email);
$password= mysqli_real_escape_string($con,$password);
$encrypt_password=md5($password);
$select_query="SELECT id,email FROM users";
$selsct_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con)); 
if(mysqli_num_rows($select_query_result)==0);
echo "User Not Found!";
else
$row= mysqli_fetch_array($select_query_result)
if(!isset($_SESSION['id'])){
header('location: index.php');
exit;
?>
