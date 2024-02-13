<?php 
 include('../model/server.php');
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $pass = $_POST['password'];

        $sql="SELECT * FROM `users` WHERE `name` = '$name'";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_row($query); 

        $dname = $row['1'];
        $dpass = $row['3'];
        $role = $row['8'];

        if($name == $dname && $pass== $dpass ){
            session_start();
            $_SESSION["name"]= $dname; 
            $_SESSION["role"]= $role; 
            
            header("Location:../view/dashboard.php");
        }
        else{
            header("Location:../index.php?msg='Incorrect Login Details");
        }


    }


?>