<?php include('bodyFirst.php'); ?>
    
   <div class="main-div">
        <!-- left side -->
        <div class="left-side">
    <h2>Cafe HSTU</h2>
    <nav>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="../index.php">Log-Out</a></li>
        </ul>
    </nav>
</div>
        <!-- right side -->
        <?php include('../model/dashboard.php');?>
        <div class="right-side">
            <div class="glance">
                <h2>At a Glance</h2>
                <a href="products.php">
                <div class="box bg-info">
                  <h3>Product Items</h3>
                  <p><?php echo $total_products?></p>
                </div>
                </a>
                <div class="box bg-secondary ">
                <h3>Complete Orders</h3>
                <p><?php echo $comp_order?></p>
                </div>
                <a href="orders.php">
                <div class="box text-dark">
                  <h3>New Orders</h3>
                  <p><?php echo $new_order;?></p>
                </div>
                </a>
                <div class="box bg-dark ">
                  <h3>Total Stock</h3>
                  <p><?php echo $stock;?></p>
                </div>
                <div class="box bg-danger">
                  <h3>Stock Out</h3>
                  <p><?php echo $stock_out;?></p>
                </div>
            </div>

            <div class="performance-chart">
                <h2>Total Sales of the Year</h2>
                <!-- char show -->
                <canvas id="myChart" style="width:100%;max-width:1000px"></canvas>
            </div>
           
        </div>
   </div>

   <!-- chart js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
   <script>
      var xValues = ["January", "February", "March", "April", "May","June","July","August","September","October","November","December"];
      var yValues = [55, 49, 44, 24, 15,20,30,12,45,55,76,68];
      var barColors = ["red", "green","blue","orange","brown","violet","magenta","gold","coral","gray","black"];
      
      new Chart("myChart", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          legend: {display: false},
          title: {
            display: true,
          //   text: "Total Sales of a Year"
          }
        }
      });
  </script>
<?php include('bodyEnd.php'); ?>