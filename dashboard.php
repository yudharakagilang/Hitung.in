<?php

include "config.php";


if(empty($_SESSION['username'])){
    header("location: index.php");
  }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    //
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">



    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">



</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/image001.png" alt="Cool" />
                        </a>

                        <h1>HITUNG.IN</h1>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icons/happy2.ico" alt="Cool Admin" />
                </a>

                <h1>HITUNG.IN</h1>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <li class="has-sub">
                            <a class="js-arrow" href="Chart1.php">
                                <i class="fas fa-tachometer-alt"></i>Statistic CCTV 1 </a>

                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="Chart2.php">
                                <i class="fas fa-tachometer-alt"></i>Statistic CCTV 2 </a>

                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="Chart3.php">
                                <i class="fas fa-tachometer-alt"></i>Statistic CCTV 3 </a>

                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="Chart4.php">
                                <i class="fas fa-tachometer-alt"></i>Statistic CCTV 4 </a>

                        </li>
                        </li>

                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal" href="logout.php"
                                onclick="window.location.href = 'logout.php';">
                                Logout
                            </button>
                        </div>

                    </div>

                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">CCTV Camera</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <div class="card text-center">
                                    <div class="card-header">
                                        CCTV 1
                                    </div>
                                    <div class="card-body">
                                    <div class="embed-16by9">
                                        <iframe width="500" height="300" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                    <div id="aw1">
                                            <?php
                                            $mysqli = mysqli_connect("localhost", "root", "", "hitungin");
                                            // QUERY 1
                                            $sql="SELECT value FROM record1 ORDER by time desc limit 1";
                                            $result = mysqli_query($mysqli,$sql);
                                            while($row = mysqli_fetch_array($result)) {
                                                $jumlah_orang=$row['value'];                                                 

                                            }
                                            echo "<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJumlah Orang:&nbsp&nbsp&nbsp$jumlah_orang</h3>";
                                            ?>
                                            </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card text-center">
                                    <div class="card-header">
                                        CCTV 2
                                    </div>
                                    <div class="card-body">
                                        <div class="embed-16by9">
                                        <iframe width="500" height="300" src="http://localhost:5001/video_feed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                    <div id="aw2">
                                            <?php
                                            $mysqli = mysqli_connect("localhost", "root", "", "hitungin");
                                            // QUERY 1
                                            $sql="SELECT value FROM record2 ORDER by time desc limit 1";
                                            $result = mysqli_query($mysqli,$sql);
                                            while($row = mysqli_fetch_array($result)) {
                                                $jumlah_orang2=$row['value'];                                                 
                                                
                                            }
                                            echo "<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJumlah Orang:&nbsp&nbsp&nbsp$jumlah_orang2</h3>";
                                            ?>
                                            </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                            <div class="card text-center">
                                    <div class="card-header">
                                        CCTV 3
                                    </div>
                                    <div class="card-body">
                                        <div class="embed-16by9">
                                        <iframe width="500" height="300" src="http://192.168.43.7:5000/video_feed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                    <div id="aw3">
                                            <?php
                                            $mysqli = mysqli_connect("localhost", "root", "", "hitungin");
                                            // QUERY 1
                                            $sql="SELECT value FROM record3 ORDER by time desc limit 1";
                                            $result = mysqli_query($mysqli,$sql);
                                            while($row = mysqli_fetch_array($result)) {
                                                $jumlah_orang3=$row['value'];                                                 
                                                
                                            }
                                            echo "<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJumlah Orang:&nbsp&nbsp&nbsp$jumlah_orang3</h3>";
                                            ?>
                                            </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
           

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                            href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script>
    $(function () {

        //This setTimeout function execute or call automatically when 5 second completed.


        setInterval(function () {
            $("#aw1").load(" #aw1");
            $("#aw2").load(" #aw2");
            $("#aw3").load(" #aw3");
        }, 1000);
    });
</script>