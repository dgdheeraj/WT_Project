<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Mukesh</title>
    <link rel="stylesheet" href="Nav.css">
    <!--link rel="stylesheet" href="slide.css"-->
    
</head>
<body background="bk.jpg">
        <div class="topnav" id="myTopnav" >
        <marquee><h1  style="color:white">Welcome to E-BiZ</h1></marquee>
                <a href="Home.php">Home</a>
                <a href="#contact" >Contact</a>
                <a href="#about" >About</a>
                <input type="text" style="float:right;text-align: center;padding-right:30px;width:15%;" placeholder="Search..">
                <a href="check.php" style="float:right;">Login</a>
                <a href="check.php" style="float:right;">Your Account</a>
        </div>
        <div class="main">
                <br><br><br><br><br><br><br><br>
                <style>
                        .main button{
                        background-color: rgba(18, 19, 18, 0.61);
                        color: white;
                        padding: 14px 20px;
                        margin: 16px 600px;
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
                <!--h3 style="height: 5px;" align="center">Your Responses have been Submitted</a></h3-->
                <form method="POST">
                <button name="login" style="width:15%;height:125px;color:white" halign="right">Click Here to go to Login</button>
                <br>
                <button name="home" style="width:15%;height:125px;color:white">Click Here to go to Home page</button>
                </form>
                
        </div>
</body>
</html>

<?php
session_start();
include('defines.php');
if(isset($_POST['login']))
{
    redirect("login.php");                
}
if(isset($_POST['home']))
{
    redirect("home.php");                
}

?>