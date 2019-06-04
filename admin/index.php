<?php
    session_start();
    $pageTitle="login";
    $noNavbar='';
     if(isset($_SESSION['Username'])){
       header('Location: dashboard.php');
     }
    include 'init.php';
     //Check if user coming from HTTP post request
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $username = $_POST['user'];
      $password = $_POST['pass'];
      $hashedpass= sha1($password);

      //check if the User Exist In DataBase
      $stmt = $connect->prepare("SELECT Username, Password FROM users WHERE Username=? AND Password=? AND GroupID= 1");
      $stmt->execute(array($username,$hashedpass));
      $count =$stmt->rowCount();
      //if count >0 , this means that DataBase contains Record with this Data Information
      if($count>0){
        $_SESSION['Username']=$username; //register session Name
        header('Location: dashboard.php'); // Redirect to dashboard Page
        exit(); //to exit script
      }
    }
?>
  <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
    <input class="form-control" type="password" name="pass" placeholder="password" autocomplete="off" />
    <input class="btn btn-primary btn-block" type="submit" value="login"/>
  </form>
<?php include $tpl.'footer.php' ; ?>
