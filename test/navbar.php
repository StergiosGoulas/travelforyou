<nav class="navbar navbar-expand-lg navbar-light bg-light myNavbarConfig">
    <div class="container-fluid myNavbarConfig">
        <a class="navbar-brand navbarIcon" href="./index.php">
        <img src="https://cdn.pixabay.com/photo/2013/07/13/13/20/plane-160861_960_720.png" width="120" height="100">
        </a>
        <div class="collapse navbar-collapse">
            <div class="navBarLogoText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a aria-current="page" href="./index.php">BookTravel</a>
                    </li>
                </ul>
            </div> 
            <div class="navbarLText">
                <ul class="navbar-nav ml-auto">
                    <?php
                        if (!isset($_SESSION['userlogin'])) {
                            echo (
                                    '
                                        <li class="nav-item">
                                            <a aria-current="page" href="./index.php">Home</a>
                                        </li>
                                    '
                            );
                        } else {
                            echo (
                                    '
                                        <li class="nav-item">
                                            <a aria-current="page" href="./userLogin/login.php">Home</a>
                                        </li>
                                    '
                            );
                        }
                    ?>
                    <li class="nav-item">
                        <a aria-current="page" href="./travelPackages/packages.php">Travel Packages</a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" href="./contactForm/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>

            <?php

                if (!isset($_SESSION['userlogin'])) {
                    echo (
                        '
                            <div class="navbar-nav ms-auto navbarRText">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a aria-current="page" href="./userLogin/login.php">
                                            <i class="fa fa-sign-in"></i>
                                            Login
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-current="page" href="./userRegister/register.php">
                                            <i class="fa fa-user"></i>
                                            Register
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        '
                    );
                } else {
                    echo (
                        '
                            <div class="navbar-nav ms-auto navbarRText">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#" id="logoutPopUp" aria-current="page">
                                            <i class="fa fa-sign-out"></i>    
                                            Logout
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a aria-current="page" href="./userPackages/purchases.php">
                                            <i class="fa fa-plane"></i>
                                            My Packages
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        '
                    );
                }
            ?>
    
        </div>
    </div>
</nav>