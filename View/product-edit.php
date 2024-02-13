<?php include('bodyFirst.php');?>
    
    <div class="main-div">
        <!-- left side -->
        <?php include('leftpart.php');?>

        <div class="right-side">
            <h2>Add New Product</h2>
            <?php include('alert.php');?>
            <?php include('../model/editproducts.php');?>
            <div class="add-product-box">
                <form action="../controller/update-product.php" method="post" enctype="multipart/form-data" class="row">
                    <div class="col-lg-12">
                        <input type="text" value="<?php echo $name;?>" name="name" placeholder="Product Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo $pp;?>" name="pp" placeholder="Purchase Price" class="form-control my-2">
                        <input type="text" value="<?php echo $tax;?>" name="tax" placeholder="Tax" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo $sp;?>" name="sp" placeholder="Sales Price" class="form-control my-2">
                        <input type="text" value="<?php echo $qty;?>" name="qty" placeholder="Quantity" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <textarea name="details" id="" cols="30" rows="10" class="form-control my-2"><?php echo $details;?></textarea>
                    </div>
                    <div class="col-lg-6">
                        <select name="category" id="" class="form-select my-2">
                            <option  disabled>Product Category</option>
                            <option selected value="<?php echo $cat;?>"><?php echo $cat;?></option>
                            <?php include('../model/category.php');
                                while($row=mysqli_fetch_assoc($query)){?>
                                    <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" value="<?php echo $comp;?>" name="company" placeholder="Company Name" class="form-control my-2">
                    </div>
                    
                    <div class="col-lg-12">
                        <label for="">Product Image</label><br>
                        <img src="<?php echo $image;?>" alt="" class="product-img">
                        <input type="file" name="image" class="form-control my-2" value="<?php echo $image;?>">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" value="Update Product" class="form-control btn btn-primary">
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
    
<?php include('bodyEnd.php');?>