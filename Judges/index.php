<?php session_start();
if (isset($_SESSION['id']) == ""){
  header('Location: ../');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    MAMU2019 | Welcome Judge
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <link href="../assets/css/carousel.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
</head>

<div id="introLoader" class="introloader">
    <div class="spinner">
      <div class="spinner-inner"></div>
    </div>
</div>
<body class="landing-page sidebar-collapse" style="background-color:#ffffff;">
  <nav class="navbar navbar-white fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <img src="../assets/img/nav_icon.png" style="width:145px;"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a href="#" class="nav-link" style="padding-top:9px;padding-bottom:9px;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="profile-preview" id="_imagNav">
                    <img src='../assets/img/user_default.png' alt='profile picture' style='width:2rem;' class='rounded-circle img-fluid'/>
                   </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                  <h6 class="dropdown-header"><?php echo $_SESSION['name']; ?></h6>
                  <a href="#" class="dropdown-item">About</a>
                  <a href="../Logout/" class="dropdown-item">Sign out</a>
             </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main">
      <div class="container pt-5 pb-2">
        <div class="col-12 text-center pt-5 mt-5">
          <h4 class="description text-primary mt-0" style="font-size:1.4rem;">Mister & Miss <br />University of Makati</h4>
        </div>
       </div>
       <!--judge details-->
       <div class="container-fluid">
         <div class="row">
           <div class="col-6 ml-auto mr-auto text-center pb-3">
             <div class="col-lg-4 col-md-4 ml-auto mr-auto">
                <img src="../assets/img/user_default.png" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                <h5 class="description text-primary mb-0" style="font-size: .9em;"><?php echo $_SESSION['name']; ?></h4>
                <p class="description mb-0 mt-0" style="font-size: .6em;">MAMU2019 Judge</p>
                <a href="candidatejudging.php">
                  <button class="btn btn-primary btn-block" type="submit">Start</button>
                </a>
             </div>
           </div>
         </div>
       </div>
       <!--sponsor carousel-->
       <div class="col-lg-6 col-md-6 col-sm-12 m-auto pt-5">
         <div class="row">
           <div class="container">
             <div class="text-center">
               <p class="description text-primary mb-0">
                 SPONSORS
               </p>
             </div>
             <section class="customer-logos slider pb-1" style="background-color: transparent;">
                <div class="slide"><img src="../assets/img/sponsors/image1.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image2.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image3.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image4.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image5.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image6.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image7.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image8.png" style="border-radius: 5px;"></div>
                <div class="slide"><img src="../assets/img/sponsors/image9.png" style="border-radius: 5px;"></div>
             </section>
           </div>
         </div>
       </div>
  </div>
  <footer class="footer mt-5">
      <div class="container">
        <div class="copyright float-left">
          <a href="#" target="_blank">University of Makati</a>
        </div>
        <div class="copyright float-right">
          <a href="#" target="_blank" class="text-primary">MAMU2019&copy;</a>
        </div>
      </div>
  </footer>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- carousel plugin -->
  <script src="../assets/js/plugins/slick.js" type="text/javascript" charset="utf-8"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="../assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
  <!-- snack bar -->
  <script src="../assets/js/plugins/snackbar.min.js" type="text/javascript"></script>
  <!-- judge functions scripts -->
  <script src="frontend/judgeFunctions.js" type="text/javascript"></script>
  <!-- preloader-->
  <script src="../assets/js/plugins/preloader.js" type="text/javascript"></script>
  <!-- sponsors carousel script -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 700, //7 millisecons
        arrows: false,
        dots: false,
          pauseOnHover: true,
          responsive: [{
          breakpoint: 920,
          settings: {
            slidesToShow: 6
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 4
          }
        }]
      });
    });
  </script>
</body>

</html>
