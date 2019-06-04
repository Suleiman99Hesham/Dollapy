<?php

  include 'init.php';
  include $cl.'items.php';

  $obj = new items;

  $id = $_GET['id'];

  $obj->model = $_POST['model'];
  $obj->brand =  $_POST['brand'];
  $obj->price = $_POST['price'];
  $obj->description = $_POST['description'];
  $obj->category = $_POST['category'];
  $obj->image =$_POST['image'];
  $obj->id=$id;
  $obj->update();

  header('Location: home.php');
  exit();

 ?>
