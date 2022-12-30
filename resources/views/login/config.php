<?php
$dbuser = "root";
$dbpwd = "";
$dbname = "travelAgency";

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=travelAgency',$dbuser,$dbpwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>