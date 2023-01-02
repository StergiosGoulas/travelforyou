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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/register.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<style>
    h5 {
        color: red;
        margin-left: 500px;
    }

    .page-footer {
        position=absolute;
        bottom=0;
    }
</style>

<body>
    <div id="bodyimg">

        <?php
        if (isset($_POST["create"])) {
        
            $stmt = $pdo->prepare("SELECT * FROM client WHERE email = ?");
            $stmt->execute([$_POST["email"]]);
            $user = $stmt->fetch();

            if ($user && password_verify($_POST["password"], $user["password"])) {
                $_SESSION["logged"] = true;
                header("Location: ../login/index.php");
                exit;
            } else {
                $_SESSION["error"] = "Wrong Email Or Password.Try again";
                header("Location: login.php");
                exit;
            }
        }
        ?>
        <div id="error" style="color:red"></div>

        <!-- navbar -->

        <?php
        require_once("navbar.php");
        session_start();
        ?>

        <h5>
            <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
        </h5>

        <div class="signup-form">
            <form method="POST" action="login.php">
                <h2>Login</h2>
                <hr>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required"
                        style="border: 1px solid black;">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password"
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$"
                        title="Must contain at least one number and one uppercase and lowercase letter and at least 8 or more characters"
                        required>
                </div>
                <div class="form-group">
                    <button type="submit" name="create" class="btn btn-primary btn-lg">Login</button>
                </div>
            </form>
            <div class="hint-text" style="color: black">Dont have an account? <a href="register.php"
                    style="color: black;">Sign up here</a></div>
        </div>
    </div>
    <!-- footer -->

    <?php
    require_once("footer.php");
    session_start();
    ?>
</body>

</html>