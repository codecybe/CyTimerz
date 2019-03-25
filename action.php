<?php 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function record_exists($table, $column, $value) {
    global $connection;
    $query = "SELECT * FROM {$table} WHERE {$column} = {$value}";
    $result = mysql_query($query, $connection);
    if(mysql_num_rows($result)){
        return TRUE;
    } else {
        return FALSE;
    }
}
// Connecting to database
include 'dbconnect.php';

$ctype = $_POST['countype'];
$sdate = $_POST['startdate'];
$edate = $_POST['enddate'];
$startdate = $_POST['indicatedate'];
$combine = $sdate ." ". $edate;
$ttle = test_input($_POST['title']);

mysqli_query($connection, "insert into $table values(NULL,'$ctype','$startdate','$combine','$ttle')");
?>