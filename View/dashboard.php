<?php include('bodyFirst.php'); ?>
    
   <div class="main-div">
        <!-- left side -->
        <?php include('leftpart.php');?>
        <!-- right side -->
        <?php include('../model/dashboard.php');?>
        <div class="right-side">
            <div class="glance">
                <h2>At a Glance</h2>
                <div class="box bg-success">
                <h3>Total Sales</h3>
                <p><?php echo $amount;?><sub>tk</sub></p>
                </div>
                <?php if( $_SESSION['role'] == 'Admin'){?>
                <div class="box bg-primary">
                <h3>Total Purchase</h3>
                <p><?php echo $purchase;?><sub>tk</sub></p>
                </div>

                <div class="box bg-warning">
                <h3>Reveniew</h3>
                <p><?php echo $reveniew;?><sub>tk</sub></p>
                </div>
                <?php }?>
                <a href="products.php">
                <div class="box bg-info">
                  <h3>Product Items</h3>
                  <p><?php echo $total_products?></p>
                </div>
                </a>
               
                </a>
                <div class="box bg-dark ">
                  <h3>Total Stock</h3>
                  <p><?php echo $stock;?></p>
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