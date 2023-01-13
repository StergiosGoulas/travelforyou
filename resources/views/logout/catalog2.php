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
                
            <!-- ID = 5 -->

                <div class="row mt-1">
                    <div class="col-md-3" id="athens">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "travelAgency");

                            $query = "SELECT * FROM entitytravelpackages WHERE packageid = 5";
                            $result = mysqli_query($connection, $query);


                            ?>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td>
                                    <h5><?php echo $row['toCity'] ?></h5>
                                        <img src="<?php echo $row['photoURL']; ?>" alt="" width="225px" height="180px" />
                                        <h6>From: <?php echo $row['fromCity'] ?></h6>
                                        <h6>To: <?php echo $row['toCity'] ?></h6>
                                        <h6>From Date: <?php echo $row['fromDate'] ?></h6>
                                        <h6>To Date: <?php echo $row['toDate'] ?></h6>
                                        <h6>Duration: <?php echo $row['duration'] ?></h6>
                                        <h6>Available Seats: <?php echo $row['availableSeats'] ?></h6>
                                        <h4>Price: <?php echo $row['price'] ?>€ </h4>

                                    </td>
                                </tr>
                            <?php
                                }
                                ?>


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

                                    <!-- ID = 6 -->

                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "travelAgency");

                            $query = "SELECT * FROM entitytravelpackages WHERE packageid = 6";
                            $result = mysqli_query($connection, $query);


                            ?>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td>
                                        <h5><?php echo $row['toCity'] ?></h5>
                                        <img src="<?php echo $row['photoURL']; ?>" alt="" width="225px" height="180px" />
                                        <h6>From: <?php echo $row['fromCity'] ?></h6>
                                        <h6>To: <?php echo $row['toCity'] ?></h6>
                                        <h6>From Date: <?php echo $row['fromDate'] ?></h6>
                                        <h6>To Date: <?php echo $row['toDate'] ?></h6>
                                        <h6>Duration: <?php echo $row['duration'] ?></h6>
                                        <h6>Available Seats: <?php echo $row['availableSeats'] ?></h6>
                                        <h4>Price: <?php echo $row['price'] ?>€ </h4>

                                    </td>
                                </tr>
                            <?php
                                }
                                ?>


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

                                    <!-- ID = 7 -->

                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "travelAgency");

                            $query = "SELECT * FROM entitytravelpackages WHERE packageid = 7";
                            $result = mysqli_query($connection, $query);


                            ?>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td>
                                        <h5><?php echo $row['toCity'] ?></h5>
                                        <img src="<?php echo $row['photoURL']; ?>" alt="" width="225px" height="180px" />
                                        <h6>From: <?php echo $row['fromCity'] ?></h6>
                                        <h6>To: <?php echo $row['toCity'] ?></h6>
                                        <h6>From Date: <?php echo $row['fromDate'] ?></h6>
                                        <h6>To Date: <?php echo $row['toDate'] ?></h6>
                                        <h6>Duration: <?php echo $row['duration'] ?></h6>
                                        <h6>Available Seats: <?php echo $row['availableSeats'] ?></h6>
                                        <h4>Price: <?php echo $row['price'] ?>€ </h4>

                                    </td>
                                </tr>
                            <?php
                                }
                                ?>


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

                                    <!-- ID = 8 -->

                                    <div class="col-md-3">
                        <div class="p-card bg-white p-2 rounded px-3">
                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "travelAgency");

                            $query = "SELECT * FROM entitytravelpackages WHERE packageid = 8";
                            $result = mysqli_query($connection, $query);


                            ?>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td>
                                        <h5><?php echo $row['toCity'] ?></h5>
                                        <img src="<?php echo $row['photoURL']; ?>" alt="" width="225px" height="180px" />
                                        <h6>From: <?php echo $row['fromCity'] ?></h6>
                                        <h6>To: <?php echo $row['toCity'] ?></h6>
                                        <h6>From Date: <?php echo $row['fromDate'] ?></h6>
                                        <h6>To Date: <?php echo $row['toDate'] ?></h6>
                                        <h6>Duration: <?php echo $row['duration'] ?></h6>
                                        <h6>Available Seats: <?php echo $row['availableSeats'] ?></h6>
                                        <h4>Price: <?php echo $row['price'] ?>€ </h4>

                                    </td>
                                </tr>
                            <?php
                                }
                                ?>


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
                </div>
            </form>

            <div class="d-flex justify-content-end text-right mt-2">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="catalog.php" aria-label="Previous"><span
                                    aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link" href="catalog.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="catalog2.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="catalog3.php">3</a></li>
                        <li class="page-item"><a class="page-link" href="catalog3.php" aria-label="Next"><span
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