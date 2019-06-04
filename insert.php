<?php
  $pageTitle="Dollaby - Find Item";
  include 'init.php';

  $lock = false;

  if($_SERVER['REQUEST_METHOD']=='POST'){ // If I'm Comming from submit on form
    include $cl.'items.php';

    $obj = new Items;
    $obj->model = $_POST['model'];
    $obj->brand =  $_POST['brand'];
    $obj->price = $_POST['price'];
    $obj->description = $_POST['description'];
    $obj->category = $_POST['category'];
    $obj->image =$_POST['image'];

    // Send Date to DataBase
    try{
      $obj->addToDB();

      header('Location: done.php'); // Go to Page done.php
      exit();
    }catch(PDOException $e){
      echo "Error: " . $e;
    }
  }
  include $tp1.'header.php';
?>

    <!-- Start Founder -->
    <div class="fouder">
      <!-- Start Body -->
      <div class="container">
        <div class="content">
          <div class="head text-center">
              <h2>Share Your Post</h2>
          </div>
          <div class="form">
            <form class="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
              <div class="form-group">
                <label>Model</label>
                <input class="form-control" type="text" name="model" autofocus required>
              </div>
              <div class="form-group">
                <label>Categories</label>
                <input list="categories" name="category" class="form-control" required>
                <datalist id="categories">
                  <option value="T-shirts">
                  <option value="Pants">
                  <option value="Jackets">
                  <option value="Shoeses">
                  <option value="Skirts">
                </datalist>
              </div>
              <div class="form-group">
                <label>Brand</label>
                <input class="form-control" type="text" name="brand"  required>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="number" name="price"  required>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5"  required></textarea>
              </div>
              <div class="d-flex file">
                <label for="photo">Item Photo</label>
                <div class="d-flex">
                  <input type="file" name="image" id="image" required>
                </div>
              </div>
              <input type="submit" name="submit" value="Share Now" class="btn second-back">
            </form>
          </div>
        </div>
      </div>
      <!-- End Body -->
    </div>
    <!-- End Header -->

<?php include $tp1.'footer.php' ?>
