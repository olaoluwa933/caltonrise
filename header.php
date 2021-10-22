<?php session_start(); 
// session_unset();
    $name = str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) );
    if($name == 'index'){
        $pagename = 'HOME';
    }else{
        $pagename = strtoupper($name);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagename; ?> | CALTON RISE STRATEGY ASSOCIATES LIMITED</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">
</head>

<?php include('loader.php'); ?>

<body>
    <div id="body" class="body">
    <!--NAVIGATION BAR-->
    <div id="navbar" class="navigation">
        <a href="index.php" class="logo-container">
            <img src="assets/images/logo.png" alt="" class="logo-img">
            <p class="logo-text">CALTON RISE STRATEGY ASSOCIATES LIMITED</p>
        </a>
        <div id="menu" class="menu">
            <div onclick="this.classList.toggle('active'); document.getElementById('menu').classList.toggle('active');" class="ham">
                <div class="cont">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <ul class="navbar">
                <li id="home" class="nav-item"><a href="index.php">HOME</a></li>
                <li id="about" class="nav-item"><a href="about.php">ABOUT</a></li>
                <li id="services" class="nav-item"><a href="services.php">SERVICES</a></li>
                <li id="partners" class="nav-item"><a href="partners.php">PARTNERS</a></li>
                <a href="contact.php" class="button">Contact Us</a>
            </ul>
        </div>
        <div class="cta">
            <a href="contact.php" class="button">Contact Us</a>
        </div>
    </div>