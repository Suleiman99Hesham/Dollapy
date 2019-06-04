<?php

  $pageTitle = 'Dollaby';
  include 'init.php';
  include $tp1.'header.php';
  include $cl.'items.php';
 ?>
    <!-- Start Founder -->
    <div class="home">
      <!-- Start Body -->
      <div class="container">
        <div class="content">
          <div class="head text-center">
              <h2>Search To Find Your Item Now</h2>
          </div>
          <div class="search">
            <div class="search-bar d-flex">
              <form class="" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <input type="text" name="name" value="" placeholder="Search by Your Item Name" required>
                <button type="submit" name="button" class="btn second-back">
                  <i class="fas fa-search"></i>
                </button>
              </form>
            </div>
            <div class="filters">
              <div class="d-flex">
                <h6 class="main-color">Categories:</h6>
                <div class="controls">
                  <ul class="list-unstyled">
                    <li class="active" data-filter="all" value="all">ALL</li>
                    <li data-filter=".T-shirts" value="T-shirts">T-shirts</li>
                    <li data-filter=".Pants" value="Pants">Pants</li>
                    <li data-filter=".Jackets" value="Jackets">Jackets</li>
                    <li data-filter=".Shoeses" value="Shoeses">Shoeses</li>
                    <li data-filter=".Skirts" value="Skirts">Skirts</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="row mixItUp">
              <?php
                $item = new items;
                if($_SERVER['REQUEST_METHOD']!="POST"){
                  $result = $item->getResult(-1);
                }else {
                  $item->model = $_POST['name'];
                  $result = $item->search();
                }
                foreach ($result as $row){
                  $id=$row["itemID"];
                  echo'
                  <div class="col-md-3 mix '.$row['category'].'">
                    <div class="item text-center">
                      <div class="image">
                        <img src="design/images/profiles/'.$row['imagePath'].'" alt="">
                        ';

                    if (isset($_SESSION['username'])) {
                      echo '
                        <div class="choices">
                          <a href="delete.php?id='.$id.'" class="delete">
                            Delete
                          </a>
                          <a href="update.php?id='.$id.'" class="delete edit">
                            Update
                          </a>
                        </div>
                    ';
                  }

                  echo'
                      </div>
                      <div class="text">
                        <h4 class="name">'.$row['model'].'</h4>
                        <span class="date">'.$row['price'].'</span>
                      </div>
                      <div class="mine">
                        <a href="view.php?id='.$id.'" class="btn second-back">
                          Buy Product
                        </a>
                      </div>
                    </div>
                  </div>
                  ';
                }
               ?>
               <div class="match head text-center col-md-12">
                 <h2 class="h1">No Match Items</h2>
               </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Body -->
    </div>
    <!-- End Founder -->

    <script src="design/js/mixitup.js"></script>
<?php include $tp1.'footer.php'; ?>
