<?php include('bodyFirst.php');?>
    
    <div class="main-div">
        <!-- left side -->
        <?php include('leftpart.php'); ?>

        <div class="right-side">
        <!-- product list -->
            <div class="product-list">
                <h2 class="product-title">Users Account</h2>
                <a href="add-user.php" class="btn btn-dark add-new-btn">Add New <i class="fa-solid fa-plus"></i></a>
             

            <div class="all-user">
                
                <table class="table table-striped">
                <?php include('../model/users.php');if($result>0){?>
                    <tr>
                        <th>SL</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                <?php while($row=mysqli_fetch_assoc($query)){$count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td> <img src="<?php echo $row['image'];?>" alt="" class="p-img">
                        </td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td>
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
    <form action="../controller/dlt-user.php" method="post" id="dltForm">
        <input type="hidden" id="p_id" name="id">
    </form>
<!-- ///////////////////////////////////////////////////////////////////// -->
<?php include('bodyEnd.php');?>