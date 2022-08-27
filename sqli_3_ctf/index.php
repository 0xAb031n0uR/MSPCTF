<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <title>Check Role</title>
    <script src="/socket.io/socket.io.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <div class="jumbotron">
            <h1 class="display-4">
                Search For a Role
            </h1>
            <br>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input id="name" name="search" class="form-control" placeholder="Name">
            <br>
            <br>
            <button id="send" class="btn btn-success">Send</button>
			</form>
        </div>
        <div id="messages">
            <?php

			if(isset($_POST['search'])){
		        if($_SERVER=$_POST['search']) {
		            include('phpconnect.php');
		        
		            $username=$_POST['search'];
					$str=strtolower($username);
					if(preg_match('(insert|drop|alter|delete|create)', $str)) {
						die("<h2>don't try or you will banned from summer training credit :)</h2>");    
					}
					if(preg_match('/\\s/', $str)) {
						die("<h2>spaces is not allowed , you can't bypass me  :)</h2>");    
					}
					$username=str_replace(array("select","union","and"),'', $username);
					
		            $query = mysqli_query($dbconnect, "SELECT role FROM users WHERE username='$username' ")
		                 or die (mysqli_error($dbconnect));
					
					while ($row = mysqli_fetch_array($query, MYSQLI_BOTH))
					{
					
						echo  "<h3 class='display-6'>Role: " . $row["role"] . "</h3>";
					}
		        
		        }
			}
            ?>
        </div>
    </div>
   
</body>
</html>
