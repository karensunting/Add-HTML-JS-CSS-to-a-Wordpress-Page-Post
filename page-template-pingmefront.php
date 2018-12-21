<?php
/*
Template Name: PingMe-FrontPage
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- PAGE settings -->
    <!-- <link rel="icon" href="assets/app/pingme-Logo-s.png" /> -->
    <link rel="icon" href="<?php echo get_theme_file_uri( 'assets/app/pingme-Logo-s.png' ); ?>" />
    <title>PingMe App | Cloud VoIP | International Call | Low Price</title>
    <!-- CSS dependencies -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      type="text/css"
    />
    <link href="<?php echo get_theme_file_uri( 'aquamarine.css'); ?>" rel="stylesheet" type="text/css" />
     <!--
      Script: Make my navbar transparent when the document is scrolled to top
    -->
    <script src="<?php echo get_theme_file_uri( 'js/navbar-ontop.js' ); ?>" type="text/javascript"></script>
     <!-- Script: Animated entrance -->
    <script src="<?php echo get_theme_file_uri( 'js/animate-in.js' ); ?>" type="text/javascript"></script>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light" style="">
      <div class="container">
       <!-- <button
          class="navbar-toggler navbar-toggler-right border-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbar6"
        >
          <span class="navbar-toggler-icon"></span>
        </button>-->
        <div class="collapse navbar-collapse" id="navbar6"></div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a href="https://www.pingme.tel/">
              <img
                class="img-fluid d-block"
                src="<?php echo get_theme_file_uri( 'assets/app/PingMe-Logo-400.png' ); ?>"
                height="70"
                width="206"
              />
            </a>
          </div>
        </div>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbar2SupportedContent"
          aria-controls="navbar2SupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse text-center justify-content-end"
          id="navbar2SupportedContent"
        >
          <ul class="navbar-nav">
            <li class="nav-item mx-2 text-dark">
              <a class="nav-link text-muted" href="#">Home</a>
            </li>
            <li class="nav-item mx-2 text-dark">
              <a class="nav-link text-muted" href="#features">Features</a>
            </li>
            <li class="nav-item mx-2 text-dark">
              <a class="nav-link text-muted" href="#rate&amp;plan"
                >Rate | Plan</a
              >
            </li>
            <li class="nav-item mx-2 text-dark">
              <a class="nav-link text-muted" href="#download"
                >Download</a
              >
            </li>

          </ul>
          <a class="btn navbar-btn text-white mx-2 btn-primary" href="https://www.pingme.tel/blog/"
            >Blog</a
          >
        </div>
      </div>
    </nav>
 
<!--cover-->
<!--
  <div class="bg-primary" style="background-image: url(&quot;assets/app/banner-pingme.png&quot;); background-position: top center;	background-size: cover; background-repeat: no-repeat;">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6"> <img class="img-fluid d-block mx-5 my-5" src="assets/app/banner-phone.png" width="270"> </div>
        <div class="col-md-6 my-5 text-lg-left text-center align-self-center">
          <h1 class="display-4 bg-primary2">Connect World Easily and Affordably</h1>
          <p class="lead bg-primary2">Multi-Cloud VoIP provider with excellent quality<br>Coming Soon...</p>
          <div class="row mt-5">
            <div class="col-6 col-lg-5"> <a href="#">
                <img class="center-block img-fluid d-block shadowed" src="assets/app/download_android.png"> </a> </div>
            <div class="col-6 col-lg-5"> <a href="#">
                <img class="center-block img-fluid d-block shadowed" src="assets/app/download_ios.png"> </a> </div>
          </div>
        </div>
        </div>
    </div>
  </div>-->

  <div class="pt-3 bg-primary" style="background-image: url(<?php echo get_theme_file_uri( 'assets/app/banner-pingme.png' ) ?>); background-position: center center;	background-size: cover; background-repeat: no-repeat;">
    <div class="container mt-5">
      <div class="row">

        <div class="col-md-6 my-5 text-lg-left text-center align-self-center">
          <h1 class="display-4 bg-primary2">Connect World Easily and Affordably</h1>
          <p class="lead bg-primary2">Multi-Cloud VoIP provider with excellent quality<br>Coming Soon...</p>
          <div class="row mt-5">
            <div class="col-6 col-lg-5"> <a href="#">
                <img class="center-block img-fluid d-block shadowed" src="<?php echo get_theme_file_uri( 'assets/app/download_android.png' ); ?>" > </a> </div>
            <div class="col-6 col-lg-5"> <a href="#">
                <img class="center-block img-fluid d-block shadowed" src="<?php echo get_theme_file_uri( 'assets/app/download_ios.png' ); ?>"> </a> </div>
          </div>
        </div>
        <div class="col-md-6"> <img class="img-fluid d-block mt-5 mx-5" src="<?php echo get_theme_file_uri( 'assets/app/banner-phone5.png' ); ?>" width="400"> </div>
        </div>
    </div>
  </div>

    <!-- Article style section -->
    <div class="py-5">
      <div class="container">
        <div class="row py-5">
          <div class="col-md-5 order-2 order-md-1">
            <img
              class="img-fluid d-block my-3 mx-auto animate-in-left"
              src="<?php echo get_theme_file_uri( 'assets/app/iphone_side_light.gif' ); ?>"
              alt="Dialpad of PingMe"
              width="200"
            />
          </div>
          <div
            class="col-md-7 align-self-center order-1 order-md-2 my-3 text-md-left text-center"
          >
            <h2 class="text-primary">Reliable and Valuable Cloud VoIP</h2>
            <h5 class="my-4 text-muted">
              PingMe is a Multi-Cloud based VoIP service provider that helps you
              make both local and international calls at an extremely low price.
            </h5>
            <h5 class="my-4 text-muted">
              Both Google Cloud and Amazon web service (AWS) Platform bring you
              an unprecedented call experience with cloud-powered security. Just
              using your existing high-speed Internet connection to make calls.
            </h5>
            <h5 class="my-4 text-muted">
              Why not download PingMe and try to connect any place on earth you
              want?
            </h5>
            <a class="btn btn-outline-primary" href="#features">Learn more</a>
          </div>
        </div>
        <div class="row pt-5">
          <div class="align-self-center col-lg-7 text-md-left text-center">
            <h2 class="text-primary">Powerful, International Calling</h2>
            <h5 class="my-4 text-muted">
              Due to our worldwide deployed servers, calls can be used
              everywhere as long as there is an internet connection. Even you
              can call for free with easy and fun actions.
            </h5>
            <h5 class="my-4 text-muted">
              It is time to say goodbye to your crazy phone bills. You call the
              tune.
            </h5>
            <a class="btn btn-primary shadowed" href="#download">Download</a>
          </div>
          <div class="align-self-center mt-5 col-lg-5">
            <img
              class="img-fluid d-block animate-in-right"
              src="<?php echo get_theme_file_uri( 'assets/app/iphone_ipad_light.png' ); ?>"
            />
          </div>
        </div>
        <hr class="mt-0" />
      </div>
    </div>
    <!-- Features -->
    <div class="py-5 section text-center bg-light" id="features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="align-items-center text-center text-dark">
              Features All For Your Everyday Life
            </h1>
          </div>
        </div>
        <div class="row d-flex justify-content-between">
          <div class="col-md-4 col-lg-3 p-4">
            <img
              class="img-fluid d-block mx-auto"
              src="<?php echo get_theme_file_uri( 'assets/app/cloud.png' ); ?>"
              width="100"
            />
            <h4 class="my-3 text-center">Trustworthy Cloud Based</h4>
            <p>Disaster Recovery, always available</p>
          </div>
          <div class="col-md-4 col-lg-3 p-4">
            <img
              class="img-fluid d-block mx-auto"
              src="<?php echo get_theme_file_uri( 'assets/app/AR.png' ); ?>"
              width="100"
            />
            <h4 class="my-3 text-center">Affordable Rates</h4>
            <p>Not only the cheapest, but aslo excellent quality and service</p>
          </div>
          <div class="col-md-4 col-lg-3 p-4">
            <img
              class="img-fluid d-block mx-auto"
              src="<?php echo get_theme_file_uri( 'assets/app/international.png' ); ?>"
              width="100"
            />
            <h4 class="my-3 text-center">International Calling</h4>
            <p>Support almost all countries on earth</p>
          </div>
        </div>
      </div>
    </div>
     <!-- Cover -->
    <!-- Rate -->
    <div class="py-5" style="" id="rate&amp;plan">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" style="">
             <h1 class="align-items-center text-center text-dark">
            Best International Calling Rate
            </h1>
            <p class="text-center">
              We provide cheap international calling rates to any mobile or
              landline number in thousands of destinations around the world.
              Rates are subject to change without notice.
            </p>
            <div class="row">
              <div class="col-md-12">
                <h3 class="text-center">Popular destinations (Start from)</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/IN@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">India</p>
                <p class="mb-0">US$ <b>0.021</b>/min<br /></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/US@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">USA</p>
                <p class="mb-0">US$ <b>0.0085</b>/min<br /></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/CA@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">Canada</p>
                <p class="mb-0">US$ <b>0.0075</b>/min<br /></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/BD@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">Bangladesh</p>
                <p class="mb-0">US$ <b>0.05</b>/min<br /></p>
                <p class="mb-0">US$ <b>0.03</b>/min Eco<br /></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/CN@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">China</p>
                <p class="mb-0">US$ <b>0.019</b>/min<br /></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/NG@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">Nigeria</p>
                <p class="mb-0">US$ <b>0.18</b>/min<br /></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/AE@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">UAE</p>
                <p class="mb-0">US$ <b>0.25</b>/min<br /></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 p-3">
            <div class="row">
              <div class="col-3 p-0">
                <img
                  class="img-fluid d-block"
                  src="<?php echo get_theme_file_uri( 'assets/app/countries2/PH@2x.png' ); ?>"
                />
              </div>
              <div class="col-9">
                <p class="lead mb-1">Philippines</p>
                <p class="mb-0">US$ <b>0.20</b>/min<br /></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Download -->
    <div class="bg-primary" id="download">
      <div class="container">
        <div class="row py-3">
          <div class="col-md-6">
            <img
              class="img-fluid d-block my-4 animate-in-left"
              src="<?php echo get_theme_file_uri( 'assets/app/iphone_isometric_light.png' ); ?>"
            />
          </div>
          <div class="col-md-6 align-self-center text-center text-md-left">
            <h1 contenteditable="true">
              <b
                >Download PingMe App to see Rates and Plans for all supported
                Countries</b
              >
            </h1>
            <p class="lead text-dark">
              ...On the way, coming out in December 2018...
            </p>
            <div class="row mt-4">
              <div class="col-6 col-md-5">
                <a href="#">
                  <img
                    class="center-block img-fluid d-block shadowed"
                    src="<?php echo get_theme_file_uri( 'assets/app/download_android.png' ); ?>"
                  />
                </a>
              </div>
              <div class="col-6 col-md-5">
                <a href="#">
                  <img
                    class="center-block img-fluid d-block shadowed"
                    src="<?php echo get_theme_file_uri( 'assets/app/download_ios.png' ); ?>"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-6 p-3">
            <h5><b>Main</b></h5>
            <ul class="list-unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#features">Features</a></li>
              <li><a href="#rate&amp;plan">Rate | Plan</a></li>
              <li><a href="#download">Download</a></li>
              <li><a href="https://www.pingme.tel/blog/">Our Blog</a></li>
              <!-- <li><a href="#" contenteditable="true">Support</a></li> -->
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 p-3">
            <h5><b>About</b></h5>
            <p class="mb-0">
              PingMe is a Multi-Cloud based VoIP service provider that helps you
              make both local and international calls at an extremely low price.
            </p>
          </div>
          <!--<div class="col-lg-3 col-md-6 p-3">
            <h5><b>Follow us</b></h5>
            <div class="row">
              <div
                class="col-md-12 d-flex align-items-center justify-content-between my-2"
              >
                <a href="#">
                  <i
                    class="d-block fa fa-facebook-official text-muted fa-lg mr-2"
                  ></i>
                </a>
                <a href="#">
                  <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
                </a>
                <a href="#">
                  <i
                    class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"
                  ></i>
                </a>
                <a href="#">
                  <i
                    class="d-block fa fa-pinterest-p text-muted fa-lg mx-2"
                  ></i>
                </a>
                <a href="#">
                  <i class="d-block fa fa-reddit text-muted fa-lg mx-2"></i>
                </a>
                <a href="#">
                  <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>-->
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mb-0 mt-2">
              @Copyright 2018 PingMe | All rights reserved |
              <a href="https://www.pingme.tel/privacypolicy/">Privacy Policy</a> |
              <a href="https://www.pingme.tel/copyrightnotice/">Copyright Notice</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <!-- Script: Smooth scrolling between anchors in the same page -->
    <script src="<?php echo get_theme_file_uri( 'js/smooth-scroll.js' ); ?>" type="text/javascript"></script>
  </body>
</html>
