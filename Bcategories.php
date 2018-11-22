<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Mukesh</title>
    <link rel="stylesheet" href="Nav.css">
    <!--link rel="stylesheet" href="slide.css"-->
    
</head>
<body background="bk.jpg" >
        <div class="topnav" id="myTopnav" >
        <marquee><h1  style="color:white">Welcome to E-BiZ</h1></marquee>
                <form method="POST">
                <a href="Home.php">Home</a>
                <a href="#contact" >Contact</a>
                <a href="#about" >About</a>
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
                <br>
                <br>
                <form method="POST">
                <button name="properties" style="width:15%;height:125px;color:white">Properties</button>
                <button name="cars" style="width:15%;height:125px; color:white">Cars</button>
                <button name="homedecor" style="width:15%;height:125px; color:white">Home Decor</button>
                <br><br><br>
                <button name="fashion" style="width:15%;height:125px; color:white">Fashion</button>
                <button name="electronics" style="width:15%;height:125px; color:white">Electronics</button>
                <button name="pets" style="width:15%;height:125px; color:white">Pets</button>
                </form>
        </div>
</body>
</html>

<?php
session_start();
include('defines.php');
if(isset($_POST['properties']))
{
    redirect("properties.php");                
}
if(isset($_POST['cars']))
{
    redirect("cars.php");                
}
if(isset($_POST['homedecor']))
{
    redirect("homedecor.php");                
}
if(isset($_POST['fashion']))
{
    redirect("fashion.php");                
}
if(isset($_POST['electronics']))
{
    redirect("electronics.php");                
}
if(isset($_POST['pets']))
{
    redirect("pets.php");                
}

?>
