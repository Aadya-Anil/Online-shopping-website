<?php
require 'common.php';
$email=$_POST['email'];
$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email))
{ echo "Incorrect email"; }
$password = $_POST['password'];
$name =$_POST['name'];
$contact =$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
if(strlen($password)<6)
{ echo "Password should have atleast 6 characters"; }
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con,$password);
$sql= "SELECT id FROM users WHERE email = '$email' "; 
$result = mysqli_query($con,$sql); 
$mysqli_num_rows = mysqli_num_rows($result);
if (mysqli_num_rows > 0)
{ echo "Email-id already exists";}
else
mysqli_query($con, "INSERT INTO users (name,email,password,contact,city,address) VALUES ($name,$email,$password, $contact ,$city,$address)");

$_SESSION['id']=mysqli_insert_id($con);
if(isset($_SESSION['id'])){
header('location: products.php');
exit;
?>

