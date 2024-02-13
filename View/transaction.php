<?php include('bodyFirst.php');?>

    
    <div class="main-div">
        <!-- left side -->
        <?php include('leftpart.php'); ?>

        <div class="right-side">
        <!-- product list -->
            <div class="product-list">
             <h2>Completed Orders</h2>
             <table class="table table-striped">
                <?php include('../model/complete-order.php'); if($result>0){?>
                <tr>
                    <th>SL</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Total</th>
                    <th>Sold By</th>
                    <th>Action</th>
                </tr>
                <?php while($row=mysqli_fetch_assoc($query)){$count++;?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['total']?> <sub>tk</sub></td>
                    <td><?php echo $row['user']?></td>
                    <td>
                        <a href="binvoice.php?invoice=<?php echo $row['id'];?>" class="btn btn-light" title="More"><i class="fa-solid fa-file-invoice"></i></a>
                        <a href="#" data-id="<?php echo $row['id']?>" class="btn btn-danger dlt-btn" title="Delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>

             <?php }}?>

             </table>
            </div>
        </div>
    </div>
<!-- ///////////////////////////////////////////////////////////////////// -->
<form action="../controller/dlt-order.php" method="post" id="dltForm">
        <input type="hidden" id="p_id" name="id">
</form>
<!-- ///////////////////////////////////////////////////////////////////// -->
<?php include('bodyEnd.php');?>