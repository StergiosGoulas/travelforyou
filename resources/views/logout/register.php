<?php
require_once("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/register.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="../../js/validation.js"></script>

</head>

<body>
	<div id="bodyimg">


		<style>
			#error {
				position: absolute;
				margin-top: 645px;
				margin-left: 600px;
			}

			h3 {
				color: red;
				margin-left: 400px;
			}
		</style>
		<div>
			<?php
			if (isset($_POST["create"])) {
				$firstName = $_POST["first_name"];
				$lastName = $_POST["last_name"];
				$address = $_POST["address"];
				$city = $_POST["city"];
				$postalCode = $_POST["postal_code"];
				$mobilePhone = $_POST["mobile_phone"];
				$email = $_POST["email"];
				$password = $_POST["password"];

				$hash = password_hash($password, PASSWORD_DEFAULT);
			

				$stmt = $pdo->prepare("SELECT * FROM client WHERE email =?");
				$stmt->execute([$email]);
				$result = $stmt->rowCount();
				if ($result > 0) {
					$_SESSION["fail"] = "Sorry this email is already taken. Try another";
					header("Location: register.php");
					exit;
				} else {
					$stmt = $pdo->prepare("INSERT INTO client (firstname, lastname, email, password, phone, address, city, postalcode) VALUES(?,?,?,?,?,?,?,?)");
					$stmt->execute([$firstName, $lastName, $email, $hash, $mobilePhone, $address, $city, $postalCode]);
					header("Location: login.php");
					exit;
				}
			}
			?>

		</div>

		<!-- navbar -->
		<?php
		require_once("navbar.php");
		session_start();
		?>

		<h3>
			<?php
			if (isset($_SESSION['fail'])) {
				echo $_SESSION['fail'];
				unset($_SESSION['fail']);
			}
			?>
		</h3>
		<div class="signup-form">

			<form method="POST" action="register.php">
				<h2>Sign Up</h2>
				<p>Please fill in this form to create an account!</p>
				<hr>
				<div class="form-group">
					<div class="row">
						<div class="col"><input type="text" class="form-control" name="first_name"
								placeholder="First Name" required="required"></div>
						<div class="col"><input type="text" class="form-control" name="last_name"
								placeholder="Last Name" required="required"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col"><input type="text" class="form-control" name="address" placeholder="Address"
								required="required"></div>
						<div class="col"><input type="text" class="form-control" name="city" placeholder="City"
								required="required"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col"><input type="text" class="form-control" name="postal_code"
								placeholder="Postal Code" required="required"></div>
						<div class="col"><input type="text" class="form-control" name="mobile_phone"
								placeholder="Mobile Phone" required="required"></div>
					</div>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="Email" required="required"
						style="border: 1px solid black;">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="pwd" name="password" placeholder="Password"
						pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$"
						title="Must contain at least one number and one uppercase and lowercase letter and at least 8 or more characters"
						required="required">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="cpwd" name="confirm_password"
						placeholder="Confirm Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$"
						title="Must contain at least one number and one uppercase and lowercase letter and at least 8 or more characters"
						required="required">
				</div>
				<div class="form-group">
					<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a
							href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
				</div>
				<div class="form-group">
					<button type="submit" onclick="Validate();" name="create" class="btn btn-primary btn-lg">Sign
						Up</button>
				</div>
			</form>
			<div class="hint-text" style="color: black;">Already have an account? <a href="login.php"
					style="color: black;">Login here</a></div>
		</div>
	</div>
	<!-- footer -->

	<?php
	require_once("footer.php");
	session_start();
	?>

</body>

</html>