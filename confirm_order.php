
<?php  
include_once 'inc/db_config.php';

?>



<?php

if (session_status() == PHP_SESSION_NONE) {
session_start();
}
?>



<head>
<title>Thelaundry360</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
-->

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</head>



<?php
if (!isset($_SESSION["user_loged"])) {

header('Location: login.php');
}

include_once 'inc/nav.php';

?>