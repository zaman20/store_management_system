<?php include('bodyFirst.php');?>
    
    <div class="main-div">
        <!-- left side -->
       <?php include('leftpart.php'); ?>

        <div class="right-side">
        <!-- product list -->
            <div class="product-list">
                <h2 class="product-title">All Products</h2>
                <a href="add-product.php" class="btn btn-dark add-new-btn">Add New <i class="fa-solid fa-plus"></i></a>
            

            <div id="all-product">
                <table class="table table-striped">
                    <?php include('../model/products.php');if($result>0){ ?>
                    <tr>
                        <th>SL</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>P.Price</th>
                        <th>S.Price</th>
                        <th>Product Type</th>
                        <th>Company Name</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    <?php while($row=mysqli_fetch_assoc($query)){ $count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td> <img src="<?php echo $row['image'];?>" alt="" class="p-img">
                        </td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['pprice'];?></td>
                        <td><?php echo $row['sprice'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td><?php echo $row['company'];?></td>
                        <td><?php echo $row['qty'];?> <sub>pcs</sub></td>
                        <td>
                            <a href="product-edit.php?pid=<?php echo $row['id'];?>"  class="btn btn-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                            <a href="#" data-id="<?php echo $row['id'];?>" class="btn btn-danger dlt-btn" title="Delete"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }}?>
                </table>
            </div>

            </div>
        </div>
    </div>

<!-- ///////////////////////////////////////////////////////////////////// -->
    <form action="../controller/dlt-product.php" method="post" id="dltForm">
        <input type="hidden" id="p_id" name="id">
    </form>
<!-- ///////////////////////////////////////////////////////////////////// -->

<?php include('bodyEnd.php');?>