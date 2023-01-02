<?php
require_once("config.php");
session_start();
?>

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
    <link rel="stylesheet" href="../../css/style.css">
</head>


<body>
    <div id="bodyimg">

        <!-- navbar -->

        <?php
        require_once("navbar.php");
        session_start();
        ?>

        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-row justify-content-between align-items-center filters">
                        <h2 style="color: rebeccapurple;">Ταξιδιωτικά πακέτα</h2>
                    </div>
                </div>
            </div>
            <form method="POST" action="catalog.php">
                <div class="row mt-1">
                    <div class="col-md-3" id="athens">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <h5 class="mt-2"> Παρίσι </h5>
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/e4/4c/04/babylon-tours.jpg?w=500&h=400&s=1"
                                alt="" width="225px" height="180px">
                            <h6>PackageID: 9 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Παρίσι</h6>
                            <h6>From Date: 08/09/2023</h6>
                            <h6>To Date: 10/09/2023</h6>
                            <h6>Duration: 3</h6>
                            <h6>Available Seats: 10</h6>
                            <h4>Price: 399€ </h4>

                            <?php
                            if (isset($_POST["test"])) {
                                if (isset($_SESSION["logged"])) {
                                    header("Location: orders.php");
                                    exit;
                                } else {
                                    header('Location: login.php');
                                    exit;
                                }
                            }
                            ?>

                            <div class="d-flex justify-content-between stats">
                                <button type="submit" name="test" class="button">Buy Package</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <h5 class="mt-2"> Λονδίνο </h5>
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/97/17/9e/riverside-view-of-south.jpg?w=600&h=400&s=1"
                                alt="" width="225px" height="180px">
                            <h6>PackageID: 10 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Λονδίνο</h6>
                            <h6>From Date: 16/10/2023</h6>
                            <h6>To Date: 19/10/2023</h6>
                            <h6>Duration: 4</h6>
                            <h6>Available Seats: 14</h6>
                            <h4>Price: 449€ </h4>

                            <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Package</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <h5 class="mt-2"> Μόναχο </h5>
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/2e/88/54/marienplatz.jpg"
                                alt="" width="225px" height="180px">
                            <h6>PackageID: 11 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Μόναχο</h6>
                            <h6>From Date: 23/12/2023</h6>
                            <h6>To Date: 26/12/2023</h6>
                            <h6>Duration: 4</h6>
                            <h6>Available Seats: 18</h6>
                            <h4>Price: 399€ </h4>

                            <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Package</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <h5 class="mt-3"> Ρώμη </h5>
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/b5/76/1d/piazza-navona.jpg"
                                alt="" width="225px" height="180px">
                            <h6>PackageID: 12 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Ρώμη</h6>
                            <h6>From Date: 02/07/2023</h6>
                            <h6>To Date: 06/07/2023</h6>
                            <h6>Duration: 5</h6>
                            <h6>Available Seats: 6</h6>
                            <h4>Price: 449€ </h4>

                            <div class="d-flex justify-content-between stats">
                            <button type="submit" name="test" class="button">Buy Package</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <div class="d-flex justify-content-end text-right mt-2">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="catalog2.php" aria-label="Previous"><span
                                    aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link" href="catalog.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="catalog2.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="catalog3.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                    aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php
    require_once("footer.php");
    session_start();
    ?>
</body>

</html>