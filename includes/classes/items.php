<?php

  require_once "connection.php";

  class Items extends connection {

    // Item Details
    var $itemId="";
    var $model="";
    var $image="";
    var $price ="";
    var $description="";
    var $category="";
    var $brand="";

    // To Add Element to Database
    public function addToDB(){
      $stmt = $this->DBH->prepare("INSERT INTO item (model, imagePath, price, description, category, brand) VALUES ('$this->model', '$this->image', '$this->price', '$this->description', '$this->category', '$this->brand')");
  		$stmt->execute();
      $this->disconnect();
    }

    // To get elements in Database
    public function getResult($value){
      if($value==-1){
        $stmt= $this->DBH->prepare('SELECT * FROM item');
        $stmt->execute();
        $result = $stmt->fetchAll(); // When Result is one many rows
      }else{
        $stmt= $this->DBH->prepare("SELECT * FROM item WHERE itemID='$value'");
        $stmt->execute();
        $result = $stmt->fetch(); // When Result is one row
      }
      $this->disconnect();
      return $result;
    }

    public function search(){
      $stmt= $this->DBH->prepare("SELECT * FROM item WHERE model LIKE "."'%".$this->model."%'");
      $stmt->execute();
      $result = $stmt->fetchAll(); // When Result is one row
      $this->disconnect();
      return $result;
    }

    public function delete(){
      $stmt = $this->DBH->prepare("DELETE FROM item WHERE itemID = '$this->id'");
      $stmt->execute();
      $this->disconnect();
    }

    public function update(){
      $stmt = $this->DBH->prepare("UPDATE item SET model = '$this->model' , price = '$this->price' , category= '$this->category', imagePath='$this->image', brand='$this->brand', description='$this->description' WHERE itemID = '$this->id'");
      $stmt->execute();
      $this->disconnect();
    }

  }

 ?>
