<?php
session_start();
include('defines.php');
//Buy and Sell
if ($_SESSION['login']==0)
    redirect("login.php");
else    
    redirect("SignUp.php");
?>