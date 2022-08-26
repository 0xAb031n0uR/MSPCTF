<?php

$flag = "MSPCTF{MD5-IS-A-ONE-W4Y}";
if (isset($_GET['passwd'])) {

        if (hash("md5", $_GET['passwd']) == '4b6544406098f683478fca26b2589e6d'){
            echo "<h1>Here is your gift :</h1>".$flag;
        } else {
            echo "Get out from here";
    }
}
?>