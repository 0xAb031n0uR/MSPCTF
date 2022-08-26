 <?php
    setcookie('credintial', null); 
    ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page 2.0 </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form action="profile.php" method="get">
            <h1> Login page 2.0 </h1>
            <div class="form-group">
            <input placeholder="username" type="text" name="username" class="form-control" required>
</div> 
<div class="form-group">
            <input placeholder="password" type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn" value="click"  >Log in </button>


        </form>
    </div>
    <!-- remember to delete this 
    to log in use : support  password : support  -->

   

</body>
</html>