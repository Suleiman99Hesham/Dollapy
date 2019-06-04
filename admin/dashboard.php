<?php
    session_start();
    if(isset($_SESSION['Username'])){
      include 'init.php';
      $pageTitle="Dollapy";
    }else {
      header('Location: index.php');
      exit();
    }
?>
<section class="register access">
      <div class="container">
        <div class="content-acc">
          <div class="row">
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
                  <div class="foot d-flex">
                    <input type="submit" name="" value="Register" class="btn">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include $tpl.'footer.php' ; ?>
