<?php 

    include('server.php');
    $sql = "SELECT * FROM category ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $result= mysqli_num_rows($query);
    $count = 0;
   

?>