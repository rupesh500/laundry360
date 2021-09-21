<?php  
  include_once 'inc/db_config.php';
//  include_once 'inc/header.php';


?>
 

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
        
    
    <?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>