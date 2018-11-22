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
    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <label for="iname" style="color:white" ><b>Item Name   </b></label>
            <br>
            <input type="text" placeholder="Enter Item Name" name="iname" required>
            <br>
            <label for="desc" style="color:white"><b>Description   </b></label>
            <br>
            <textarea name="message" rows="5" cols="32"></textarea>
            <br><br>
            <label for="userfile" style="color:white"><b>Upload Image   </b></label>
            <br>
            <input type="file" name="userfile" accept="image/jpeg,image/gif,image/png,image/jpg" >
            <br><br>
            <label for="category" style="color:white"><b>Category   </b></label>
            <select name="category">
				<option value="properties">Properties</option>
				<option value="cars">Cars</option>
				<option value="homedecor">Home Decor</option>
				<option value="fashion">Fashion</option>
				<option value="electronics">Electronics</option>
				<option value="pets">Pets</option>	
			</select>
            <br>
            <br>  
            <label for="price" style="color:white"><b>Price in Rupees  </b></label>
            <br>
            <input type="number" name="price" required>
            <br> 
            <button type="submit">Submit</button>
            <br>
        </div>
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
$name=$_SESSION['uname'];
$sql="SELECT phone from reg where uname='$name' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
//echo "$row[0]";
$phone=$row[0];
/*$sql="CREATE TABLE Item (
iname           VARCHAR(30) NOT NULL,
descp        VARCHAR(30) NOT NULL,
userfile         LONGBLOB(20) NOT NULL,
category    VARCHAR(30) NOT NULL,
price       INT(10))"; 
$result=mysqli_query($conn,$sql);
if($conn)
{
    echo "Table created<br>";
}*/
//if($_SERVER["REQUEST_METHOD"]=="GET")
if(isset($_POST["iname"]))
{
    //echo "a";
    
    $iname=$_POST["iname"];
    $message=$_POST["message"];
    //$img=$_POST["userfile"];
    $category=$_POST["category"];
    $price=$_POST["price"];
    //print_r($_POST);
    //echo $_FILES['userfile']['name'];
    //$check = getimagesize($_FILES["image"]["tmp_name"]);
    //if($check !== false)
    //{
      //  echo "akjdnam";
        //$image = $_FILES["image"]["tmp_name"];
       // $imgContent = addslashes(file_get_contents($image));
    //}
    $image = $_FILES["userfile"]["tmp_name"];
    $imgContent = addslashes(file_get_contents($image));
$sql="INSERT INTO item1 (iname,message,userfile,category,price,uname,phone) 
        VALUES('$iname','$message','$imgContent','$category','$price','$name','$phone')";
$result=mysqli_query($conn,$sql);
if($conn)
{
    //echo "Upload Done<br>";
    redirect('Home.php');
}
}
//echo $_SESSION['login'];
?>
