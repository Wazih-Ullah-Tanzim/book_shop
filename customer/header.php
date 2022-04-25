
<header class="header">
   

   <div class="flex">

      <a href="#" class="logo">Garden of Eden</a>
       <a href="#" class="logo"><?php
                   echo "<h4 style='color:#FFFFFF; text-align:center;'>"."Your ID is : ".$p."</h4>"; ?></a>

      <nav class="navbar">
         <!-- <a href="admin.php">Add products</a> -->
          <a href="products.php">view products</a> 
          <a href="home.php">Home page</a> 
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE  cus_id='$p' " ) or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>