<?php 
    if(isset($_POST['id'])){
         include('../model/server.php');
        $id=$_POST['id'];
    
        $sql="SELECT * FROM products WHERE id = '$id' ";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_num_rows($query); 
              
        if($result>0){
        $row = mysqli_fetch_row($query); 
        $id =$row['0']; 
        $name =$row['1']; 
        $p_price =$row['2']; 
        $s_price =$row['3']; 
        $stock =$row['5']; 
        $qty=1;
        $image = $row['9'];
        $total = $s_price * $qty;
                 echo  $total; exit();
        $sql = "INSERT INTO `cart`(`name`, `sprice`, `pprice`, `qty`, `total`, `c_stock`, `p_id`, `image`) VALUES ('$name','$s_price','$p_price','$qty','$total','$stock','$id','$image')";
            
        $query= mysqli_query($conn,$sql);

        if($query){
            header("Location:../view/sell.php?notice= Produt Added to Cart!!");
        }else{
            echo " Some eror";
        }
    }
    
}

       
?>