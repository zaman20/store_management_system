<?php include('bodyFirst.php');?>

    
    <div class="main-div">
        <!-- left side -->
        <?php include('leftpart.php'); ?>

        <div class="right-side">
        <div class="main-div">
            
            <!-- product list -->
                <div class="product-list hproduct-list">
                    
                    <a href="#" class="btn btn-primary add-new-btn print-btn">Print Invoice <i class="fa-solid fa-print"></i></a>
                    <div class="print-box">
                        <?php include('../model/findorder.php');?>
                        <div class="shop-info">
                            <h2>My Store</h2>
                            <p>Address: <br> 
                                Phone: 019990000 <br>
                                Email:mystore@gmail.com <br>
                                web: www.mystore.com
                            </p>
                        </div>
                        
                        <div class="customer-info">
                            <h2>Invoice# <?php echo $id;?></h2>
                            
                                Name:  <?php echo $name;?> <br>
                                Phone:  <?php echo $phone;?>
                            </p>
                        </div>
                        <div class="invoice-list">
                            <table class="table table-light invoice-table-list">
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                        
                                        <?php for($i=0; $i<$length; $i++){
                                             $count++;
                                            $total = $price[$i] * $qty[$i];
                                            ?>
                                        <tr>
                                            <td><?php echo $count?></td>
                                            <td> <img src="<?php echo $image;?>" alt="" class="p-img">
                                            </td>
                                            <td> <?php echo $pname[$i];?></td>
                                            <td> <?php echo $price[$i];?></td>
                                            <td> <?php echo $qty[$i];?><sub>pcs</sub></td>
                                            <td> <?php echo $total;?> </td>
                                        </tr>
                                        <?php }?>
                                       
                                        
                                            <tr class="table-dark">
                                                <td colspan="5" class="text-end">Sub-Total:</td>
                                                <td><?php echo $subtotal;?> <sub>tk</sub></td>
                                            </tr>
                                        
                            </table>
                        </div>
                    </div>
                </div>
       
        </div>
        </div>
    </div>
<!-- ///////////////////////////////////////////////////////////////////// -->
<form action="../controller/comp-order.php" method="post" id="completeForm">
        <input type="hidden" id="p_id" name="id">
</form>
<!-- ///////////////////////////////////////////////////////////////////// -->
<?php include('bodyEnd.php');?>
<script src="../Assets/js/myscripts.js"></script>