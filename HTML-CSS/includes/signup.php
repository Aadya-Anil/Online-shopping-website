<?php
require 'common.php';
if (isset($_SESSION['email']))
 { header('location: products.php'); }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="Lifestyle store | Login" content="Sign up and change your lifestyle witha purchase">
        <title>Lifestyle store | Sign Up</title>
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
a:link{color:blue}
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
<div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2><b>SIGN UP</b></h2>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" pattern="[a-zA-Z]" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input  class="form-control"  placeholder="Contact" name="contact">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="City" name="city">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Address" name="address">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div><br><br><br><br>
<?php
include "footer.php"
?>
</body>
</html>
