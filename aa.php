<?php

if(isset($_POST['button'])){
    $username=$_POST['username'];
    $password= $_POST['password'];
    if(($username=='')&&($password=="")){
        echo "zaz.html" ;
    }
    else{
        echo "user Name or Password is not correct";
    }
}

?>