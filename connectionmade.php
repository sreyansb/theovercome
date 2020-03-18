<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'mydb');
define('DB_USER','################################');
define('DB_PASSWORD','#########################'); 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con)); 
function SignIn() 
{ session_start(); 
if(!empty($_POST['user'])) 
{ $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
$query = mysqli_query($con,"SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysqli_error($con));
$row = mysqli_fetch_array($query) or die(mysqli_error($con));
if(!empty($row['userName']) AND !empty($row['pass']))
{ $_SESSION['userName'] = $row['pass']; 
    
echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

} 
else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } } } 
if(isset($_POST['submit'])) { SignIn(); } ?>

