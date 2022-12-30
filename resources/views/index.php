<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel4U</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/catalog.js"></script>
</head>


<body>
    <div id="bodyimg">

        <!-- navbar -->

        <?php
        require_once("navbar.php");
        session_start();
        ?>

        <header class="page-header header container-fluid">
            <div class="text">
                <h1>Καλός ήρθατε στο Travel4U</h1>
                <p>
                    Σκοπεύετε να πάτε κάποιο ταξίδι για τις διακοπές σας;<br><br>
                    Το μόνο που έχετε να κάνετε είναι να διαλέξετε έναν από τους απίστευτους προορισμούς που σας προσφέρουμε!<br><br>
                    Τα υπόλοιπα τα αναλαμβάνουμε εμείς!<br><br>
                </p> <br><br>
                <div class="packageBtn">
                    <button onclick="goToPackages()" class="btn btn-outline-secondary btn-lg">Τα πακέτα μας</button>
                </div>
            </div>
        </header>
    </div>

    <!-- footer -->

    <?php
    require_once("footer.php");
    session_start();
    ?>
</body>

</html>