<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Mukesh</title>
    <link rel="stylesheet" href="Nav.css">
    <!--link rel="stylesheet" href="login.css"-->
    <!--link rel="stylesheet" href="slide.css"-->
    <style>
        button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 40px 600px;

    border: none;
    cursor: pointer;
    width: 20%;
            }

    /* Add a hover effect for buttons */
    button:hover {
    opacity: 0.8;
    }
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
        <div class="main">
<?php
session_start();
include('defines.php');
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='wt_project';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$name=$_SESSION['uname'];
$sql="SELECT * from reg where uname='$name' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
echo "<h2 align='center'  style='color:white'><b>Username</b>: $row[0]</h2><br><br>
      <h2 align='center'  style='color:white'><b>Email</b>: $row[1]</h2><br>
      <h2 align='center'  style='color:white'><b>Phone</b>: $row[2]</h2><br>";
?>
            <form method="POST">

                <button name="logout" align='center'>Logout</button>
            </form>
        </div>
</body>
</html>

<?php   
$res=isset($_POST['logout']);
echo "$res";
if(isset($_POST['logout']))
{
    $_SESSION['login']=0;
    redirect("Redirect.php");
}
?>