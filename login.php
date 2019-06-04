<?php
  $noNavbar = "";
  $noEnd = "";
  $pageTitle = "Dollaby - Login";
  include 'init.php';

  session_start();
  if(isset($_SESSION['username'])){
    header("Location: home.php");
    exit();
  }

  include $cl.'account.php';

  // Check if come from Request not normal reload
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $obj = new account;

    $obj->username = $_POST['username'];
    $obj->password = $_POST['password'];
    // $obj->hashedPass = sha1($password);

    $obj->login();

  }

  include $tp1.'header.php';
?>
    <section class="sign-in access">
      <div class="container">
        <div class="content-acc">
          <div class="row">
            <div class="col-md-5">
              <div class="overlay text-center">
                <div class="text">
                  <p>Welcome Back To</p>
                  <h2 class="h1 logo"> <a class="login-Dollaby" href="home.php">Dollaby</a></h2>
                  <p>We are so glad that you back for us another time</p>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form">
                <div class="text">
                  <h5>Login to access your account</h5>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                  <div class="form-group d-flex">
                    <input type="text" name="username" id="username" placeholder="Username">
                  </div>
                  <div class="form-group d-flex">
                    <input type="password" name="password" id="password" placeholder="Password">
                  </div>
                  <input type="submit" name="" value="Login" class="btn">
                </form>
                <h6>Didn't have acount? <a href="register.php">Register Now</a> </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include $tp1.'footer.php'; ?>
