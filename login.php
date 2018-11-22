<html>
<head>
    <title>Welcome To Mukesh</title>
    <link rel="stylesheet" href="Nav.css">
    <link rel="stylesheet" href="login.css">

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
    <br><br><br>
    <div class="main">
    <form method="POST">
        <div class="imgcontainer">
        </div>
    
        <div class="container" method="POST">
            <label for="uname"><b>Username   </b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <br>
            <label for="psw"><b>Password   </b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br>              
            <button type="submit">Login</button>
            <br>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <span class="psw" style="float:left;"> New User? <a href="SignUp.php">Click here to Register</a></span>            
        </div>
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
$login=0;
$_SESSION['login']=$login;


if(isset($_POST["uname"]))
{
    $uname=$_POST["uname"];
    $psw=$_POST["psw"];
    $sql="SELECT uname,psw FROM reg";
    if($result=mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_row($result))
        {
            //print_r($row);
            if($row[0]==$uname && $row[1]==$psw)
            {
                $_SESSION['login']=1;
                $_SESSION['uname']=$uname;
                redirect('Home.php');
                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h3 align='center'>You have Successfully Logged In</h3>";

            }
        }
        echo $_SESSION['login'];
        if($_SESSION['login']==0)
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h3 align='center'>Failed to Login.Please Try Again</h3>";
        //mysqli_close($result);
    }
    
}

?>

