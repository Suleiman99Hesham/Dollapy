<?php
  $do =isset($GET['do'])?$GET['do']:'manage';
  if($do=='manage'){
    echo "11111";
  }elseif ($do=='Add') {
    # code...
    echo "222222";
  }elseif ($do=='Insert') {
    # code...
    echo "3333333";
  }else {
    # code...
    echo "44444444";
  }
