<?php
require 'common.php';
if (!isset($_SESSION['email']))
{header('location:index.php');}
?
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Lifestyle store | Settings</title>
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
    
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
           <a href="home.html" class="navbar-brand "> LifestyleStore</a>
</div>
            <div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
<li><a href="settings.html"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
</ul>
</div>
</div>
</nav><br><br><br><br><br>
<div class="container">
<div class="row">
<div class="col-xs-4 col-xs-offset-4">
<h3>Change Password</h3>
<form action="settings_script.php" method="post">
<div class="form-group">
<input type="text" class="form-control" placeholder="Old Password" name="old_pwd"></div>
<div class="form-group">
<input type="text" class="form-control" placeholder="New Password" name="new_pwd"></div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Re-type New Password" name="retype_pwd"></div>
<input type="submit" class="btn btn-primary" value="Change">
</form>
</div>
</div>
</div>
<br><br><br><br>
<footer>
<div class="container">
<center>Copyright ?? Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
</div>
</footer>
</body>
</html>
