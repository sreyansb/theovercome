<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mydb');
define('DB_USER','###########################');
define('DB_PASSWORD','###################');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
function NewUser()
{ $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
$fullname = $_POST['name'];
$userName = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];
$query = "INSERT INTO Username (userName,pass) VALUES ('$userName','$password')";
$data = mysqli_query ($con,$query)or die(mysqli_error($con));
if($data) { echo "YOUR REGISTRATION IS COMPLETED...";
    echo '<script>window.location="home2.html"</script>'; } } 
function SignUp() { if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{ $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
$query = mysqli_query($con,"SELECT * FROM Username WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysqli_error($con));
if(!$row = mysqli_fetch_array($query) or die(mysqli_error($con))) { NewUser(); }
else { echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; } } } 
if(isset($_POST['submit'])) { SignUp(); }
?>