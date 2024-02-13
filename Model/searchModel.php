<?php 
    include('server.php');
    if(isset($_POST['searchText'])){
        $text = $_POST['searchText'];
        $sql = "SELECT * FROM products WHERE name LIKE '%{$text}%'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_num_rows($query);
        $count =0;
   
        if($result>0){?>
        <table class="table table-striped">
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
                    <?php if($row['qty'] == 0){?>
                        <span class="btn btn-danger btn-sm">Stock Out</span>
                    <?php }else{ ?>
                        <a href="#" data-id="<?php echo $row['id'];?>" class="add-btn btn btn-dark" title="Add to Cart"><i class="fa-solid fa-cart-shopping"></i>Add</a>
                    <?php }?>
                </td>
            </tr>
            <?php }}?>
        </table>
       <?php ?>

    <!-- ///////////////////////////////////////////////////////////////////// -->
    <form action="../Controller/create-cart.php" method="post" id="addCart">
        <input type="hidden" id="p_id" name="id">
    </form>
<!-- ///////////////////////////////////////////////////////////////////// -->

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/myscripts.js"></script>

<?php }else{
            echo '<h3 class="alert alert-danger">Not Found!</h3>';
        }

?>

