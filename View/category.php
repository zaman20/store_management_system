<?php include('bodyFirst.php');?>


<div class="main-div">
    <!-- left side -->
    <?php include('leftpart.php'); ?>

    <div class="right-side">
    
        <div class="row">
            <div class="col-lg-4">
                <div class="category-create">
                    <?php include('alert.php'); ?>
                    <h2>New Category</h2>
                    <form action="../controller/create-category.php" method="post">
                        <input type="text" name="name" class="form-control my-2" placeholder="Category Name">
                        <input type="submit" value="Add Category" class="form-control btn btn-dark my-2">
                    </form>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <!-- product list -->
                <div class="product-list">
                    <h2>Category List</h2>
                    <table class="table table-striped">
                        <?php include('../model/category.php'); if($result>0){?>
                      
                        <tr>
                            <th>SL</th>
                            <th>C.Name</th>
                            <th>Action</th>
                        </tr>
                        <?php while($row=mysqli_fetch_assoc($query)){$count++;?>
                        <tr>
                            <td><?php echo $count;?></td>
                            <td><?php echo $row['name']?></td>
                            <td>
                                <a href="#" data-id="<?php echo $row['id']?>" class="btn btn-danger dlt-btn"
                                    title="Delete"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                        <?php }}?>

                    </table>
                </div>
            </div>
        </div>


    </div>
</div>


<!-- ///////////////////////////////////////////////////////////////////// -->
<form action="../controller/dlt-category.php" method="post" id="dltForm">
    <input type="hidden" id="p_id" name="id">
</form>
<!-- ///////////////////////////////////////////////////////////////////// -->
<?php include('bodyEnd.php');?>