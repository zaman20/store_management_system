<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstap css -->
    <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-box">
                    <h2>Store Management System</h2>
                    <?php include('view/alert.php');?>
                    <form action="controller/loginController.php" method="post">
                        <label for="">User Name</label>
                        <input type="text" name="name" id="" class="form-control my-2">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control my-2">
                        <input type="submit" valu="Login"  class="form-control my-2 btn btn-primary">
                    </form>    
                </div>
            </div>
        </div>
    </div>

</body>
</html>