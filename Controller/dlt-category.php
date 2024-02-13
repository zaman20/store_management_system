<?php 
    include('../model/server.php');
    $id = $_POST['id'];

    $sql = "DELETE FROM `category` WHERE  id=$id LIMIT 1";

    $query = mysqli_query($conn, $sql);

    if($query){
     
        header("Location:../view/category.php?notice=Order Deleted");
    }

?>