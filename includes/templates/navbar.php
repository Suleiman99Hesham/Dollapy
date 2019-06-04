<?php
  include $cl.'connection.php';
  $obj = new connection;

  session_start();
  if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    $q2=$obj->DBH->prepare("SELECT name,photoPath from account where username='$username'");
    $q2->execute();
    $row = $q2->fetch();
    $name = $row['name'];
    $path = $row['photoPath'];
    $path = $design.'/images/profiles/'.$path;
    $obj->disconnect();

  }

?>

<!-- Start Header -->
<div class="header main-back">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="logo">
        <h2 class="h1 logo"><a href="home.php">Dollaby</a><i class="fab fa-pied-piper-hat"></i></h2>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
        <div class="links">
          <ul class="navbar-nav">
            <!-- <li><a href="home.php">Home</a></li>
            <li><a href="team.php">Team</a></li> -->
          </ul>
        </div>
        <div class="profile">
        <?php
          if (isset($_SESSION['username'])) {
            echo '
              <div class="media">
                <div class="image">
                  <img class="mr-3 rounded-circle" src="'.$path.'" alt="profile-image">
                </div>
                <div class="media-body nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h6 class="name">'.$name.'<i class="fas fa-chevron-down second-color"></i></h6>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item main-color" href="#">
                      <div class="profile">
                        <div class="media">
                          <div class="image">
                            <img class="mr-3 rounded-circle" src="'.$path.'" alt="profile-image">
                          </div>
                          <div class="media-body nav-item dropdown">
                            '.$name.'
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item main-color" href="insert.php"><i></i>Insert Item</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item main-color" href="logout.php"><i></i> Log out</a>
                  </div>
                </div>
              </div>
            ';
          }else{
            echo '
              <a href="login.php" class="sign">Sign In</a>
            ';
          }
         ?>
       </div>
      </div>
    </nav>
</div>
<!-- End Header -->
