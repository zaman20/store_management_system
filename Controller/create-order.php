<?php 
    include('../model/server.php');
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $user = $_POST['user'];
   
    $products = $_POST['products'];
    $prices = $_POST['prices'];
    $images = $_POST['img'];
    $qtys = $_POST['qtys'];
    $count = $_POST['count'];
    $total = $_POST['total'];

    


    $sql = "INSERT INTO `orders`(`name`, `phone`,`shipping`,`p_name`, `img`, `price`,`qty`,`length`,`total`) VALUES ('$name','$phone','$user','$products','$images','$prices','$qtys','$count','$total')";

    $query = mysqli_query($conn, $sql);

    $get_max = mysqli_query($conn,"SELECT MAX(id) FROM orders");
    $row = mysqli_fetch_row($get_max);
    $id = $row['0'];

    if($query){
        mysqli_query($conn,"DELETE FROM cart");
        header("Location:../view/binvoice.php?notice=Order Added && invoice=$id");
    }

?>