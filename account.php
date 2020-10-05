<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  echo '<h1>Invalid Login! Redirecting...</h1>';
  header("Refresh: 3; url=index.php");
}

if($_SESSION["type"]==="admin") {
  header("location:admin.php");
}

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
 <main >

        <!-- Hero -->
        <section class="section section-header pb-11 bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-8 text-center">

                    </div>
                </div>
            </div>
        </section>
        <!-- Section -->
        <div class="section py-0" style="margin-bottom: 67px; ">
            <div class="container mt-n10">
                <div class="row">
                    <div class="col-12">
                      <div class="jumbotron">
                        <div style="text-align:center">
                        <h1 class="display-4"><?php echo 'Hi ' .$_SESSION['fname'] .''; ?> your Account Details</h1>

                        <p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
                      </div>
                        <form method="POST" action="update.php">
                            <!-- Form -->


                            <?php

                              $result = $mysqli->query('SELECT * FROM users WHERE id='.$_SESSION['id']);

                              if($result === FALSE){
                                die(mysql_error());
                              }

                              if($result) {
                                $obj = $result->fetch_object();
                                echo '<div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <label for="exampleInputIcon4">First Name</label>
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><span class="fas fa-user"></span></span>
                                          </div>
                                          <input class="form-control" name="fname" id="exampleInputIcon4" placeholder="'. $obj->fname. '" type="text" aria-label="name" >
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <label for="exampleInputIcon4">Last Name</label>
                                      <div class="input-group mb-2">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"><span class="fas fa-user"></span></span>
                                          </div>
                                          <input class="form-control" id="exampleInputIcon4" name="lname" placeholder="'. $obj->lname. '" type="text" aria-label="name" >
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">Address</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-map-marker-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="address" placeholder="'. $obj->address. '" type="text" aria-label="address" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">City</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-map-marker-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="city" placeholder="'. $obj->city. '" type="text" aria-label="city" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">Pincode</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-map-marker-alt"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="pin" placeholder="'. $obj->pin. '" type="text" aria-label="pincode" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputIcon4">Your email</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        </div>
                                        <input class="form-control" id="exampleInputIcon4" name="email" placeholder="'. $obj->email. '" type="text" aria-label="email adress" >
                                    </div>
                                </div>
                                <!-- End of Form -->
                                ';


                            }



                          echo '<div class="form-group">
                              <!-- Form -->
                              <div class="form-group">
                                  <label for="password">Old Password</label>
                                  <div class="input-group mb-4">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                      </div>
                                      <input class="form-control" id="password" name="pwd" placeholder="Password" type="password" aria-label="Password" >
                                  </div>
                              </div>
                              <!-- End of Form -->
                              <!-- Form -->
                              <div class="form-group">
                                  <label for="passwordConfirm">New Password</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                      </div>
                                      <input class="form-control" id="passwordConfirm" name="pwd" placeholder="Confirm password" type="password" aria-label="Password" >
                                  </div>
                              </div>
                              <!-- End of Form -->

                          </div>';
                        ?>


                            <!-- End of Form -->
                            <div style="text-align:center">
                            <button type="submit" id="right-label" value="Update" class="btn btn-primary" >Update</button>
                            <button type="reset" id="right-label" value="Reset" class="btn  btn-primary">Reset</button>
                          </div>
                        </form>

                    </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Section -->

        <!-- End of section -->
    </main>
<footer class="footer  bg-primary text-white " >
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
