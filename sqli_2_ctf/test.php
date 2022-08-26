<?php
include('phpconnect.php');
if (isset($_POST['user'])){
$username = $_POST['user'];
$password = $_POST['pass'];

/* SQL query vulnerable to SQL injection */
$sql = "SELECT username FROM users WHERE username = '$username' and password = '$password'";

/* Select queries return a result */
if ($result = $mysqli->query($sql)) {
while($obj = $result->fetch_object()){
print($obj->username);
}
}
/* If the database returns an error, print it to screen */
elseif($mysqli->error){
print($mysqli->error);
}
}
?>
