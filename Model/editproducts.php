<?php 

    include('server.php');
    if(isset($_GET['pid'])){
        $id = $_GET['pid'];
        $sql = "SELECT * FROM products WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        $row= mysqli_fetch_row($query);
        $name = $row['1'];
        $pp = $row['2'];
        $sp = $row['3'];
        $tax = $row['4'];
        $qty = $row['5'];
        $details = $row['6'];
        $cat = $row['7'];
        $comp = $row['8'];
        $image = $row['9'];
    }
    

?>