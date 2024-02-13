<?php 

    include('server.php');
    $sql = "SELECT * FROM cart";
    $query = mysqli_query($conn, $sql);
    $result= mysqli_num_rows($query);
    $count = 0;
    $subtotal=0;

?>