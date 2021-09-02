<?php
require 'common.php';
if (!isset($_SESSION['email']))
{header('location:index.php');}
Session_destroy();
header('location:index.php');
?>
