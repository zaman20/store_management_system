<?php include('bodyFirst.php');?>
    
    <div class="main-div">
        <!-- left side -->
        <?php include('leftpart.php');?>

        <div class="right-side">
            <h2>Add New Product</h2>
            <?php include('alert.php') ?>
            <div class="add-product-box">
                <form action="../controller/create-product.php" method="post" enctype="multipart/form-data" class="row">
                    <div class="col-lg-12">
                        <input type="text" name="name" placeholder="Product Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="pp" placeholder="Purchase Price" class="form-control my-2">
                        <input type="text" name="tax" placeholder="Tax" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="sp" placeholder="Sales Price" class="form-control my-2">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <textarea name="details" id="" cols="30" rows="10" class="form-control my-2">Product details</textarea>
                        
                    </div>
                    <div class="col-lg-6">
                        <select name="category" id="" class="form-select my-2">
                            <option selected disabled>Product Category</option>
                            <?php include('../model/category.php');
                                while($row=mysqli_fetch_assoc($query)){?>
                                    <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                    <input type="text"  name="company" placeholder="Company Name" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <label for="">Product Image</label>
                        <input type="file" name="image" class="form-control my-2">
                        <input type="submit" value="Add Product" class="form-control btn btn-primary">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
    
<?php include('bodyEnd.php');?>