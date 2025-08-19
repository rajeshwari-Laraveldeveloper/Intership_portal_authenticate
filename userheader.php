<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - BizLand Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Dec 05 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .move {
        height: 75vh;
        padding: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 100px;

    }
    #name{
        color:rgb(53, 88, 203);
        font-size: 40px;
    }
</style>


<header id="header" class="header sticky-top ">


    <div class="branding d-flex align-items-cente bg">

        <div class="container position-relative d-flex align-items-ends justify-content-between gx-0">
            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">EXPLORE Internship</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>

                    <li class="dropdown"><a href="#"><span>Internships</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Deep Dropdown 1</a></li>
                            <li><a href="#">Deep Dropdown 1</a></li>
                            <li><a href="#">Deep Dropdown 1</a></li>
                            <li><a href="#">Deep Dropdown 1</a></li>
                            <li><a href="#">Deep Dropdown 1</a></li>
                            <li><a href="#">Deep Dropdown 1</a></li>
                        </ul>
                    </li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#team">Team</a></li>

                    <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down "></i></a>
                        <ul>
                            <li id="name"><a href="#">
                                    <b>
                                        <?php echo $_SESSION['firstname']; ?>
                                        <?php echo $_SESSION['lastname']; ?>
                                    </b>
                                </a>
                            </li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">All Applications</a></li>
                            <li><a href="#">My Bookmarks</a></li>
                            <li><a href="#">Edit Resume</a></li>
                            <li><a href="#">Manage Account</a></li>
                            <li><a href="candidatelogout.php">Logout</a></li>
                            <li><a href="#">Safety Tips</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </li>
                </ul>


            </nav>

        </div>

    </div>

</header>
<style>
    .userbody {
        height: 78vh;
    }

    #user {
        color: #106eea;


    }

    #firstquote {
        color: rgb(3, 129, 138);
    }
</style>