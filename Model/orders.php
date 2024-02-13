<?php 

    include('server.php');
    $sql = "SELECT * FROM orders  WHERE `status`= 0 ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $result= mysqli_num_rows($query);
    $count = 0;
   

?>