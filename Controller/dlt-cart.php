<?php 
    include('../model/server.php');
    $id = $_POST['id'];
    $pid = $_POST['pid'];
    $stock = $_POST['stock'];

    $sql = "DELETE FROM `cart` WHERE  id=$id LIMIT 1";
    $query = mysqli_query($conn, $sql);
  
    if($query){
        $sql2="UPDATE `products` SET `qty`='$stock' WHERE `id`='$pid' LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        header("Location:../view/sell.php?notice=Product Deleted");
    }

?>