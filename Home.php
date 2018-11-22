<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Mukesh</title>
    <link rel="stylesheet" href="Nav.css">
    <link rel="stylesheet" href="slide.css">
</head>
<body background="bk.jpg" >
        <div class="topnav" id="myTopnav" >
                <marquee><h1  style="color:white">Welcome to E-BiZ</h1></marquee>
                <form method="POST">
                <a href="Home.php">Home</a>
                <a href="contact.php" >Contact</a>
                <a href="about.php" >About</a>
                <a href="check.php" style="float:right;">Login</a>
                <a href="check.php" style="float:right;">Your Account</a>
                </form>
        </div>
        <div class="main">
                <style>
                        .main button{
                        background-color: rgba(18, 19, 18, 0.61);
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 12px;
                        border: solid;
                        border-color: darkgreen;
                        cursor: pointer;
                        width: 30%;
                        }

                                /* Add a hover effect for buttons */
                        .main button:hover {
                                opacity: 0.8;
                        }
                </style>
                <form method="POST">
                <button name="signin" align='left' id="signin" style="width:12%;">New User? Click Here To Sign In</button>
                </form>
                <br>
                <br>
                <form method="POST">
                <button name="Buy" style="width:15%;height:125px; color:white">Buy</button>
                <button name="Sell" style="width:15%;height:125px; color:white">Sell</button>                
                </form>
                <h2><marquee style="color:darkgreen;">Place Where Buyers Meet Sellers. Amazing Deals . Attractive Products . Grab It Before Someone Else Does</marquee></h2>
                <img src="hom2.jpg" align="center">
                <br>
                <br><br><br>
                <br>
        
        </div>
</body>
</html>

<?php
session_start();
include('defines.php');
if(isset($_POST['Buy']))
{
        if($_SESSION['login']==0)
                redirect("Redirect.php");
        else
        redirect("Bcategories.php");                
}
if(isset($_POST['Sell']))
{
        if($_SESSION['login']==0)
                redirect("Redirect.php");
        else
        redirect("Sell.php");                
}
if(isset($_POST['signin']))
{
        if($_SESSION['login']==0)
                redirect("SignUp.php");
        else
        redirect("YourAcc.php");                       
}
?>
