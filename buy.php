<?php
  $pageTitle = 'Dollaby - Buy';
  include 'init.php';
  include $tp1.'header.php';
 ?>
  <div class="done">
    <div class="container">
      <!-- Start Body -->
      <div class="content">
        <div class="head text-center">
          <h2 class="h1">This Product is yours Now</h2>
        </div>
      </div>
    </div>
  </div>

 <?php
    include $tp1.'footer.php';
   header( "refresh:3;url=home.php" );
   exit();
  ?>
