<?php 
    include('../model/server.php');
    $name = $_POST['name'];

    $sql="INSERT INTO  `category` (`name`) VALUES ('$name')";
    $query= mysqli_query($conn,$sql);

    if($query){
        header("Location:../view/category.php?notice= Category Added!!");
    }


?>