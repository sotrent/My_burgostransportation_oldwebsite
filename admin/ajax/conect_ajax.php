<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'cargomobil';

mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);

//$_GET['data'];

echo "<script>alert('DATA');</script>";

?>
