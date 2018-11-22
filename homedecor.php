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
                <form method="POST">
                <a href="Home.php">Home</a>
                <a href="#contact" >Contact</a>
                <a href="#about" >About</a>
                <a href="check.php" style="float:right;">Login</a>
                <a href="check.php" style="float:right;">Your Account</a>
                </form>
        </div>
        <div class="main">
                <br>
                <br>
                <form method="POST">
                </form>
        </div>
</body>
</html>

<?php
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='wt_project';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
{
    //echo "Connected to wt_project Database<br>";
}
session_start(); // session start
include('defines.php');
$sql="SELECT * FROM item1";
if($result=mysqli_query($conn,$sql))
{
    echo "<br><br><br><br><br><br>";
    while($row=mysqli_fetch_row($result))
    {
        //print_r($row);
        //print $row[2];
        if($row[3]=='homedecor')
        {
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row[2] ).'" width=20% ><br>';
            echo "Item Name:$row[0]<br> 
                    Description:$row[1]<br> 
                    Price:₹$row[4]<br>
                    Seller Username:$row[5]<br>
                    Seller Phone Number:$row[6]<br>
                    Please Contact the above Phone Number to Buy";
        }
    }
}
?>
