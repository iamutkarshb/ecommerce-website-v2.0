<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Clothes Company</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Cloth company">
<meta name="author" content="Iquest web team">
<meta name="description" content="using Open source and accessibility and Bootstrap Design System to create amazing pages.">
<meta name="keywords" content="bootstrap, Bootstrap Design System, accessiblity, open source, amazing website" />


<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/490072.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/490072.png">

<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- style CSS -->
<link type="text/css" href="./css/style.css" rel="stylesheet">

</head>


<body>
    <header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-dark navbar-transparent">
        <div class="container position-relative">
            <a class="navbar-brand mr-lg-5" href="index.php">
                <img class="navbar-brand-dark" src="./assets/img/490071.png" >

            </a>
            <div class="navbar-collapse .bs collapse" id="navbar_global">
                 <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="index.php" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                <img class="navbar-brand-dark" src="./assets/img/490071.png" >

                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                            <span class="nav-link-inner-text">Pages</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu" id="pages_submenu">
                            <li><a class="dropdown-item" href="index.php">About</a></li>
                            <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                            <li><a class="dropdown-item" href="pricing.php">Pricing</a></li>
                            <li><a class="dropdown-item" href="services.php">Services</a></li>
                            <li><a class="dropdown-item" href="products.php">Products</a></li>
                            <li><a class="dropdown-item" href="orders.php">Orders</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="components_menu_item" aria-expanded="false" aria-label="Toggle components menu item">
                            <span class="nav-link-inner-text">Clothes</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu" id="components_menu_item">
                            <div class="row">
                                <div class="col-lg-6 inside-bg d-none d-lg-block">
                                    <div class="justify-content-center bg-tertiary text-white">
                                        <div>
                                            <img src="./assets/img/hermes-rivera-OX_en7CXMj4-unsplash.jpg" >
                                        </div>

                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item" href="pricing.php">Adidas Kampung</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Ballet Cloth</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Bast Cloth</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Blucher Cloth</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Boat Cloth</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Brothel creeper</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Bucks</a></li>

                                    </ul>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">
                                        <li><a class="dropdown-item" href="pricing.php">Cantabrian albarcas</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Chelsea boot</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Chopine</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Chukka boot</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Climbing Cloth</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Clog</a></li>

                                    </ul>
                                </div>
                                <div class="col pl-0">
                                    <ul class="list-style-none">

                                        <li><a class="dropdown-item" href="pricing.php">Derby Cloth</a> </li>
                                        <li><a class="dropdown-item" href="pricing.php">Desert Boot</a> </li>
                                        <li><a class="dropdown-item" href="pricing.php">Diabetic Cloth</a></li>
                                        <li><a class="dropdown-item" href="pricing.php">Dress Cloth</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="support_submenu" aria-expanded="false" aria-label="Toggle support menu item">
                            <span class="nav-link-inner-text">Support</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg" id="support_submenu">
                            <div class="col-auto px-0" data-dropdown-content>
                                <div class="list-group list-group-flush">
                                    <a href="documentation.php" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-secondary"><span class="fas fa-file-alt"></span></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">Documentation<span class="badge badge-sm badge-secondary ml-2">v3.0</span></span>
                                            <span class="small">Examples and guides</span>
                                        </div>
                                    </a>
                                    <a href="contact.php" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                        <span class="icon icon-sm icon-primary"><span class="fas fa-microphone-alt"></span></span>
                                        <div class="ml-4">
                                            <span class="text-dark d-block">Contact US</span>
                                            <span class="small">Found an issue? Let us know!</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">

                      <a href="cart.php" class="btn btn-tertiary animate-up-2">
                      <span class="d-none d-md-inline"></span>My Cart</a>
                      <?php

                      if(isset($_SESSION['username'])){
                        echo '
                          <a href="account.php" class="btn btn-tertiary animate-up-2 ml-md-3">
                          <span class="d-none d-md-inline"></span>My Account</a>
                        ';
                        echo '<a href="logout.php" class="btn btn-secondary ml-md-3 animate-up-2" style="border-color: #fff;">
                      <span class="fas fa-book mr-2"></span> Sign Out</a>';
                      }
                      else{
                        echo '<a href="sign-up.php" class="btn btn-tertiary animate-up-2 ml-md-3">
                        <span class="d-none d-md-inline"></span> Register</a>';
                        echo '<a href="sign-in.php" class="btn btn-secondary ml-md-3 animate-up-2 " style="border-color: #fff;">
                      <span class="fas fa-book mr-2"></span> Sign In</a>';
                    }
                    ?>

                    </li>
                  </ul>
            </div>

            <div class="d-flex align-items-center ">




                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

          </div>
        </div>
    </nav>
</header>
    <main>



        <!-- Hero -->
        <section class="section-header bg-secondary text-white">
            <div class="container">
               <div class="row justify-content-between align-items-center">
                  <div class="col-12 col-md-7 col-lg-6 text-center text-md-left">
                        <h1 class="display-2 mb-4">Clothes House <br class="d-none d-md-inline">Digital Agency</h1>
                        <p class="lead mb-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                        <a href="services.php" class="btn btn-tertiary mr-3 animate-up-2">What we do <span class="ml-2"><span class="fas fa-arrow-right"></span></span></a>
                    </div>
                  <div class="col-12 col-md-5 d-none d-md-block text-center"><img src="./assets/img/1877.png" alt=""></div>
               </div>
            </div>
            <div class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
               <svg class="fill-white" version="1.1" x="0px" y="0px" viewBox="0 0 1920 43.4" style="enable-background:new 0 0 1920 43.4;" xml:space="preserve">
                  <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
               </svg>
            </div>
        </section>
        <!-- End of Hero section -->
        <!-- Section -->
        <section class="section section-lg">
            <div class="container">
                <div class="row align-items-center justify-content-around">
                    <div class="col-md-6 col-xl-6 my-5 mt-sm-0 ">
                        <img class="rounded img-fluid effect-img-1 d-none d-sm-block" src="./assets/img/6.jpg" style="background-color: rgba(0,0,0,0.6)" >
                        <img class="rounded img-fluid effect-img-2" src="./assets/img/5.jpg" style="background-color: rgba(0,0,0,0.6)"  >
                    </div>
                    <div class="col-md-6 col-xl-5 text-center text-md-left">
                        <h2 class="h1 mb-5 font-weight-light">Small team, <br><span class="font-weight-bold">Big hearts.</span></h2>
                        <p class="lead">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        <p class="lead">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </p>
                        <img src="./assets/img/signature.svg" alt="signature" class="mt-4" width="150">
                    </div>
                </div>
            </div>
        </section>
        <!-- End of section -->
        <!-- Section -->
        <section class="section section-lg pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-lg-4 text-center">
                        <!-- Visit Box -->
                        <div class="icon-box mb-4">
                            <div class="icon icon-primary mb-4">
                                <span class="fas fa-user"></span>
                            </div>
                            <h3 class="h5 icon-box-title">Team Members</h3>
                            <span class="counter display-3 text-gray d-block">400</span>
                        </div>
                        <!-- End of Visit Box -->
                    </div>
                    <div class="col-4 col-lg-4 text-center">
                        <!-- Call Box -->
                        <div class="icon-box mb-4">
                            <div class="icon icon-primary mb-4">
                                <span class="fas fa-money-check"></span>
                            </div>
                            <h3 class="h5 icon-box-title">Clothes Collections</h3>
                            <span class="counter display-3 text-gray d-block">2400</span>
                        </div>
                        <!-- End of Call Box -->
                    </div>
                    <div class="col-4 col-lg-4 text-center">
                        <!-- Email Box -->
                        <div class="icon-box mb-4">
                            <div class="icon icon-primary mb-4">
                                <span class="fas fa-globe-europe"></span>
                            </div>
                            <h3 class="h5 icon-box-title"> Our Brands </h3>
                            <span class="counter display-3 text-gray d-block">40</span>
                        </div>
                        <!-- End of Email Box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of section -->
        <!-- Section -->
        <section class="section section-lg bg-soft">
            <figure class="position-absolute top-0 left-0 w-100 d-none d-md-block mt-n3">
                <svg class="fill-soft" version="1.1"  x="0px" y="0px" viewBox="0 0 1920 43.4"  xml:space="preserve">
                   <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
                </svg>
             </figure>
            <div class="container">
                <div class="row mb-5 mb-lg-6">
                    <div class="col-12 col-md-9 col-lg-8 text-center mx-auto">
                        <h2 class="h1 mb-4">Our Amazing Products</h2>
                        <p class="lead">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.quis nostrud
                        </p>
                        <button class="btn btn-secondary btn-icon"><a href="products.php" style="color: #fff"><span class="mr-1"></span>Check out our Amazing Products -></a></button>
                    </div>
                </div>

                <div class="row">

                  <?php
                    $i=0;
                    $product_id = array();
                    $product_quantity = array();

                    $result = $mysqli->query('SELECT * FROM products');
                    if($result === FALSE){
                      die(mysql_error());
                    }

                    if($result){

                      while($obj = $result->fetch_object() ) {

                        echo '<div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-7 mb-lg-0" style="margin: 50px 0px;" >
                        <div class="card">
                        <div class="position-relative">
                        <img src="images/products/'.$obj->product_img_name.'" class="card-img-top" alt="Neil Sims">
                        </div>
                        <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light">
                                    <h2 class="h5">'.$obj->product_name.'</h2>
                                    <span class="text-gray"><span class="fas fa-map-marker-alt mr-2"></span>'.$obj->product_code.'</span>
                                    <p class="mt-3">'.$obj->product_desc.'</p>
                                    <p class="mt-3"><strong>Units Available</strong>:'.$obj->qty.'</p>
                                    <p class="mt-3"><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>
                                  ';
                        if($obj->qty > 0){
                                echo '  <button class="btn btn-secondary btn-icon"><a href="update-cart.php?action=add&id='.$obj->id.'" style="color: #fff"><span class="mr-1"></span>Add to Cart</a></button>';
                                echo '  <button class="btn btn-secondary btn-icon"><a href="pricing.php" style="color: #fff"><span class="mr-1"></span>Product</a></button>';

                            }
                        else{
                                echo '<a ><span class="mr-1"></span>Out Of Stock!</a>';
                            }


                            echo '
                                </div>
                            </div>
                        </div>';


                        $i++;
                      }

                    }

                    $_SESSION['product_id'] = $product_id;
                    ?>

            </div>
        </div>

            <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
                <svg class="fill-white" version="1.1"  x="0px" y="0px" viewBox="0 0 1920 43.4" style="enable-background:new 0 0 1920 43.4;" xml:space="preserve">
                   <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
                </svg>
             </figure>
        </section>


    </main>
    <section class="section py-0">
    <div class="container z-2">
       <div class="row position-relative justify-content-center align-items-cente">
          <div class="col-12">
             <!-- Card -->
             <div class="card border-light px-4 py-1">
                <div class="card-body text-center text-md-left">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="h1 mb-3">Become one of us</h2>
                            <p class="lead mb-4">
                                To got notify for our new offers and get the best price, Sign UP here!!
                            </p>
                            <a href="sign-up.php" class="btn btn-primary">
                                <span class="mr-1">
                                    <span class="fas fa-file-invoice"></span>
                                </span>
                                Sign Up
                            </a>
                        </div>
                        <div class="col-12 col-md-6 mt-5 mt-md-0 text-md-right">
                            <img src="./assets/img/98.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
          </div>
       </div>
    </div>
</section>


    <footer class="footer  bg-primary text-white pt-9 mt-n9">
    <div class="container">
        <div class="row">
            <div class="col mb-md-0">

                <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo" style="padding-top: 35px;padding-bottom: 11px">
                    <p class="font-weight-normal font-small mb-0">Copyright © InnovatorsQuest-VIT
                        <span class="current-year">2020</span>. All rights reserved.<br> Designed by | <a href="#"> Utkarsh Bansal</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

      <!-- Core -->
<script src="./vendor/jquery/dist/jquery.min.js"></script>
<script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="./vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="./vendor/jarallax/dist/jarallax.min.js"></script>
<script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="./vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="./vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- main JS -->
<script src="./assets/js/main.js"></script>
</body>

</html>
