<?php 

    $server_name = "localhost";
    $user = "root";
    $pass = "";
    $db = "store_management";

    $conn = mysqli_connect($server_name,$user,$pass,$db);

    if(!$conn){
        echo " Database Not Connected!";
    }


?>