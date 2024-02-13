<?php 
    include('../model/server.php');
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $details = $_POST['details'];
    $role = $_POST['role'];
    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $imageFile = '../assets/upload/'.$image;

    move_uploaded_file($_FILES['image']['tmp_name'],$imageFile);

    $sql = "INSERT INTO `users`(`name`, `phone`, `password`, `address`, `email`, `details`, `image`, `type`) VALUES ('$name','$phone','$password','$address','$email','$details','$imageFile','$role')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location:../view/add-user.php?notice="User Added"');
    }

?>