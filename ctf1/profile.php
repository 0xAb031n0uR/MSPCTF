<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MSP</title>    
    <script src="main.js"></script>
<link rel="stylesheet" type="text/css" href="style2.css">


</head>
<body>

    <h1 class="a_nasr">online shop</h1>
    <div class="hacker">
            
          <span class="msp"> 
          <?php
                $login= str_replace(array('img', 'script'),' ',$_GET['loginUser']);
                //$data = $login."\n";
               // $file_handle = fopen('This_S3ecReT_fIlE_P3alYods.html' ,'a');
                //fwrite($file_handle,$data);
                //fwrite($file_handle,$data);
                //fclose($file_handle);
                echo "You searched for : ".$login.  "<br><br>";       
            ?>


             <button actio class="btn" onclick="location.href='index.php'">Search again</button>
         </span> 
    </div>
</script>

</body>
</html>
