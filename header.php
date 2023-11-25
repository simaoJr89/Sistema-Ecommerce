<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>

      </div>
   </div>

   
   <div class="header-2">
      <div class="flex">
         <a href="home.php" class="logo"><img src="images/junior.png" alt="Feature" width="400px" height="60px"></a>

         <nav class="navbar">
            <a href="home.php" class="logo"><img src="images/Home.png" alt="Feature" width="55px" height="35px"></a>
            <a href="shop.php">Catalogo</a>
            <a href="orders.php">Meus pedidos</a>
            <a href="contact.php">Contacte-nos</a>
            <a href="about.php">Sobre</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Terminar sessao</a>
         </div>
      </div>
   </div>

</header>