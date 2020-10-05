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
        <section class="section section bg-primary pb-5 text-white overflow-hidden z-2">
            <div class="container z-2">
                <div class="row justify-content-center text-center pt-6 pb-3" role="banner">
                    <div class="col-12 col-md-8">
                        <h1 class="display-1 font-weight-light mb-3">Documentation<span class="pro-badge font-weight-bolder text-primary">v3.0</span></h1>
                        <p class="lead px-xl-6 mb-5">Lorem ipsum dolor sit amet, <span class="font-weight-bold"> consectetur adipiscing elit </span>,sed  do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
                <svg class="fill-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 43.4" style="enable-background:new 0 0 1920 43.4;" xml:space="preserve">
                   <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
                </svg>
            </div>
        </section>
        <section id="features" class="section section-lg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- Icon box -->
                        <div class="icon-box text-center mb-5 mb-md-0">
                            <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-3">
                                <span class="fas fa-box-open"></span>
                            </div>
                            <h2 class="my-3 h5">80 components</h2>
                            <p class="px-lg-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-3">
                                <span class="fas fa-pager"></span>
                            </div>
                            <h2 class="my-3 h5">3 sections</h2>
                            <p class="px-lg-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-3">
                                <span class="far fa-file-alt"></span>
                            </div>
                            <h2 class="my-3 h5">4 example pages</h2>
                            <p class="px-lg-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                </div>
            </div>
        </section>

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Accordions</h3>
                </div>
            </div>
        </div>

        <!--End of Title section-->
<div class="section section-md">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-lg-8">
                <!--Accordion-->
                <div class="accordion" id="accordionExample1">
                    <div class="card card-sm card-body border-light mb-0">
                        <a href="#panel-1" data-target="#panel-1" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                            <span class="h6 mb-0 font-weight-bold">Our Company</span>
                            <span class="icon"><span class="fas fa-plus"></span></span>
                        </a>
                        <div class="collapse" id="panel-1">
                            <div class="pt-3">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-sm card-body border-light mb-0">
                        <a href="#panel-2" data-target="#panel-2" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                            <span class="h6 mb-0 font-weight-bold">Components</span>
                            <span class="icon"><span class="fas fa-plus"></span></span>
                        </a>
                        <div class="collapse" id="panel-2">
                            <div class="pt-3">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-sm card-body border-light">
                        <a href="#panel-3" data-target="#panel-3" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                            <span class="h6 mb-0 font-weight-bold">Licenses</span>
                            <span class="icon"><span class="fas fa-plus"></span></span>
                        </a>
                        <div class="collapse" id="panel-3">
                            <div class="pt-3">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Accordion-->
            </div>
        </div>
    </div>
</div>

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Alerts</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-primary" aria-atomic="true" role="alert">
                    <span class="alert-inner--text">This is a primary alert with <a href="#" class="alert-link">an
                            example link</a>. Give it a click if you like.</span>
                </div>
                <div class="alert alert-secondary" aria-atomic="true" role="alert">
                    <span class="alert-inner--text">This is a secondary alert with <a href="#" class="alert-link">an
                            example link</a>. Give it a click if you like.</span>
                </div>
                <div class="alert alert-success" aria-atomic="true" role="alert">
                    <span class="alert-inner--text">This is a success alert with <a href="#" class="alert-link">an
                            example link</a>. Give it a click if you like.</span>
                </div>
                <div class="alert alert-info" aria-atomic="true" role="alert">
                    <span class="alert-inner--text">This is a info alert with <a href="#" class="alert-link">an
                            example link</a>. Give it a click if you like.</span>
                </div>
                <div class="alert alert-warning" aria-atomic="true" role="alert">
                    <span class="alert-inner--text">This is a warning alert with <a href="#" class="alert-link text-dark">an
                            example link</a>. Give it a click if you like.</span>
                </div>
                <div class="alert alert-danger" aria-atomic="true" role="alert">
                    <span class="alert-inner--text">This is a danger alert with <a href="#" class="alert-link">an
                            example link</a>. Give it a click if you like.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Badges</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <span class="badge badge-primary">Primary</span>
                <span class="badge badge-secondary">Secondary</span>
                <span class="badge badge-tertiary">Tertiary</span>
                <span class="badge badge-gray">Gray</span>
                <span class="badge badge-success">Success</span>
                <span class="badge badge-danger">Danger</span>
                <span class="badge badge-warning">Warning</span>
                <span class="badge badge-info">Info</span>
            </div>
            <div class="col-12 text-center">
                <span class="badge badge-pill badge-primary">Primary</span>
                <span class="badge badge-pill badge-secondary">Secondary</span>
                <span class="badge badge-pill badge-tertiary">Tertiary</span>
                <span class="badge badge-pill badge-gray">Gray</span>
                <span class="badge badge-pill badge-success">Success</span>
                <span class="badge badge-pill badge-danger">Danger</span>
                <span class="badge badge-pill badge-warning">Warning</span>
                <span class="badge badge-pill badge-info">Info</span>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Cards</h3>
                </div>
            </div>
        </div>

        <!--End of Title section-->
<div class="section section-md">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="card border-light">
                    <img src="./assets/img/13.jpg" class="card-img-top rounded-top" alt="Office space">
                    <div class="card-body">
                        <span class="h6 icon-tertiary small"><span class="fas fa-medal mr-2"></span>some of the best offers</span>
                        <h2 class="h5 mt-3">Clothes Name/ Model no.</h2>
                        <p class="card-text">A small description abt the Clothes</p>
                        <a href="#" class="btn btn-primary btn-sm">Read All</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-md-7 mb-lg-0">
                <div class="card">
                    <div class="position-relative">
                        <img src="./assets/img/13.jpg" class="card-img-top" alt="Neil Sims">
                    </div>
                    <div class="card-body position-relative mt-n6 mx-2 bg-white text-center rounded border border-light">
                        <h2 class="h5">Clothes Name/ Model no.</h2>
                        <span class="text-gray"><span class="fas fa-map-marker-alt mr-2"></span>Company Name, location</span>
                        <p class="mt-3">Features of the Clothes</p>
                        <button class="btn btn-secondary btn-icon">
                            <a href="pricing.php" style="color: #fff"><span class="mr-1"></span>
                            Price</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="card border-light text-center">
                    <!-- Header -->
                    <div class="card-header bg-white p-3" >
                        <h2 class="h3 text-primary mb-4">Clothes</h2>
                        <div class="position-relative " >
                        <img src="./assets/img/13.jpg" class="card-img-top rounded" alt="Neil Sims">
                    </div>
                    </div>
                    <!-- End Header -->
                    <!-- Content -->
                    <div class="card-body">
                        <ul class="list-unstyled mb-4">
                            <li class="list-item pb-3">Features</li>
                            <li class="list-item pb-3"><strong>Features</strong></li>
                            <li class="list-item pb-3">Features</li>
                            <li class="list-item pb-3"><strong>Features</strong></li>
                        </ul>
                        <button type="button" class="btn btn-primary btn-block animate-up-1">Start
                            Starter</button>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="card border-light px-4 py-5">
                    <div class="card-header bg-white text-center pb-0">
                        <h2 class="h1 mb-3">Get the most out of your network.</h2>
                        <p class="mb-5 lead">
                            Contact management designed for teams and individuals
                        </p>
                    </div>
                    <div class="card-body pt-2 px-0 px-lg-7">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail8">Email address</label>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="input-group">
                                            <input class="form-control form-control-xl" id="exampleInputEmail8" aria-label="Email address" placeholder="Your email address" type="email">
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary rounded-right">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Carousels</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <!-- Carousel -->
                <div id="Carousel2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 rounded" src="./assets/img/2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 rounded" src="./assets/img/456.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Carousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Preview item</span>
                    </a>
                    <a class="carousel-control-next" href="#Carousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next Item</span>
                    </a>
                </div>
                <!-- End of Carousel -->
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Breadcrumbs</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="mb-6">
                    <!--Breadcrumb-->
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb breadcrumb-text-light breadcrumb-primary text-white">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <!--End of Breadcrumb-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Buttons</h3>
                </div>
            </div>
        </div>

        <!--End of Title section-->
<div class="section section-md components-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <h4 class="h5">Main Buttons</h4>
                </div>
                <!--Buttons-->
                <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-primary" type="button">
                    <span class="mr-1"><span class="fas fa-book-open"></span></span>
                    Icon Left
                </button>
                <button class="btn btn-primary" type="button">
                    Icon Right
                    <span class="ml-1"><span class="fas fa-book-open"></span></span>
                </button>
                <!--End of Buttons-->
                <!--End of Buttons-->
                <div class="mb-3 mt-5">
                    <h4 class="h5">Outline Buttons</h4>
                </div>
                <!--Buttons-->
                <button class="btn btn-outline-primary" type="button">Outline-primary</button>
                <button class="btn btn-outline-primary" type="button">
                    <span class="mr-1"><span class="far fa-save"></span></span>
                    Icon Left
                </button>
                <button class="btn btn-outline-primary" type="button">
                    Icon Right
                    <span class="ml-1"><span class="far fa-save"></span></span>
                </button>
                <!--End of Buttons-->
                <div class="mb-3 mt-5">
                    <h4 class="h5">Sizes</h4>
                </div>
                <!--Buttons-->
                <button class="btn btn-sm btn-primary" type="button">Small</button>
                <button class="btn btn-primary" type="button">Regular</button>
                <button class="btn btn-lg btn-primary" type="button">Large Button</button>
                <!--End of Buttons-->
                <!-- Button colors -->
                <div class="mb-3 mt-5">
                    <h4 class="h5">Choose your color</h4>
                </div>
                <div class="mb-3 mt-5">
                    <h4 class="h5 font-weight-bold h6">Main</h4>
                </div>
                <!--Buttons-->
                <button class="btn btn-primary" type="button">Primary</button>
                <button class="btn btn-secondary" type="button">Secondary</button>
                <button class="btn btn-tertiary" type="button">Tertiary</button>
                <button class="btn btn-info" type="button">Info</button>
                <button class="btn btn-success" type="button">Success</button>
                <button class="btn btn-danger" type="button">Danger</button>
                <button class="btn btn-dark" type="button">Dark</button>
                <button class="btn btn-gray" type="button">Gray</button>
                <button class="btn btn-light" type="button">Light</button>
                <button class="btn btn-white" type="button">White</button>
                <!--End Of Buttons-->
                <div class="mb-3 mt-5">
                    <h4 class="h5 font-weight-bold h6">Outline</h4>
                </div>
                <!--Buttons-->
                <button class="btn btn-outline-primary" type="button">Primary</button>
                <button class="btn btn-outline-secondary" type="button">Secondary</button>
                <button class="btn btn-outline-tertiary" type="button">Tertiary</button>
                <button class="btn btn-outline-info" type="button">Info</button>
                <button class="btn btn-outline-success" type="button">Success</button>
                <button class="btn btn-outline-danger" type="button">Danger</button>
                <button class="btn btn-outline-dark" type="button">Dark</button>
                <button class="btn btn-outline-gray" type="button">Gray</button>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <!-- Button Social -->
                        <div class="mb-4 mt-5">
                            <h4 class="h5">Social Buttons</h4>
                        </div>
                        <button class="btn btn-facebook" type="button">
                            <span class="mr-1"><span class="fab fa-facebook-f"></span></span>
                            Login with Facebook
                        </button>
                        <br>
                        <button class="btn btn-github" type="button">
                            <span class="mr-1"><span class="fab fa-github"></span></span>
                            Login with Github
                        </button>
                        <br>
                        <button class="btn btn-pinterest" type="button">
                            <span class="mr-1"><span class="fab fa-pinterest-p"></span></span>
                            Share on Pinterest
                        </button>
                    </div>
                    <div class="col-12 col-lg-4">
                        <!-- Button Social -->
                        <div class="mb-4 mt-5">
                            <h4 class="h5">Round Social Buttons</h4>
                        </div>
                        <button class="btn btn-pill btn-facebook" type="button">
                            <span class="mr-1"><span class="fab fa-facebook-f"></span></span>
                            Login with Facebook
                        </button>
                        <br>
                        <button class="btn btn-pill btn-github" type="button">
                            <span class="mr-1"><span class="fab fa-github"></span></span>
                            Login with Github
                        </button>
                        <br>
                        <button class="btn btn-pill btn-pinterest" type="button">
                            <span class="mr-1"><span class="fab fa-pinterest-p"></span></span>
                            Share on Pinterest
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Forms</h3>
                </div>
            </div>
        </div>

        <div class="section section-lg pb-0">
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col">
                <h2 class="h5">Default Forms</h2>
            </div>
        </div>
        <!-- End of Title -->
    </div>
</div>

<!-- Section -->
<div class="section section-lg pt-4">
    <div class="container">
        <div class="row mb-4 mb-lg-5">
            <div class="col-lg-4 col-sm-6">
                <!-- Form -->
                <div class="form-group mb-4">
                    <label for="exampleInputEmail6">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail6" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="form-group">
                    <label for="exampleInputIcon1">Icon Left</label>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="fas fa-search"></span></span>
                        </div>
                        <input class="form-control" id="exampleInputIcon1" placeholder="Icon Left" type="text" aria-label="Input with icon left">
                    </div>
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="form-group">
                    <label for="exampleInputIcon2">Icon Right</label>
                    <div class="input-group mb-4">
                        <input class="form-control" id="exampleInputIcon2" placeholder="Icon Right" aria-label="Input group" type="text">
                        <div class="input-group-append">
                            <span class="input-group-text"><span class="fas fa-search"></span></span>
                        </div>
                    </div>
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <div class="input-group mb-4">
                        <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password" aria-label="Password">
                        <div class="input-group-append">
                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                        </div>
                    </div>
                </div>
                <!-- End of Form -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Form -->
                <fieldset disabled>
                    <legend class="h6">Disabled Inputs</legend>
                    <div class="form-group">
                        <label for="disabledTextInput">Name</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                    </div>
                    <div class="form-group">
                        <label for="disabledSelect">Disabled select menu</label>
                        <select id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                        </select>
                    </div>
                </fieldset>
                <!-- End of Form -->
                <!-- Form -->
                <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Country</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">United States</option>
                        <option value="2">Germany</option>
                        <option value="3">Canada</option>
                    </select>
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" placeholder="Enter your message..." id="exampleFormControlTextarea1" rows="4"></textarea>
                  </div>
                <!-- End of Form -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Form -->
                <div class="form-group">
                    <label for="validationServer01">First name</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" value="Utkarsh" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="form-group mb-4">
                    <label for="validationServerUsername">Username</label>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                </div>
                <!-- End of Form -->
                <!-- Form -->
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" aria-label="File upload">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <!-- End of Form -->
            </div>
        </div>
        <h3 class="h5">Range Sliders</h3>
        <div class="row mb-4 mb-lg-5">
            <div class="col-lg-6 col-sm-6">
                <!-- Simple slider -->
                <div class="input-slider-container">
                    <div id="input-slider-forms" class="input-slider" data-range-value-min="100" data-range-value-max="500"></div>
                    <!-- Input slider values -->
                    <div class="row mt-3 d-none">
                        <div class="col-6">
                            <span class="range-slider-value" data-range-value-low="200"></span>
                        </div>
                    </div>
                </div>
                <!-- End of Slider -->
            </div>
            <!-- Range slider -->
            <div class="col-lg-6 col-sm-6">
                <!-- Range slider container -->
                <div id="input-slider-range" data-range-value-min="100" data-range-value-max="500"></div>
                <!-- Range slider values -->
                <div class="row d-none">
                    <div class="col-6">
                        <span class="range-slider-value value-low" data-range-value-low="200" id="input-slider-range-value-low"></span>
                    </div>
                    <div class="col-6 text-right">
                        <span class="range-slider-value value-high" data-range-value-high="400" id="input-slider-range-value-high"></span>
                    </div>
                </div>
                <!-- End of range slider values -->
            </div>
        </div>
        <div class="row mb-5 mb-lg-5">
            <div class="col-lg-3 col-md-6">
                <!-- Checkboxes -->
                <div class="mb-3">
                    <span class="h6 font-weight-bold">Checkboxes Round</span>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                    <label class="form-check-label" for="defaultCheck10">
                      Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck20">
                    <label class="form-check-label" for="defaultCheck20">
                      Second Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck30">
                    <label class="form-check-label" for="defaultCheck30">
                      Third Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheckDisabled" disabled>
                    <label class="form-check-label" for="defaultCheckDisabled">
                      Disabled checkbox
                    </label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                <!-- Radio -->
                <fieldset>
                    <legend class="h6">Radios</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Default radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Second default radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
                        <label class="form-check-label" for="exampleRadios4">
                          Third default radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                        <label class="form-check-label" for="exampleRadios3">
                          Disabled radio
                        </label>
                      </div>
                    <!-- End of Radio -->
                </fieldset>
            </div>
            <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                <div class="mb-3">
                    <span class="h6 font-weight-bold">Switches</span>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                    </div>
                    <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                </div>
            </div>
        </div>
        <div class="row mb-4 mb-lg-5">
            <div class="col-12 col-md-4">
                <!-- Form -->
                <div class="form-group">
                    <label class="h6" for="exampleInputDate1">Choose a date</label>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                        </div>
                        <input class="form-control datepicker" id="exampleInputDate1" placeholder="Select date" type="text" aria-label="Date with icon left">
                    </div>
                </div>
                <!-- End of Form -->
            </div>
            <div class="col-12 col-md-8">
                <!-- Form -->
                <div class="input-daterange datepicker row align-items-center">
                    <div class="col">
                        <label class="h6" for="exampleInputDate2">From</label>
                        <div class="form-group">
                            <div class="input-group input-group-border">
                                <div class="input-group-prepend"><span class="input-group-text"><span class="far fa-calendar-alt"></span></span></div>
                                <input class="form-control datepicker" id="exampleInputDate2" placeholder="Start date" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="h6" for="exampleInputDate3">To</label>
                            <div class="input-group input-group-border">
                                <div class="input-group-prepend"><span class="input-group-text"><span class="far fa-calendar-alt"></span></span></div>
                                <input class="form-control datepicker" id="exampleInputDate3" placeholder="End date" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Form -->
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->


        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Modals</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">
                <!-- Button Modal -->
                <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#DefaultModal">Default</button>
                <!-- Modal Content -->
                <div class="modal fade" id="DefaultModal" tabindex="-1" role="dialog" aria-labelledby="DefaultModallabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="h6 modal-title" id="DefaultModallabel">Terms of Service</span>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                                <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                                    soon as possible of high-risk data breaches that could personally affect them.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary">I Got It</button>
                                <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal Content -->
            </div>
            <div class="col-md-4">
                <!-- Button Modal -->
                <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>
                <!-- Modal Content -->
                <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
                        <div class="modal-content bg-gradient-secondary">
                            <div class="modal-header">
                                <p class="modal-title" id="modal-title-notification">A new experience, personalized for you.</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="py-3 text-center">
                                    <div class="modal-icon display-1-lg"><span class="far fa-envelope-open"></span></div>
                                    <span class="h4 modal-title my-3 d-block">Important message!</span>
                                    <p>Do you know that you can assign status and relation to a company right in the visit list?.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-white">Go to Inbox</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal Content -->
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Navbars</h3>
                </div>
            </div>
        </div>

        <div class="section section-md">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary mb-4">
                    <div class="container position-relative">
                        <a class="navbar-brand mr-lg-5" href="#">
                                                        <img class="navbar-brand-dark" src="./assets/img/490071.png">


                        </a>
                        <div class="navbar-collapse collapse" id="navbar-primary">
                            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <span class="nav-link-inner-text">Sections</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <span class="nav-link-inner-text">Components</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                        <span class="nav-link-inner-text">Pages</span>
                                        <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center" aria-haspopup="true" aria-expanded="false">About<span class="fas fa-angle-right nav-link-arrow"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" class="dropdown-item">About
                                                        Company</a>
                                                    <a href="#" class="dropdown-item">About
                                                        Startup</a>
                                                    <a href="#" class="dropdown-item">About
                                                        Team</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center" aria-haspopup="true" aria-expanded="false">Blog <span class="fas fa-angle-right nav-link-arrow"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" class="dropdown-item">Blog</a>
                                                    <a href="#" class="dropdown-item">Single
                                                        Article</a>
                                                    <a href="#" class="dropdown-item">Single
                                                        Article 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Contact</a></li>
                                        <li><a class="dropdown-item" href="#">Pricing</a></li>
                                        <li><a class="dropdown-item" href="#">Services</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="text-white mb-0">Primary navbar</p>
                            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Navs</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <!-- Nav Wrapper -->
                <div class="nav-wrapper position-relative">
                    <ul class="nav nav-pills nav-fill flex-column flex-sm-row">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" data-toggle="tab" href="#">Country</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Region</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">City</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Street</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Nav Wrapper -->
            </div>
        </div>
        <!-- Title -->
        <div class="row mt-5 mb-3">
            <div class="col-md-4">
                <div class="mb-2">
                    <h4 class="h5">Round Pill</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-10">
                <!-- Nav Wrapper -->
                <div class="nav-wrapper position-relative">
                    <ul class="nav nav-pills rounded nav-fill flex-column flex-md-row">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" data-toggle="tab" href="#">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Messages</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Nav Wrapper -->
            </div>
        </div>
        <!-- Title -->
        <div class="row mt-5 mb-3">
            <div class="col-md-4">
                <div class="mb-2">
                    <h4 class="h5">Pills with Icons</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-10">
                <!-- Nav Wrapper -->
                <div class="nav-wrapper position-relative">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" data-toggle="tab" href="#"><span class="fas fa-tachometer-alt mr-2"></span>Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><span class="far fa-user-circle mr-2"></span>Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><span class="far fa-sun mr-2"></span>Deals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><span class="far fa-comments mr-2"></span>Playbook</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Nav Wrapper -->
            </div>
        </div>
        <!-- Title -->
        <div class="row mt-5 mb-3">
            <div class="col-md-4">
                <div class="mb-2">
                    <h4 class="h5">Vertical Pills</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-3">
                <!-- Nav Wrapper -->
                <div class="nav-wrapper position-relative">
                    <ul class="nav nav-pills square nav-fill flex-column vertical-tab">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#"><span class="d-block"><span class="fas fa-dungeon mr-2"></span>Stats</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#"><span class="d-block"><span class="far fa-user-circle mr-2"></span>Profile</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#"><span class="d-block"><span class="far fa-sun mr-2"></span>Settings</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#"><span class="d-block"><span class="far fa-comments mr-2"></span>Messages</span></a>
                        </li>
                    </ul>
                </div>
                <!-- End of Nav Wrapper -->
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Pagination</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="mb-4">
                    <h4 class="h6 font-weight-bold">Square pagination with icon-nav</h4>
                </div>
                <nav aria-label="Blog page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-left"></span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-right"></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <div class="mt-4 mb-4 mt-sm-0">
                    <h4 class="h6 font-weight-bold">Square pagination with text-nav</h4>
                </div>
                <nav aria-label="Products page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="mb-4">
                    <h4 class="h6 font-weight-bold">Disabled and active states</h4>
                </div>
                <nav aria-label="Templates page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" aria-label="first link" tabindex="-1" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-6">
                <div class="mt-4 mb-4 mt-sm-0">
                    <h4 class="h6 font-weight-bold">Choose your size</h4>
                </div>
                <nav aria-label="Default page navigation">
                    <ul class="pagination pagination-lg">
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-left"></span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-right"></span></a>
                        </li>
                    </ul>
                </nav>
                <nav aria-label=" page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-left"></span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-right"></span></a>
                        </li>
                    </ul>
                </nav>
                <nav aria-label="Posts navigation example">
                    <ul class="pagination pagination-sm">
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-left"></span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" aria-label="first link" href="#"><span class="fas fa-angle-double-right"></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Popovers</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <!-- End of Title -->
        <div class="row mt-5">
            <div class="col-lg-12 d-block d-lg-flex justify-content-around">
                <button type="button" class="btn btn-sm btn-secondary mb-3" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on top
                </button>

                <button type="button" class="btn btn-sm btn-secondary mb-3" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on right
                </button>

                <button type="button" class="btn btn-sm btn-secondary mb-3" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on bottom
                </button>

                <button type="button" class="btn btn-sm btn-secondary mb-3" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                    Popover on left
                </button>

            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Progress bars</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Primary Color</span>
                        </div>
                        <div class="progress-percentage">
                            <span>50%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Secondary Color</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Tertiary Color</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-tertiary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Dark Color</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Gray Color</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-gray" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Success Bar</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Info Bar</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Danger Bar</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="progress-info">
                        <div class="progress-label">
                            <span class="text-primary">Warning Bar</span>
                        </div>
                        <div class="progress-percentage">
                            <span>60%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->


        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Tabs</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <!-- Tab Nav -->
                <div class="nav-wrapper position-relative mb-2">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Shots</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Likes</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Tab Nav -->
                <!-- Tab Content -->
                <div class="card">
                    <div class="card-body p-0">
                        <div class="tab-content" id="tabcontent1">
                            <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p><p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Content -->
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Toasts</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header text-primary">
                        <span class="fab fa-bootstrap"></span>
                        <strong class="mr-auto ml-2">Bootstrap</strong>
                        <span class="text-small">11 mins ago</span>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="toast-body">
                      Hello, world! This is a toast message.
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="toast bg-primary text-white fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header text-primary">
                        <span class="fab fa-bootstrap"></span>
                        <strong class="mr-auto ml-2">Bootstrap</strong>
                        <span class="text-small">11 mins ago</span>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="toast-body">
                      Hello, world! This is a toast message.
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="toast bg-tertiary text-white fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-tertiary text-white">
                        <span class="fab fa-bootstrap"></span>
                        <strong class="mr-auto ml-2">Bootstrap</strong>
                        <span class="text-small">11 mins ago</span>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span class="text-white" aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="toast-body">
                      Hello, world! This is a toast message.
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Tooltips</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <!-- End of Title -->
        <div class="row mt-5">
            <div class="col-lg-12 d-block d-md-flex justify-content-around">
                <button type="button" class="btn btn-sm btn-secondary mb-4 mb-sm-0" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                Tooltip on top
                </button>
                <button type="button" class="btn btn-sm btn-secondary mb-4 mb-sm-0" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                Tooltip on right
                </button>
                <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                Tooltip on bottom
                </button>
                <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                Tooltip on left
                </button>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

        <div class="section section-sm pb-0 mb-n4">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="h4">Typography</h3>
                </div>
            </div>
        </div>

        <!-- Section -->
<div class="section section-md">
    <div class="container">
        <!-- Title  -->
        <div class="row">
            <div class="col-md-4">
                <div class="mb-5">
                    <h4 class="h6 font-weight-bold">Headings</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="h1">h1. Bootstrap heading</h2>
                <h2>h2. Bootstrap heading</h2>
                <h3>h3. Bootstrap heading</h3>
                <h4>h4. Bootstrap heading</h4>
                <h5>h5. Bootstrap heading</h5>
                <h6>h6. Bootstrap heading</h6>
            </div>
        </div>
        <!-- Title  -->
        <div class="row">
            <div class="col-md-4">
                <div class="mt-6 mb-5">
                    <h4 class="h6 font-weight-bold">Customizing headings</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-12">
                <h5 class="h1">Fancy display heading</h5>
                <h5 class="h2">Fancy display heading</h5>
                <h5 class="h3">Fancy display heading</h5>
                <h5 class="h4">Fancy display heading</h5>
                <h5 class="h5">Fancy display heading</h5>
                <h5 class="h6">Fancy display heading</h5>
            </div>
        </div>
        <!-- Title  -->
        <div class="row">
            <div class="col-md-4">
                <div class="mt-6 mb-5">
                    <h4 class="h6 font-weight-bold">Display headings</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-12">
                <h5 class="display-1">Display 1</h5>
                <h5 class="display-2">Display 2</h5>
                <h5 class="display-3">Display 3</h5>
                <h5 class="display-4">Display 4</h5>
            </div>
        </div>
        <!-- Title  -->
        <div class="row">
            <div class="col-md-4">
                <div class="mt-6 mb-5">
                    <h4 class="h6 font-weight-bold">Paragraphs</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="mb-3">
                    <h4 class="h6 font-weight-bold">Simple paragraph</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            <div class="col-md-6">
                <div class="mt-5 mb-3 mt-sm-0">
                    <h4 class="h6 font-weight-bold">Lead paragraph</h4>
                </div>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Muted text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-muted mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Dark text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-dark mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Primary text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-primary mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Secondary text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-secondary mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Tertiary text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-tertiary mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Info text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-info mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Danger text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-danger mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <div class="row py-3 align-items-center">
            <div class="col-sm-2">
                <h4 class="h6 text-uppercase text-muted">Success text</h4>
            </div>
            <div class="col-sm-10">
                <p class="text-success mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
            </div>
        </div>
        <!-- Title  -->
        <div class="row">
            <div class="col-md-4">
                <div class="mt-6 mb-5">
                    <h4 class="h6 font-weight-bold">Blockquote</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-8">
                <blockquote class="blockquote text-center">
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.
                    <footer class="blockquote-footer mt-3 text-primary">Loreum Ipsum</footer>
                </blockquote>
            </div>
        </div>
        <!-- Title  -->
        <div class="row">
            <div class="col-md-4">
                <div class="mt-6 mb-5">
                    <h4 class="h6 font-weight-bold">Lists</h4>
                </div>
            </div>
        </div>
        <!-- End of Title -->
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <h4 class="h6 font-weight-bold">Unordered</h4>
                </div>
                <ul>
                    <li>Minutes of the last meeting</li>
                    <li>Do we need yet more meetings?</li>
                    <li>Any other business
                        <ul>
                            <li>Programming</li>
                            <li>Web Design</li>
                            <li>Database</li>
                        </ul>
                    </li>
                    <li>Something funny</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="mt-5 mb-3 mt-sm-0">
                    <h4 class="h6 font-weight-bold">Ordered</h4>
                </div>
                <ol>
                    <li>Minutes of the last meeting</li>
                    <li>Do we need yet more meetings?</li>
                    <li>Any other business
                        <ol>
                            <li>Programming</li>
                            <li>Web Design</li>
                            <li>Database</li>
                        </ol>
                    </li>
                    <li>Something funny</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->

    </main>

    <footer class="footer  bg-primary text-white pt-2 mt-n3">
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
