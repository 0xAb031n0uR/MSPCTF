<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="get">
            <h1> Login page </h1>
            <div class="form-group">
            <input placeholder="username" type="text" name="username" class="form-control" required>
</div> 
<div class="form-group">
            <input placeholder="password" type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn" value="click" onclick="log()" >Log in </button>

<?php
$uname= $_GET['username'];
$pword= $_GET['password'];
if(empty($uname)||empty($pword)){

}
else if($uname=="admin1"&& $pword=="admin1"){
    echo "<script type='text/javascript'>alert('MSPCTF{d3v3l0p3r_t00l5_4r3_fun}');</script>";
}
else{
    echo "<script type='text/javascript'>alert('Wrong username or password');</script>";

}

?>
        </form>
    </div>
    <!-- make sure to delete this 
    to log in as admin use : admin1  password : admin1  -->

</body>
</html>