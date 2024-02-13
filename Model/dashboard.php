<?php 
    include('server.php');
    $q1 = mysqli_query($conn,"SELECT * FROM orders");
    $new_order = mysqli_num_rows($q1);
    $amount = 0;
    while($row=mysqli_fetch_assoc($q1)){
        $amount = $amount +$row['total'];
    }

    $q3 = mysqli_query($conn,"SELECT * FROM products");
    $purchase = 0;
    $stock =0;
    while($row=mysqli_fetch_assoc($q3)){
        $purchase = $purchase +$row['pprice'];
        $stock = $stock +$row['qty'];
    }

    $reveniew = $amount-$purchase;
    $total_products = mysqli_num_rows($q3);


?>