<?php 

    include('server.php');
    if(isset($_GET['invoice'])){
        $id = $_GET['invoice'];
        $sql = "SELECT * FROM orders WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        $row= mysqli_fetch_row($query);
        $name = $row['1'];
        $phone = $row['2'];
        $user = $row['3'];
        $pname = explode(',',$row['4']);
        $image = explode(',',$row['5']);
        $price = explode(',',$row['6']);
        $qty = explode(',',$row['7']);

        $length = $row['8'];
        $subtotal = $row['9'];
        $count=0;
        
       
    }
    

?>