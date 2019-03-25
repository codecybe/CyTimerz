<?php 
include 'dbconfig.php';
$connection = new mysqli($servername, $username, $password, $dbname);
$data = mysqli_query($connection, "select * from $table");
?>

 