 <?php
// Create connection
include 'dbconnect.php';
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "<br/>Connected successfully";

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `$table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countype` varchar(50) NOT NULL,
  `startdate` text NOT NULL,
  `enddate` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

if ($connection->query($sql) === TRUE) {
    echo "<br/>installing successfully";
} else {
   echo "<br/>Error installing: " . $connection->error;
}

$connection->close();
?> 