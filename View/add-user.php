<?php include('bodyFirst.php');?>
    
    <div class="main-div">
        <!-- left side -->
        <?php include('leftpart.php');?>

        <div class="right-side">
            <h2>Create New Account</h2>
            <?php include('alert.php');?>
            <div class="add-product-box">
                <form action="../Controller/create-user.php" method="post" class="row" enctype="multipart/form-data">
                    <div class="col-lg-12">
                        <input type="text" name="name" placeholder="User Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="phone" placeholder="Phone Number" class="form-control my-2">
                        <input type="text" name="email" placeholder="Email address" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="address" placeholder="Address" class="form-control my-2">
                        <input type="text" name="password" placeholder="Password" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <textarea name="details" id="" cols="30" rows="10" class="form-control my-2">User details</textarea>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Profile Image</label>
                        <input type="file" name="image" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <label for=""> </label>
                        <select name="role" id="" class="form-select my-2">
                            <option selected disabled>User Type</option>
                            <option value="Admin">Admin</option>
                            <option value="Sales">Sales Man</option>
                        </select>
                    </div>
                    
                    <div class="col-lg-12">
                        <input type="submit" value="Add User" class="form-control btn btn-primary">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>

<?php include('bodyEnd.php');?>