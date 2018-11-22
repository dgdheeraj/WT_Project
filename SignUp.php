<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Mukesh</title>
    <link rel="stylesheet" href="Nav.css">
    <link rel="stylesheet" href="login.css">
    <style>
    </style>
</head>
<body background="bk.jpg">
    <div class="topnav" id="myTopnav" >
    <marquee><h1  style="color:white">Welcome to E-BiZ</h1></marquee>
        <a href="Home.php">Home</a>
        <a href="#contact" >Contact</a>
        <a href="#about" >About</a>
        <a href="check.php" style="float:right;">Login</a>
        <a href="check.php" style="float:right;">Your Account</a>
    </div>
    <br><br><br>
    <div class="main">
    <form method="POST" >
        <div class="container">
            <label for="uname" style="color:white"><b>Username   </b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <br>
            <label for="email" style="color:white"><b>Email   </b></label>
            <br>
            <input type="email" placeholder="eg:1234@example.com" name="email" required>
            <br>
            <label for="phone" style="color:white"><b>Phone Number   </b></label>
            <br>
            <input type="number" minimum="999999999" maximum="9999999999"placeholder="Enter Phone Number" name="phone" required>
            <br>
            <label for="psw" style="color:white"><b>Password   </b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br> 
            <label for="psw-repeat" style="color:white"><b>Repeat Password   </b></label>
            <br>
            <input type="password" placeholder="Re Enter Password" name="psw-repeat" required>
            <br>              
            <button type="submit" name="register">Register</button>
            <br>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            </div>
    </form>
    </div>

</body>
</html>

<?php
session_start();
include('defines.php');

$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='wt_project';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
{
    //echo "Connected to wt_project Database<br>";
}
/*$sql="CREATE TABLE reg (
uname           VARCHAR(30) NOT NULL,
email        VARCHAR(30) NOT NULL,
phone       INT(10),
psw      VARCHAR(30))"; 
$result=mysqli_query($conn,$sql);*/
//if($_SERVER["REQUEST_METHOD"]=="GET")
if(isset($_POST["register"])&&$login==0)
{
    echo "a";
    $uname=$_POST["uname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $psw=$_POST["psw"];

$sql="INSERT INTO reg (uname,email,phone,psw) 
        VALUES('$uname','$email',$phone,'$psw')";
$result=mysqli_query($conn,$sql);
if($result)
{
    redirect('Redirect.php');
}
else
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h3 align='center'>Failed to Register.Please Try Again</h3>";
//mysqli_close($sql);
}
echo $_SESSION['login'];
?>
