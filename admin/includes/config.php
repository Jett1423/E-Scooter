<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','id22372249_rkclescooter');
define('DB_PASS','RKCLTech25!');
define('DB_NAME','id22372249_rkcl_escooter');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>