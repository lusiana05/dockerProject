<?php

define('DB_HOST','database');
define('DB_USER','root');
define('DB_PASS','change_me');
define('DB_NAME','note_taking');

$conn = mysqli_connect('database','root','root','note_taking') or die(mysqli_error());

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
