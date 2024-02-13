<?php 
    include('../model/server.php');
    
    $name = $_POST['name'];
    $pprice = $_POST['pp'];
    $sprice = $_POST['sp'];
    $dprice = $_POST['dp'];
    $tax = $_POST['tax'];
    $qty = $_POST['qty'];
    $details = $_POST['details'];
    $category = $_POST['category'];
    $company = $_POST['company'];
    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $imageFile = '../assets/upload/'.$image;

    move_uploaded_file($_FILES['image']['tmp_name'],$imageFile);

    $sql = "INSERT INTO `products`(`name`, `pprice`, `sprice`, `tax`, `qty`, `details`, `type`, `company`, `image`,`dprice`) VALUES ('$name','$pprice','$sprice','$tax','$qty','$details','$category','$company','$imageFile','$dprice')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location:../view/add-product.php?notice="Product Added"');
    }

?>