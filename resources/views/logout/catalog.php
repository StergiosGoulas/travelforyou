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
                        
                            <h5 class="mt-2"> Αθήνα </h5>
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/c0/98/c5/caption.jpg?w=700&h=-1&s=1&cx=960&cy=638&chk=v1_dd51d42e9a888a6b338f"
                                alt="" width="225px" height="180px">

                            <h6>PackageID: 1 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Αθήνα</h6>
                            <h6>From Date: 10/03/2023</h6>
                            <h6>To Date: 12/03/2023</h6>
                            <h6>Duration: 3</h6>
                            <h6>Available Seats: 13</h6>
                            <h4>Price: 149€ </h4>

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
                            <h5 class="mt-2"> Σαντορίνη </h5>
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/81/30/3f/caption.jpg?w=700&h=-1&s=1&cx=1846&cy=1833&chk=v1_6ae0a81ae3361e988707"
                                alt="" width="225px" height="180px">
                            <h6>PackageID: 2 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Σαντορίνη</h6>
                            <h6>From Date: 12/08/2023</h6>
                            <h6>To Date: 15/08/2023</h6>
                            <h6>Duration: 4</h6>
                            <h6>Available Seats: 12</h6>
                            <h4>Price: 399€ </h4>

                            <div class="d-flex justify-content-between stats">
                                <button type="submit" name="test" class="button">Buy Package</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <h5 class="mt-2"> Ίος </h5>
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/69/ba/f7/mylopotas-beach.jpg?w=700&h=500&s=1"
                                alt="" width="225px" height="180px">
                            <h6>PackageID: 3 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Ίος</h6>
                            <h6>From Date: 05/06/2023</h6>
                            <h6>To Date: 09/08/2023</h6>
                            <h6>Duration: 5</h6>
                            <h6>Available Seats: 5</h6>
                            <h4>Price: 419€ </h4>

                            <div class="d-flex justify-content-between stats">
                                <button type="submit" name="test" class="button">Buy Package</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <h5 class="mt-3"> Μύκονος </h5>
                            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/33/f9/51/mykonos.jpg?w=700&h=500&s=1"
                                alt="" width="225px" height="180px">
                            <h6>PackageID: 4 </h6>
                            <h6>From: Ηράκλειο</h6>
                            <h6>To: Μύκονος</h6>
                            <h6>From Date: 20/06/2023</h6>
                            <h6>To Date: 23/06/2023</h6>
                            <h6>Duration: 4</h6>
                            <h6>Available Seats: 4</h6>
                            <h4>Price: 519€ </h4>

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
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                    aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link" href="catalog.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="catalog2.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="catalog3.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="catalog2.php" aria-label="Next"><span
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