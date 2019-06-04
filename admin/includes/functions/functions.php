<?php
  //dynamic page title
  function getTitle(){
    global $pageTitle;
    if(isset($pageTitle)){
      echo $pageTitle;
    }else {
      echo "default";
    }
  }
