<?php

error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );

$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_database = "karose_eshopdb"; 

$db_server=mysqli_connect($db_hostname,$db_username,$db_password); //connection is established here
if(!$db_server)
{
	die('oops connection problem ! --> '.mysql_error());
}

$db_select=mysqli_select_db($db_server,$db_database);
if(!$db_select)
{
	die('oops database selection problem ! --> '.mysql_error());
}


?>