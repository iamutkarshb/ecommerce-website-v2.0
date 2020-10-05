<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

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
        <section class="section section-header  bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-8 text-center">
                        <h1 class="display-2 font-weight-light mb-4">Our <span class="font-weight-bold">Pricing</span></h1>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of Section -->
        <section class="section section-lg pt-0" style="padding-bottom: 3rem">
            <div class="container text-center">
                <div class="row justify-content-center mb-5 mb-md-7">

                </div>
                <div class="row align-items-center justify-content-around">
                    <div class="col-12 col-lg-4" >
                        <!-- Icon Box -->
                        <div class="d-none d-lg-block icon-box text-center mb-5">
                            <div class="icon icon-shape icon-shape-secondary rounded-circle mb-4">
                                <span class="fas fa-file-invoice"></span>
                            </div>
                            <h3 class="h5">Product features</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            <a href="#" class="btn btn-white btn-sm border-light">Learn More</a>
                        </div>
                        <!-- End of Icon Box -->
                        <!-- Icon Box -->
                        <div class="d-none d-lg-block icon-box text-center mb-5 mb-lg-0">
                            <div class="icon icon-shape icon-shape-secondary rounded-circle mb-4">
                                <span class="fas fa-file-invoice"></span>
                            </div>
                            <h3 class="h5">Product features</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            <a href="#" class="btn btn-white btn-sm border-light">Learn More</a>
                        </div>
                        <!-- End of Icon Box -->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Illustration -->
                        <img src="./assets/img/1259.png" alt="illustration" >
                        <!-- / Illustration -->
                    </div>
                    <div class="col-12 col-lg-4">
                        <!-- Icon Box -->
                        <div class="d-none d-lg-block icon-box text-center mb-5">
                            <div class="icon icon-shape icon-shape-secondary rounded-circle mb-4">
                                <span class="fas fa-file-invoice"></span>
                            </div>
                            <h3 class="h5">Product features</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            <a href="#" class="btn btn-white btn-sm border-light">Learn More</a>
                        </div>
                        <!-- End of Icon Box -->
                        <!-- Icon Box -->
                        <div class="d-none d-lg-block icon-box text-center mb-5 mb-lg-0">
                            <div class="icon icon-shape icon-shape-secondary rounded-circle mb-4">
                                <span class="fas fa-file-invoice"></span>
                            </div>
                            <h3 class="h5">Product features</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            <a href="#" class="btn btn-white btn-sm border-light">Learn More</a>
                        </div>
                        <!-- End of Icon Box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section -->
        <section class="section section-lg pt-0">
            <div class="container text-center">
                <div class="row mb-5">

                    <div class="col">
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt,  </p>
                        <button class="btn btn-lg btn-primary" type="button" style="padding: 1.225rem 1.575rem; font-size: 20px">

                    <span class="mr-1">Price:</span>
                    1,000rs
                </button>
                    </div>
                </div>

            </div>
        </section>
        <section class="section section-md bg-soft">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-8 mb-5">
                        <h2>Frequently asked questions</h2>
                        <p class="lead">Find the answer to your question.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!--Accordion-->
                        <div class="accordion" id="accordionExample1">
                            <div class="card card-sm card-body border-light mb-0">
                                <a href="#panel-1" data-target="#panel-1" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                                    <span class="h6 mb-0 font-weight-bold">What is this Brand</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </a>
                                <div class="collapse" id="panel-1">
                                    <div class="pt-3">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-sm card-body border-light mb-0">
                                <a href="#panel-2" data-target="#panel-2" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-2">
                                    <span class="h6 mb-0 font-weight-bold">About the Clothes</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </a>
                                <div class="collapse" id="panel-2">
                                    <div class="pt-3">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-sm card-body border-light mb-0">
                                <a href="#panel-3" data-target="#panel-3" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-3">
                                    <span class="h6 mb-0 font-weight-bold">Made in INDIA</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </a>
                                <div class="collapse" id="panel-3">
                                    <div class="pt-3">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-sm card-body border-light">
                                <a href="#panel-4" data-target="#panel-4" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-4">
                                    <span class="h6 mb-0 font-weight-bold">Is there a money back guarantee?</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </a>
                                <div class="collapse" id="panel-4">
                                    <div class="pt-3">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Accordion-->
                    </div>
                </div>
            </div>
        </section>
    </main>
<footer class="footer  bg-primary text-white  ">
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
