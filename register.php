<?php
  session_start();
  if(isset($_SESSION['username'])){
    header ('Location: home.php');
    exit();
  }
  $noNavbar = "";
  $noEnd = "";
  $pageTitle = "Dollaby - Register";
  $lock = true;

  include 'init.php';
  include $cl.'account.php';

  // Check if come from Request not normal reload
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $obj = new account;
    $obj->username = $_POST['username'];
    $obj->name = $_POST['name'];
    $obj->email = $_POST['email'];
    $obj->hashedPass = $_POST['password'];
    $obj->path=$_POST['image'];

    $obj->signUp();

  }
  include $tp1.'header.php';
?>
    <section class="register access">
      <div class="container">
        <div class="content-acc">
          <div class="row">
            <div class="col-md-5">
              <div class="overlay text-center">
                <div class="text">
                  <p>Welcome To</p>
                  <h2 class="h1 logo"> <a class="login-Dollaby" href="home.php">Dollaby</a></h2>
                  <p>We Hope that you enjoy your experience with us</p>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form">
                <div class="text">
                  <h5>Register now to enjoy our features</h5>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                  <div class="form-group d-flex">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                  </div>
                  <div class="form-group d-flex">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                  </div>
                  <div class="form-group d-flex">
                    <input type="text" name="email" id="email" placeholder="Email" required>
                  </div>
                  <div class="form-group d-flex">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                  </div>
                  <div class="form-group d-flex file">
                    <input type="file" name="image" id="image" required>
                  </div>
                  <div class="foot d-flex">
                    <input type="submit" name="" value="Register" class="btn">
                    <h6>Already have acount? <a href="login.php">Login Now</a> </h6>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include $tp1.'footer.php'; ?>
