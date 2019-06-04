<?php
session_start();
if(isset($_SESSION['Username'])){
  include 'init.php';
  $do =isset($GET['do'])?$GET['do']:'manage';
  if($do=='manage'){

  }
  elseif ($do =='Edit') {
    echo "edit page";
  }
  include $tpl.'footer.php' ;
}else {
  header('Location: index.php');
  exit();
}
