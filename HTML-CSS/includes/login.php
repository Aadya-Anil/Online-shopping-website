<?php
include "common.php";
echo $_POST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="Lifestyle store | Login" content="Login and change your lifestyle with a purchase">
        <title>Lifestyle store | Login</title>
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
a:hover{color:none}
.form-group{
margin-bottom:15px;
}
footer{
padding: 10px 0;
background-color: #101010;
color:#9d9d9d;
bottom: 0;
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
<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>
</div>
</div>
</nav>
<br><br><br><br><br><br>
<div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary"><a href="products.html">Login</a></button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer">
   <p>Don't have an account? <a href="Bootstrap/signup.html" link{color:blue}>Register</a></p></div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br>
<?php
include "footer.php"
?>
</body>
</html>
