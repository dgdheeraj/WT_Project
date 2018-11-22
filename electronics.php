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
    echo "<h3><b>Note:Please Contact the Seller From The Give Number</b></h3>";
    while($row=mysqli_fetch_row($result))
    {
        //print_r($row);
        //print $row[2];
        if($row[3]=='electronics')
        {
            echo '<br><img style:"display: block;margin-left: auto;margin-right: auto;width: 50%;border:1px solid #ddd;border-radius:8px ;padding:5px" src="data:image/jpeg;base64,'.base64_encode( $row[2] ).'" width=20% ><br>';
            echo "<p style:\"color:re\">Item Name:$row[0]</p> 
                  <p style:'color:red'> Description:$row[1]</p> 
                  <p style:'color:red'>Price:₹$row[4]</p>
                  <p style:'color:red'> Seller Username:$row[5]</p>
                  <p style:'color:red'> Seller Phone Number:$row[6]</p><br>";

            
                  
        }
    }
}
?>
