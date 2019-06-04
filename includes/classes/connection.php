<?php

class connection{

	var $DBH;

	function __construct(){
		try{
	    $this->DBH = new PDO('mysql:host=localhost;dbname=dollapy', 'root', ''); //Start a New Connect by DPO Class
	    $this->DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set attribute to my connection
	  } catch (PDOException $e){
	    echo "Faild " . $e->getMessage();
	  }
	}

	function disconnect(){
		$this->DBH = null;
	}

}


?>
