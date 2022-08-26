<!DOCTYPE HTML">
<html>
<body>

<?php
include('phpconnect.php');
$username=$_POST['user'];
$password=$_POST['pass'];
$query = mysqli_query($dbconnect, "SELECT * FROM users WHERE username='$username' and password='$password' ")
   or die (mysqli_error($dbconnect));

$row = mysqli_fetch_array($query);
if($row['username']=='bob'){
	echo "<h1>You Need To Be admin to view flag</h1>";
}else if($row['username']=='admin'){
	echo "<h1>MSPCTF{easy_sqli_flag}</h1>";
}else{
	echo "<h1>Wrong username or password</h1>";
}
?>
<a href="index.php">Logout</a>
</body>
</html>
