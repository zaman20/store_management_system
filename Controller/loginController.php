<?php 
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $pass = $_POST['password'];

        if($name == 'ador' && $pass == '1234'){
            header('Location:../view/dashboard.php');
        }
        else if($name == 'arju' && $pass == '1234'){
            header('Location:../view/dashboard.php');
        }
        else if($name == 'iram' && $pass == '1234'){
            header('Location:../view/dashboard2.php');
        }
        else{
            echo "<p class='alert alert-danger'>Incorrect Login Details </p>";
        }
    }


?>