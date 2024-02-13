<?php 
    include('../model/server.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pprice = $_POST['pp'];
    $sprice = $_POST['sp'];
    $tax = $_POST['tax'];
    $qty = $_POST['qty'];
    $details = $_POST['details'];
    $category = $_POST['category'];
    $company = $_POST['company'];
    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $imageFile = '../assets/upload/'.$image;

    move_uploaded_file($_FILES['image']['tmp_name'],$imageFile);

    $sql = "UPDATE `products` SET `name`='$name',`pprice`='$pprice',`sprice`='$sprice',`tax`='$tax',`qty`='$qty',`details`='$details',`type`='$category',`company`='$company',`image`='$imageFile' WHERE  id=$id LIMIT 1";

    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location:../view/product-edit.php?notice=Product Updated!&&pid=$id");
    }

?>