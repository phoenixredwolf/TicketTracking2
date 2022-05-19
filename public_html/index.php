<?php
    ob_start();
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Rave Business Systems</title>

    <link rel="Rave Business Systems" href="../img/logo.png">
    <link rel="Rave Business Systems" sizes="60x60" href="../img/logo.png">
    <link rel="Rave Business Systems" sizes="70x70" href="../img/logo.png">
    <link rel="Rave Business Systems" sizes="75x75" href="../img/logo.png">
    <link href="../img/logo.ico" rel="shortcut icon">

    <!-- css -->
    <link href="../css/fonts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/tickettracking.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <!-- JavaScripts -->
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top animated fadeInDown" style="animation-delay: 0.2s">
        <div class="container">
            <a class="navbar-brand" href="https://ravebizz.com/index.html">
                <img src="../img/logo.png" height="84" width="70" alt="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career.html">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <div class="home-banner">
        <div class="home-banner-layer">
            <header class="masthead d-flex">
                <div class="container">
                    <div class="row mx-auto">
                        <div class="col-lg-4"> </div>
                            <div class="col-lg-8">
                                <h1>Employee Portal</h1>
                                <div class="col-md-8">
                                    <form class="form-text" role="form" action="login-action.php" method="post" id="frmLogin" onsubmit="return validate();">
                                        <div>
                                            <label for="username" class="form-label">Username: </label>
                                            <input name="username" id="username" type="text" placeholder="Enter Username" required autofocus>
                                        </div>
                                        <div>
                                            <label for="password" class="form-label">Password: </label>
                                            <input name="password" id="password" type="password" required>
                                        </div>
                                    </form>
                                </div>

                            </div>
                    </div>
                </div>
            </header>
        </div>
    </div>


</body>
</html>