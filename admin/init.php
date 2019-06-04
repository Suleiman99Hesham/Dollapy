<?php

    include 'connect.php';

    //Routes
    $tpl ='includes/templates/';  //template directory
    $css ='layout/css/'; // css directory
    $js ='layout/js/'; // js directory
    $func='includes/functions/'; //functions directory

    //include the important files
    include $func.'functions.php';
    include $tpl.'header.php' ;

    //include Navbar On All Pages Except the ones with noNavbar
    if(!isset($noNavbar)){  include $tpl.'navbar.php';}
