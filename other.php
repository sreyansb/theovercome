<?php
$servername = "localhost";
$username = "#####################";
$password = "###################";
$dbname = "mydb";
$u=$_POST['usn'];
$conn = mysqli_connect($servername, $username, $password,$dbname);
$sql = "SELECT title,content,date FROM public where usn!='$u'order by date";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	$i=mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div style='background-color: orange;
            border-style: groove;'>POST-$i<br>POSTED ON-" . $row["date"]. "<br><b>" . $row["title"]. "</b><br><br> " . $row["content"]. "<br><br><br></div>";
		$i=$i-1;
	}
}