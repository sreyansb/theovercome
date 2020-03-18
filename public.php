<?php
$servername = "localhost";
$username = "##########################";
$password = "#################";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password,$dbname);
$usn=$_POST['username'];
$ti = $_POST['title'];
$cn = $_POST['content'];
$sql = "INSERT INTO public (usn,title,content) VALUES ('$usn','$ti','$cn')";
if(mysqli_query($conn,$sql)=== TRUE)
{
	echo "Posted Successfully";
	echo "<br><a href='home2.html'>Back Home </a>";
};
mysqli_close($conn); 
?>