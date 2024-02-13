<?php include('bodyFirst.php');?>

<div class="main-div">
    <!-- left side -->
    <?php include('leftpart.php'); ?>

    <div class="right-side">
        <div class="container">
        <div class="row">
           
           <div class="col-lg-6">
               
                   <h2>Your Choosen Items</h2>
                   <?php include('../model/cartproducts.php');?>
            
                   <table class="table table-striped table-responsive">
                           <?php if($result>0){?>
                           <tr>
                               <th>SL</th>
                               <th>Img</th>
                               <th>Name</th>
                               <th>Price</th>
                               <th>Quantity</th>
                               <th>Total</th>
                               <th></th>
                           </tr>
                           <?php
                             $item_list = [];
                             $qty_list = [];
                             $price_list = [];
                             $img_list = [];
                            while($row=mysqli_fetch_assoc($query)){
                            $total=$row['sprice'] * $row['qty'];
                            $subtotal= $subtotal +$total;
                            $count++;

                            $item_list[]=$row['name'];
                            $price_list[]=$row['sprice'];
                            $qty_list[]=$row['qty'];
                            $img_list[]=$row['image'];
                            
                            $items = implode(',',$item_list);
                            $prices = implode(',',$price_list);
                            $qtys = implode(',',$qty_list);
                            $images = implode(',',$img_list);

                            
                        ?>
                           <tr>
                           <td><?php echo $count;?></td>
                               <td><img src="<?php echo $row['image'];?>" class="p-img" alt=""></td>
                               <td><?php echo $row['name'];?></td>
                               <td><?php echo $row['sprice'];?></td>
                              
                               <td ><input type="number" class="qty" value="<?php echo $row['qty'];?>"></td>
                               <td><?php echo $total;?></td>
                               <td>
                              
                                <a href="#" data-pid="<?php echo $row['p_id'];?>"data-stock="<?php echo $row['c_stock'];?>" data-id="<?php echo $row['id'];?>"
                                       class="btn btn-danger cart-dlt-btn" title="Delete">Delete</a>
                              
                                </td>
                               <td>
                                   <input type="hidden" class="id" value="<?php echo $row['id'];?>">
                                   <input type="hidden" class="price" value="<?php echo $row['sprice'];?>">
                                   <input type="hidden" class="pid" value="<?php echo $row['p_id'];?>">
                                   <input type="hidden" class="stock" value="<?php echo $row['c_stock'];?>">
                               </td>
                           </tr>
                           <?php }?>

                           <tfoot>
                               <tr class="table-dark normal">
                                   <td colspan="5">Total: </td>
                                   <td><?php echo $subtotal;?></td>
                                   <td></td>
                               </tr>

                           </tfoot>
                           <?php }?>
                       </table>


               

           </div>

           <div class="col-lg-1"> </div>

           <div class="col-lg-5 ml-2">
               <div class="form-box">
                   <?php include('alert.php'); $user = $_SESSION['name'];?>
                   <form action="../controller/create-order.php" method="post" id="customerForm">
                       <p class="alert alert-info">Total Amount: <?php echo $subtotal;?> tk </p>
                     
                       <input type="text" name="name" placeholder="Customer Name" class="form-control my-2">
                       <input type="text" name="phone" placeholder="Customer Phone" class="form-control my-2">
                       <input type="hidden" name="user" value="<?php echo $user;?>">
                       <input type="hidden" name="total" value="<?php echo $subtotal;?>">
                       <input type="hidden" name="products" value=" <?php echo $items;?>">
                       <input type="hidden" name="qtys" value=" <?php echo $qtys;?>">
                       <input type="hidden" name="prices" value=" <?php echo $prices;?>">
                       <input type="hidden" name="img" value=" <?php echo $images;?>">
                       <input type="hidden" name="count" value=" <?php echo $count;?>">
                      

                   </form>
                   <button class="save-btn btn btn-dark">Save</button>
               </div>

           </div>

           <div class="col-lg-12 mt-5 border border-warning">
              
               <input type="text" id="searchBar" placeholder="Search Medicine Name" class="form-control my-2">
               <div id="searchResult"></div>
                <div id="all-product">
                    <!-- product list -->
                    <div class="product-list">
                        <h2 class="product-title">All Products</h2>
                            <?php include('../model/products.php');if($result>0){ ?>
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
                                <?php }?>
                            </table>
                            <?php }?>
                    </div>

                </div>

           </div>

       </div>
        </div>

    </div>
</div>
<form action="../controller/create-cart.php" method="post" id="addCart">
        <input type="hidden" id="p_id" name="id">
    </form>

    <!-- ======================================================= -->
  <!-- ======================================================= -->
    <form action="../controller/dlt-cart.php" method="post" id="dltForm">
        <input type="hidden" id="c_id" name="id">
        <input type="hidden" id="p_id" name="pid">
        <input type="hidden" id="p_stock" name="stock">
    </form>
    <!-- ======================================================= -->
  


<?php include('bodyEnd.php');?>