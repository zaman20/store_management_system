<?php 
    include('../model/server.php');
    $id = $_POST['id'];

    $sql = "DELETE FROM `orders` WHERE  id=$id LIMIT 1";

    $query = mysqli_query($conn, $sql);

    if($query){
     
        header("Location:../view/transaction.php?notice=Order Deleted");
    }

?>