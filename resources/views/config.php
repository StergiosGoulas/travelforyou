<?php
$dbuser = "root";
$dbpwd = "";
$dbname = "travelforyou";


try
{
	$pdo = new PDO('mysql:host=localhost;dbname=travelforyou',$dbuser,$dbpwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>