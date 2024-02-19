<div class="left-side">
    <h2>My Store  </h2>
    <span class="btn btn-success btn-sm"><?php session_start();
    if(isset($_SESSION['name'])){
        echo $_SESSION['name'];}?></span>

    <nav>
        <ul>
            <?php if( $_SESSION['role'] == 'Admin'){?>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="transaction.php">Transactions</a></li>
            <li><a href="accounts.php">Accounts</a></li>
            
            <li><a href="category.php">Category</a></li>
            <?php }?>
            <li><a href="products.php">Products</a></li>
            <li><a href="sell.php">Sale</a></li>
            <li><a href="logout.php">Log-Out</a></li>
        </ul>
    </nav>
</div>