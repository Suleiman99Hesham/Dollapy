<?php

  include 'init.php';

  $id = $_GET['id'];

  include $cl.'items.php';

  $obj = new items;

  $obj->id=$id;
  $obj->delete();

  header('Location: home.php');
  exit();

 ?>
