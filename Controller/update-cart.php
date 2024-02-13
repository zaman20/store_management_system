<?php
    include('../model/server.php');
    $id = $_POST['id'];
    $pid = $_POST['pid'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;
    $stock = $_POST['stock'];
    $new_stock = $stock -$qty;
    
    $sql="UPDATE cart SET qty='$qty', total='$total' WHERE id=$id LIMIT 1";
    $query = mysqli_query($conn,$sql);

    if($query){
        
        $sql2="UPDATE products SET qty='$new_stock' WHERE id=$pid LIMIT 1";
        $query2 = mysqli_query($conn,$sql2);

        header("Location:../view/view-cart.php?notice=Item Updated");
    }

?>