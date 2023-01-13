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

</head>


<body>
    <div>
        <div>
            <?php
            $connection = mysqli_connect("localhost", "root", "", "travelAgency");

            $query = "SELECT * FROM entitytravelpackages ORDER BY packageid;";
            $result = mysqli_query($connection, $query);


            ?>
            <!-- <h5 class="mt-2"> Αθήνα </h5> -->
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <td>
                        <?php echo $row['availableSeats'] ?>
                    </td>
                    <img src="<?php echo $row['photoURL']; ?>" />
                </tr>
            <?php
                }
            ?>

        </div>
    </div>


</body>

</html>