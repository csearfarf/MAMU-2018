<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    MAMU2019 | Candidate Judging
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <link href="../assets/css/carousel.css" rel="stylesheet" />
  <link href="../assets/css/snackbar.min.css" rel="stylesheet" />
  <link href="../assets/css/animate.css" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
</head>
<style>

.avatar-upload {
  position: center;
  max-width: 12.3rem;
  justify-content: center;
  margin: 50px auto;
  margin-bottom: 10px;
  
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.progressbar {
    width: 100%;
  margin: 25px 0;
  position: relative;
  background-color: #EEEEEE;
}

.proggress{
  height: 8px;
  width: 10px;
  background-color: #3498db;
}

.percentCount{
  float:right;
  margin-top: 10px;
  clear: both;
  font-weight: bold;
  font-family: Arial
}
</style>

<div id="introLoader" class="introloader">
    <div class="spinner">
      <div class="spinner-inner"></div>
    </div>
</div>
<body class="landing-page sidebar-collapse" style="background-color:#ffffff;">
  <nav class="navbar navbar-white fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <img src="../assets/img/nav_icon.png" style="width:145px;"/>
    </div>
  </nav>
  <div class="main">
      <div class="container pt-5 pb-2">
        <div class="col-lg-4 m-auto text-center pt-5">
          <h4 class="description text-primary mt-0 mb-0" style="font-size:1.4rem;">Mister & Miss University of Makati</h4>
          <h3 class="description text-primary mt-0" style="font-size:1.4rem;">People's Choice</h3>
        </div>
       </div>
       <!--Candidates -->
       <div class="container-fluid pt-0 mt-0">
            <div class="container">
                <!--display candidates here -->
                <div class="row m-auto">
                    <div class="col-md-4 m-auto">
                        <div class="avatar-upload mt-3">
                            <div class="avatar-preview text-center mr-0" style="margin-right: none;">
                                <div id="imgMale" class="img-raised" style="background-image: url('../assets/img/user_default.png');justify-content: center">
                                </div>
                            </div>
                          </div>
                          <div class="text-center col-8 m-auto">
                            <h4 class="mt-3">Mr. Umak 2019</h4>
                            <button class="btn btn-primary btn-block" id="mrUmak" type="submit">Choose</button>
                          </div>
                    </div>
                    <div class="col-md-4 m-auto">
                        <div class="avatar-upload mt-3">
                            <div class="avatar-preview text-center mr-0">
                                <div id="imgFemale" class="img-raised" style="background-image: url('../assets/img/user_default.png');justify-content: center">
                                </div>
                            </div>
                          </div>
                          <div class="text-center col-8 m-auto">
                              <h4 class="mt-3">Ms. Umak 2019</h4>
                              <button class="btn btn-primary btn-block" id="msUmak" type="submit">Choose</button>
                            </div>
                    </div>
                    <div class="col-10 m-auto">
                      <div class="col-lg-6 m-auto" id="castButton">
                        <!-- show cast button here -->
                      </div>
                    </div>
                </div>
            </div>
       </div>
       <!--sponsor carousel -->
       <div class="col-lg-6 col-md-6 col-sm-12 m-auto pt-2">
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



  <!-- candidates modal-->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="candidate_modal" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pt-0">
            <div class="row pr-3 pl-3" id="candidateDisplayModal">
                <!--Display Candidates here-->
            </div>
        </div>
      </div>
    </div>
  </div>
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
  <!--	Plugin for Number Formatting -->
  <script src="../assets/js/plugins/wNumb.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
  <!-- snack bar -->
  <script src="../assets/js/plugins/snackbar.min.js" type="text/javascript"></script>
 <!-- preloader-->
  <script src="../assets/js/plugins/preloader.js" type="text/javascript"></script>
  <!-- preloader-->
  <script src="../PeoplesChoice/frontend/functions.js" type="text/javascript"></script>
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

  <script>
  window.onload = loadImage(),
  checkVotes();

  if (typeof(Storage) !== "undefined") {

    checkSession();
    }
  </script>

</body>

</html>
