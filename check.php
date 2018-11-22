<?php
session_start();
include('defines.php');
//Login and Your Account
echo "1@3";
if ($_SESSION['login']==0)
    redirect("login.php");
else    
    redirect("YourAcc.php");

?>