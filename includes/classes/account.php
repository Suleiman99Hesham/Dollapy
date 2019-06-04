<?php

  require_once "connection.php";

  class account extends connection
  {

    var $username;
    var $password;
    var $count;
    var $name;
    var $email;
    var $hashedPass;
    var $path;

    public function login(){

      // Search with prepare for more security
      $stmt = $this->DBH->prepare("SELECT username, password FROM account WHERE username = ? AND password = ? ");
      $stmt ->execute(array($this->username,$this->password));

      // Number of elements found
      $this->count = $stmt->rowCount();

      if($this->count>0){
        session_start();
        $_SESSION['username'] = $this->username; // Register SESSION Name

        header('Location: home.php'); // Redirect to home
        exit();
      }

    }

    public function signUp(){
      $stmt = $this->DBH->prepare("INSERT INTO account (username, password, email, name, photoPath)  values ('$this->username','$this->hashedPass','$this->email','$this->name','$this->path')");
      // Send Date to DataBase
      try{
        $stmt->execute();
        session_start();
        $_SESSION['username'] = $this->username;
        header ('Location: home.php'); // Redirect To Home after Register
        exit();
      }catch(PDOException $e){
        echo "Erro: ".$e;
      }

    }

  }

?>
