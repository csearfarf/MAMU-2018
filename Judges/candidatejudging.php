<?php session_start();
if (isset($_SESSION['id'])  == ""){
  header('Location: ../Logout/');
}
?>
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
        <div class="col-12 text-center pt-5">
          <h4 class="description text-primary mt-0 mb-0" style="font-size:1.4rem;">Mister & Miss University of Makati</h4>
          <h3 class="description text-primary mt-0" style="font-size:1.4rem;">CANDIDATES</h3>
        </div>
       </div>
       <!--Candidates Button-->
       <div class="container-fluid pt-2 mt-1">
            <div class="row justify-content-center" id="candidatesDiv">
                <!--display candidates here -->
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto">
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CCS" style="background-image: url('../admin/backend/candidates/uploads/Hexter Vince V. Drillon.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. CGPP" style="background-image: url('../admin/backend/candidates/uploads/Trisha Mae Delos Santos.jpg');"></a>
                      </div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0 "><span class="badge badge-warning">Candidates  #1</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Hexter Vince Drillon<br>Ms. Trisha Mae  Delos Santos</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit" onclick="rate(1)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto">
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. COE" style="background-image: url('../admin/backend/candidates/uploads/Venneth Daquigan.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. HSU" style="background-image: url('../admin/backend/candidates/uploads/Desiree Paz R. Dasal.jpg');"></a>
                      </div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #2</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Venneth Daquigan<br>Ms. Desiree Paz Dasal</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(2)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto">
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CAL" style="background-image: url('../admin/backend/candidates/uploads/Are Jay Perlata.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. COAHS" style="background-image: url('../admin/backend/candidates/uploads/Maurein Tepace.jpg');"></a>
                      </div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #3</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Are Jay Perlata<br>Ms. Maurein Tepace</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(3)">Rate</button>
                </div>
            </div>

            <div class="row justify-content-center" id="candidatesDiv">
                <!--display candidates here -->
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. HSU" style="background-image: url('../admin/backend/candidates/uploads/Benedict John R. Lazo.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. CCSCE" style="background-image: url('../admin/backend/candidates/uploads/Millen S. Cueto.jpg');"></a> </div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #4</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Benedict John Lazo<br>Ms. Millen Cueto</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit" onclick="rate(4)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto">
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CAL" style="background-image: url('../admin/backend/candidates/uploads/John Lerry Ostaco.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. CCS" style="background-image: url('../admin/backend/candidates/uploads/Eunice Haide Barrios.jpg');"></a>
                      </div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #5</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr.John Lerry Ostaco<br>Ms. Eunice Haide Barrios</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(5)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CTHM" style="background-image: url('../admin/backend/candidates/uploads/Paulie Rubin D. Mize.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. CBFS" style="background-image: url('../admin/backend/candidates/uploads/Diana Rose Santos.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #6</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Paulie Rubin D. Mize<br>Ms. Diana Rose Santos</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(6)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CBFS" style="background-image: url('../admin/backend/candidates/uploads/Miguel Angelo L jarillo.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. CAL" style="background-image: url('../admin/backend/candidates/uploads/Erika Mae Salvador.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #7</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Miguel Angelo Jarillo<br>Ms. Erika Mae Salvador</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(7)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CBFS" style="background-image: url('../admin/backend/candidates/uploads/Dexter V. Nicolas.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. COE" style="background-image: url('../admin/backend/candidates/uploads/Roni Catherine Cruz.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #8</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Dexter Nicolas<br>Ms. Roni Catherine Cruz</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(8)">Rate</button>
                </div>
            </div>

            <div class="row justify-content-center" id="candidatesDiv">
                <!--display candidates here -->
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CTM" style="background-image: url('../admin/backend/candidates/uploads/Carlloyd Tejada.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. COS" style="background-image: url('../admin/backend/candidates/uploads/Carla Mae De Guzman.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #9</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Carlloyd Tejada<br>Ms. Carla Mae De Guzman</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(9)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CTHM" style="background-image: url('../admin/backend/candidates/uploads/Kurt Andrew Manabilang.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. HSU" style="background-image: url('../admin/backend/candidates/uploads/Josephine Olivien Jana.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #10</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Kurt Andrew Manabilang<br>Ms. Josephine Olivien Jana</h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(10)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CBFS" style="background-image: url('../admin/backend/candidates/uploads/Gerald B.  Capil.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. CTHM" style="background-image: url('../admin/backend/candidates/uploads/Kauru Aseana Pimintel.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #11</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Gerald Capil<br>Ms. Kauru Aseana Pimintel</h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(11)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. COAHS" style="background-image: url('../admin/backend/candidates/uploads/Prince Yulan Punay.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. COS" style="background-image: url('../admin/backend/candidates/uploads/Xerlen Cara Gacias.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #12</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Prince Yulan Punay<br>Ms. Xerlen Cara Gacias</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(12)">Rate</button>
                </div>
                <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
                  <div class="row">
                    <div class="c-profile__list col-10 m-auto pb-0">
                      <div class="m-auto"><a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CTHM" style="background-image: url('../admin/backend/candidates/uploads/Shan Matthew Parane.jpg');"></a>
                      <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. HSU" style="background-image: url('../admin/backend/candidates/uploads/Micah Beatrice Santos.jpg');"></a></div>
                    </div>
                    <div class="col-10 m-auto"> 
                    <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #13</span></h5>
                    <h5 class="text-center mt-0 pb-0" style="font-size:.7rem;">Mr. Shan Matthew Parane<br>Ms. Micah Beatrice Santos</span></h5>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit"  onclick="rate(13)">Rate</button>
                </div>
            </div>
       </div>
       <!--sponsor carousel
       <div class="col-lg-8 col-md-8 col-sm-12 m-auto pt-5">
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
       </div> -->
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
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="profile-tabs">
                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#mister" role="tab" data-toggle="tab">Mister</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#miss" role="tab" data-toggle="tab">Miss</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content tab-space pb-0 pt-0">
          <div class="tab-pane active gallery" id="mister">
            <div class="row">
              <div class="col-lg-5 col-sm-12">
                <div class="card bg-dark text-white">
                  <img class="card-img animated fadeIn" id="image1" alt="Card image">
                  <div class="card-img-overlay text-center" style="padding-top:99%;">
                    <h4 class="card-title mb-0" id="candidateName1">CANDIDATE NAME</h4>
                    <h4 class="card-title mb-0" id="candidateID1" hidden="">ID</h4>
                    <p class="card-text" id="candidateCollege1">COLLEGE</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-sm-12 pt-5 animated fadeIn" style="margin-top:0px">
                <h5 class="text-primary mb-0 mt-0">TALENT/PERFORMANCE</h5>
                <P class="description mt-0" style="font-size:.7em;">Talent score will be 50% of Candidate's score</P>
                <div class="row">
                  <div class="col-6" style="border-right: solid grey;">
                    <h3 class="text-center"><span id="lblMenTalents">0</span> %</h3>
                  </div>
                  <div class="col-6">
                    <h3 class="text-center">100 %</h3>
                  </div>
                </div>
                <div id="menTalents" class="slider"></div>
                <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>
                
                <h5 class="text-primary mb-0">POISE</h5>
                <P class="description" style="font-size:.7em;">Performance score will be 50% of Candidate's score</P>
                <div class="row">
                  <div class="col-6" style="border-right: solid grey;">
                    <h3 class="text-center"><span id="lblMenPerformance"></span> %</h3>
                  </div>
                  <div class="col-6">
                    <h3 class="text-center">100 %</h3>
                  </div>
                </div>
                <div id="menPerformance" class="slider"></div>
                <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>

              </div>
            </div>
          </div>
          <div class="tab-pane gallery" id="miss">
            <div class="row">
            <div class="col-lg-5 col-sm-12">
              <div class="card bg-dark text-white">
                <img class="card-img animated fadeIn" id="image2" alt="Card image">
                <div class="card-img-overlay text-center" style="padding-top:99%;">
                  <h4 class="card-title mb-0" id="candidateName2">CANDIDATE NAME</h4>
                    <h4 class="card-title mb-0" id="candidateID2" hidden="">ID</h4>
                  <p class="card-text" id="candidateCollege2">COLLEGE</p>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-sm-12 pt-5 animated fadeIn" style="margin-top:0px">
              <h5 class="text-primary mb-0 mt-0">TALENT/PERFORMANCE</h5>
              <P class="description mt-0" style="font-size:.7em;">Talent score will be 50% of Candidate's score</P>
              <div class="row">
                <div class="col-6" style="border-right: solid grey;">
                  <h3 class="text-center"><span id="lblLadiesTalents">0</span> %</h3>
                </div>
                <div class="col-6">
                  <h3 class="text-center">100 %</h3>
                </div>
              </div>
              <div id="ladiesTalents" class="slider"></div>
              <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>
              
              <h5 class="text-primary mb-0">POISE</h5>
              <P class="description" style="font-size:.7em;">Performance score will be 50% of Candidate's score</P>
              <div class="row">
                <div class="col-6" style="border-right: solid grey;">
                  <h3 class="text-center"><span id="lblLadiesPerformance">0</span> %</h3>
                </div>
                <div class="col-6">
                  <h3 class="text-center">100 %</h3>
                </div>
              </div>
              <div id="ladiesPerformance" class="slider"></div>
              <p class="description text-center" style="font-size:.7em;">Tips: Drag slider to the desired number of score (min is 0% and max is 100%)</p>

            </div>
            </div>
          </div>
        </div>
          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="values();">Save changes</button>
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
  <!-- judge functions scripts -->
  <script src="frontend/judgeFunctions.js" type="text/javascript"></script>
  <!-- preloader-->
  <script src="../assets/js/plugins/preloader.js" type="text/javascript"></script>
  <!-- sponsors carousel script -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 7,
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
  //talents
  var menTalents= document.getElementById('menTalents');

    noUiSlider.create(menTalents, {
      connect: [true,false],  
      start: [0],
        range: {
          'min': 0,
          'max': 100
        },
        start: 0,
        step: 1,
        format: wNumb({
            decimals: 0,
            thousand: ','
        })
    });
    var lblMenTalents = document.getElementById('lblMenTalents');

    // Show the value for the *last* moved handle.
    menTalents.noUiSlider.on('update', function (values, handle) {
      lblMenTalents.innerHTML = values[handle];
    });


    //Performance
    var menPerformance = document.getElementById('menPerformance');

  noUiSlider.create(menPerformance, {
    connect: [true,false],  
    start: [0],
      range: {
        'min': 0,
        'max': 100
      },
      start: 0,
      step: 1,
      format: wNumb({
          decimals: 0,
          thousand: ','
      })
  });
  var lblMenPerformance = document.getElementById('lblMenPerformance');

  // Show the value for the *last* moved handle.
  menPerformance.noUiSlider.on('update', function (values, handle) {
    lblMenPerformance.innerHTML = values[handle];
  });


  </script>
  
  <script>
  //female Candidate slider script
  

    noUiSlider.create(ladiesTalents, {
      connect: [true,false],  
      start: [0],
        range: {
          'min': 0,
          'max': 100
        },
        start: 0,
        step: 1,
        format: wNumb({
            decimals: 0,
            thousand: ','
        })
    });
    var lblLadiesTalents = document.getElementById('lblLadiesTalents');

    // Show the value for the *last* moved handle.
    ladiesTalents.noUiSlider.on('update', function (values, handle) {
      lblLadiesTalents.innerHTML = values[handle];
    });


    //Performance
    var ladiesPerformance = document.getElementById('ladiesPerformance');

  noUiSlider.create(ladiesPerformance, {
    connect: [true,false],  
    start: [0],
      range: {
        'min': 0,
        'max': 100
      },
      start: 0,
      step: 1,
      format: wNumb({
          decimals: 0,
          thousand: ','
      })
  });
  var lblLadiesPerformance = document.getElementById('lblLadiesPerformance');

  // Show the value for the *last* moved handle.
  ladiesPerformance.noUiSlider.on('update', function (values, handle) {
    lblLadiesPerformance.innerHTML = values[handle];
  });


  </script>
  <script>
  //example
  function values(){


      // slider menu

      var maleTalents = document.getElementById('menTalents');
      var malePerformance = document.getElementById('menPerformance');

      var femaleTalents = document.getElementById('ladiesTalents');
      var femalePerformance = document.getElementById('ladiesPerformance');



  var namemale= $('#candidateName1').text();//
  var idmale=$('#candidateID1').text();
  var talentmale = document.getElementById('lblMenTalents').innerText//
  var performancemale = document.getElementById('lblMenPerformance').innerText//



  var namefemale= $('#candidateName2').text();
  var idfemale=$('#candidateID2').text();
  var talentFemale = document.getElementById('lblLadiesTalents').innerText//
  var performanceFemale = document.getElementById('lblLadiesPerformance').innerText//
  

  var aveMaletalent=talentmale;
  var aveMalePerformance=performancemale;


  var aveFemaletalent=talentFemale;
  var aveFemalePerformance=performanceFemale;

  var computeTotalScoreMale=(aveMaletalent*.5) +(aveMalePerformance*.5);//
  var computeTotalScoreFemale=(aveFemaletalent*.5) +(aveFemalePerformance*.5);//
 

Snackbar.show({
   pos: 'top-center',
   actionText: 'Cast',
   actionTextColor: 'text-success',
   text: 'Casting your vote cannot be reverted once executed, Do you want to continue ? ',
   
   onActionClick: function(element) {
       //Set opacity of element to 0 to close Snackbar 
       $(element).css('opacity', 0);
              // reset values of slider


       $.ajax({
              url: "backend/castVote.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {idmale:idmale,aveMaletalent:aveMaletalent,aveMalePerformance:aveMalePerformance,aveFemaletalent:aveFemaletalent,aveFemalePerformance:aveFemalePerformance,computeTotalScoreMale:computeTotalScoreMale,idfemale:idfemale,computeTotalScoreFemale:computeTotalScoreFemale}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'json',
              success: function(data)   // A function to be called if request succeeds
              {


          if(data==1){
                
              maleTalents.noUiSlider.reset();
              malePerformance.noUiSlider.reset();
              femaleTalents.noUiSlider.reset();
              femalePerformance.noUiSlider.reset();


              Snackbar.show({text: 'Successfully Voted',pos: 'top-center'});
             
              document.getElementById('lblMenTalents').innerText=0;
              document.getElementById('lblMenPerformance').innerText=0;
  
              document.getElementById('lblLadiesTalents').innerText=0;
              document.getElementById('lblLadiesPerformance').innerText=0;
             

                $('#candidate_modal').modal('hide'); // hide
              
          }else if(data==0){
            alert("error in insertion");
          }
         

              }

          });
    
    

   }
});


  

  }

  </script>



  <script type="text/javascript">
function rate(num){
      var id=num;
 if (num!="" || num!=null) {
       $.ajax({
              url: "backend/loadCandidates.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'json',
              success: function(data)   // A function to be called if request succeeds
              {

               if (data==1){

                Snackbar.show({text: 'You already Casted scores from these Candidates',
                               pos: 'top-center'});
              
              

               }else{
                $('#candidateName1').text(data[0]['name']); // candidate id first candidate
                $('#candidateCollege1').text(data[0]['abbr']);
                $('#candidateID1').text(data[0]['candidate_id']);
                document.getElementById("image1").src=data[0]['image'];

                $('#candidateName2').text(data[1]['name']); // candidate id first candidate
                $('#candidateCollege2').text(data[1]['abbr']);
                $('#candidateID2').text(data[1]['candidate_id']);

                document.getElementById("image2").src=data[1]['image'];

                
                  $('#candidate_modal').modal('show'); // tricky moves

               } 
                  

              }

          });
    }
  }


</script>


</body>

</html>
