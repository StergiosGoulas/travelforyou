<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <script src="../js/contact.js"></script>
</head>

<body>
    <div id="bodyimg">


        <!-- navigation bar -->

        <?php
        require_once("navbar.php");
        session_start();
        ?>

        <body>
            <div class="ui-widget">
                <pre style="text-align: center;"><b style="font-size: 30px;">      Travel4U</b>
          </pre>
            </div>
        </body>

        <div class="container">
            <form action="contact.html" onsubmit="submitFunction()">

                <label for="fname" style="color: black;">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your first name" required="required">

                <label for="email" style="color: black;">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email" required="required">

                <label for="subject" style="color: black;">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Your subject" required="required">

                <label for="message" style="color: black;">Message</label>
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px"
                    required="required"></textarea>

                <input type="submit" value="Submit">
            </form>


        </div>
    </div>



    <!-- footer -->

    <?php
        require_once("footer.php");
        session_start();
        ?>
</body>

</html>