<?php
require "common.php";
if (isset($_SESSION['email']))
 { header('location: products.php'); }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="Lifestyle store | Home" content="Lifetyle.We sell Lifestyle.">
        <title>Lifestyle store | Home</title>
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


#banner-image{
    padding-top: 75px;
    padding-bottom: 50px;
    margin-bottom: 20px; 
    text-align:center; 
    color: #f8f8f8; 
    background: url(Bootstrap/intro-bg_1.jpg) no-repeat center;
    background-size: cover;
}
.inner-banner-image{
    padding-top: 12%; 
    width:50%; 
    margin:auto;
    image-align: center; 
}
#banner_content{
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%; 
    margin-top: 12%;  
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7); 
    max-width: 660px;
overflow:hidden
}
.button{
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125); 
    padding: 10px 16px;
    font-size: 18px; 
    border-radius: 6px;
}

.items{
width:30%; 
display: block; 
padding: 4px; 
margin-bottom: 20px; 
line-height: 1.42857143;
 background-color: #fff;
 border: 1px solid #ddd; 
border-radius: 4px; 
float:left; 
margin-left:1%;
}
.thumbnail{
display: block; 
max-width: 100%;
height: auto; 
}
.caption{
color:#000;
 padding:0px 10px 10px; 
font-weight:bold; 
text-align: center;
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
    
<?php
include "header.php"
?>
 
   <div id=banner-image>
<div class="container">
            <div class="inner-banner-image">
                <div id=banner_content>
                <h1>We sell lifestyle.</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a class="btn btn-danger btn-lg active" href="#shop">Shop Now</a>
           </div>
          </div>
   </div>
</div>
<div class="container">
 <div class="items">
  <a href="#">
 <img src="Bootstrap/1.jpg" alt="" class="thumbnail">
<div class="caption">
<h2>Cameras</h2>
<p>Choose among the best available in the world</p>
</div>
</a>
</div>

 <div class="items">
  <a href="#">
 <img src="Bootstrap/7.jpg"" class="thumbnail"  >
<div class="caption">
<h2>Watches</h2>
<p>Original watches from the best brands</p>
</div>
</a>
</div>

 <div class="items">
  <a href="#">
 <img src="Bootstrap/8.jpg" alt="" class="thumbnail">
<div class="caption">
<h2>Shirts</h2>
<p>One exquisite collection of shirts</p>
</div>
</a>
</div>
</div>
<?php
include "footer.php"
?>
</body>
</html>

