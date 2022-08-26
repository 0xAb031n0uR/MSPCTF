<html>
<body>

<?php
include('phpconnect.php');
$username=$_POST['user'];
$password=$_POST['pass'];
if (!preg_match('/^-?[0-9a-z]+$/m', $username)) {
  die("<h1>don't try to hach me :)</h1>");    
}
$password=stripslashes($password );
$password=mysql_real_escape_string($password);
$query = mysqli_query($dbconnect, "SELECT * FROM users WHERE username='$username' and password='$password' ")
   or die (mysqli_error($dbconnect));

$row = mysqli_fetch_array($query);
if($row['username']=='bob'){
        echo "<h1>You Need To Be admin to view flag</h1>";
}else if($row['username']=='admin'){
        echo "<h1>MSPCTF{Congratz_y0u_pass3d_pr3g_match}</h1>";
}else{
        echo "<h1>Wrong username or password</h1>";
}
?>
<a href="index.php">Logout</a>
</body>
</html>
