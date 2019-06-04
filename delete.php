<?php

  $pageTitle = 'Dollaby-delete';
  include 'init.php';

  $id=$_GET['id'];
  include $tp1.'header.php';
 ?>
 <!-- Start mine -->
 <div class="view">
   <div class="container">
     <!-- Start Body -->
     <div class="content">
       <div class="head text-center">
         <h2 class="main-color">More Details</h2>
       </div>
       <div class="row text-center">
         <div class="col-md-8">
           <div class="item">
             <div class="image">
                <?php
                  include $cl.'items.php';
                  $obj = new items;
                  $item=$obj->getResult($id);
                  echo'
                      <img src="'.$design."/images/profiles/".$item['imagePath'].'" alt="">
                      </div>
                      <div class="text">
                        <h2>'.$item['model'].'</h2>
                        <span>'.$item['brand'].'</span>
                        <p class="desc">'.$item['description'].'</p>
                        <a class="btn second-back" href="confrimDelete.php?id='.$item['itemID'].'">Delete Now</a>
                      </div>
                  ';
                ?>
          </div>
         </div>
       </div>
     </div>
   </div>
   <!-- End Body -->
 </div>
 <!-- End mine -->

 <?php include $tp1.'footer.php'; ?>
