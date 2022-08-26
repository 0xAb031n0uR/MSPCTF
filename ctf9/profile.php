


<?php

if (isset($_COOKIE['credintial'])) {
       
       
        if($_COOKIE['credintial'] == "admin")
    echo " <h1> welcome admin  </h1> <br><br> <h2> Flag -> MSPCTF{4dm1n_473_7h3_c00k135} </h2> ";
   


       else if($_COOKIE['credintial'] == "support")
    echo " <h1> hahah welcome support only the admin can see the flag </h1>";
    
    } 

    else if($_GET['username'] == "support" && $_GET['password'] == "support")
    {
     setcookie("credintial", "support");
     echo " <h1>welcome support only the admin can see the flag </h1>";
    //  echo " <h1> welcome support only the admin can see the flag </h1>";
    }


   

    
     
    
   
    else {
            echo "invalid username or password";
}

    ?>



