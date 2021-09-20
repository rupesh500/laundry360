<?php
$connection = mysqli_connect('localhost','root','','laundry360');

if($connection){
echo '<script>alert("you are connected")</script>';
} else{
    die("QUERY FAILED" . mysqli_error($connection)) ;
}


?>



