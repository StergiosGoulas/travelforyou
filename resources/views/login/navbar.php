<?php
require_once("../logout/config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Travel4U</title>
	<link rel="stylesheet" href="../../css/navbar.css">
</head>

<body>

	<?php
	if (isset($_POST["create"])) {

			$_SESSION["logged"] = false;
	}
	?>

	<nav>
		<div id="error" style="color:red"></div>
		<div class="nav">

			<li class="nav-item">
				<a aria-current="page" class="active" href="index.php"><img
						src="https://cdn.pixabay.com/photo/2013/07/13/13/20/plane-160861_960_720.png" alt=""
						height="70px" width="100px"></a>
			</li>
			<li class="nav-item">
				<a aria-current="page" href="catalog.php">Travel Packages</a>
			</li>
			<li class="nav-item">
				<a aria-current="page" href="orders.php">My orders</a>
			</li>
			<li class="nav-item">
				<a aria-current="page" href="contact.php">Contact</a>
			</li>
			<li class="nav-item" style="margin-left:70%;">
				<a aria-current="page" href="logout.php">Logout</a>
			</li>
		</div>
	</nav>
</body>