<!DOCTYPE html>
<html>
<?php 
  session_start();
  include("header.php"); 

  if(isset($_SESSION['id']) == ''){

    header("Location: ../Logout/index.php");
  }
  ?>
<body>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="pt-0" href="./index.html">
        <img src="./assets/img/theme/nav_icon.png" style="height:70px;" class="" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="../Logout/index.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <!--<img src="./assets/img/brand/blue.png">-->
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
       <!-- Navigation -->
        <?php include("navigation.php"); ?>

      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">List of Students</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../assets/img/user_default.png">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                </div>
              </div>
            </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-default  pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Students</h3>
            </div>
            <div class="card-body">
              <p class=" text-right">
              <button class="btn btn-default btn-md" data-toggle="modal" data-target="#createStudent">Add</button></p>
              <table class="table text-center table-hover display responsive nowrap" id="student">
             <thead>
             <tr>
              <th>Student Number</th>
              <th>Name</th>
              <th>College</th>
              <th>Registered</th>
              <th>Options</th>
             </tr>
             </thead>
             <tbody>
             </tbody>
             </table>

            </div>

          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.facebook.com/RBREEZY" class="font-weight-bold ml-1" target="_blank">Payamann</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://facebook.com/DVYRA" class="nav-link" target="_blank">DVYRA</a>
              </li>
              <li class="nav-item">
                <a href="https://facebook.com/csearfarf" class="nav-link" target="_blank">CSE</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">JESSIEPUGAK</a>
              </li>

            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>


  <div class="modal fade" id="createStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >

          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content ">
                  <div class="modal-body p-0 ">
                    <div class="card bg-secondary shadow border-0 bg-white">
                        <div class="card-body px-lg-5 py-lg-5">

                            <!--FORMMMMMMMMMMMMMMMMMMM--->
                            <form role="form" method="POST" style="padding: 30px;" id="formCreate">
                                <div class="text-center mb-3">
                                <small style="font-size: 19px;">Student Details</small>
                            </div>
                                <div class="form-group mb-3" >
                                    <h4 class="text-muted">Student Number</h4>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-user-83"></i></span>
                                        </div>
                                        <input class="form-control text-center" placeholder="Ex. K1141279" type="text" id="studentNumber" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                   <h4 class="text-muted">Name</h4>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-user-83"></i></span>
                                        </div>
                                        <input class="form-control text-center" placeholder="Ex. Juan Dela Cruz" type="text" id="name" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                  <h4 class="text-muted">College</h4>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-user-83"></i></span>
                                        </div>

                                      <select name="collegeType" id="collegeType" class="form-control text-center" style="margin-right: 20px;">
                                       <?php include('./backend/candidates/loadCollegeList.php'); ?>
                                      </select>
                                </div>


                                <div class="text-center" style="padding-top:30px;">
                                    <button type="button" class="btn btn-default" name="submit" onclick="createsave()">Create Student</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
  </div>



  <div class="modal fade" id="editStudents" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >

          <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
              <div class="modal-content ">
                  <div class="modal-body p-0 ">
                    <div class="card bg-secondary shadow border-0 bg-white">
                        <div class="card-body px-lg-5 py-lg-5">

                            <!--FORMMMMMMMMMMMMMMMMMMM--->
                            <form role="form" method="POST" style="padding: 30px;" id="formEdit">
                                <div class="text-center mb-3">
                                <small style="font-size: 19px;">Student Details</small>

                                 <input class="form-control text-center"type="hidden" id="eid" autocomplete="off" required="">
                            </div>
                                <div class="form-group mb-3" >
                                    <h4 class="text-muted">Student Number</h4>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-user-83"></i></span>
                                        </div>
                                        <input class="form-control text-center" placeholder="Ex. K1141279" type="text" id="estudentNumber" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                   <h4 class="text-muted">Name</h4>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-user-83"></i></span>
                                        </div>
                                        <input class="form-control text-center" placeholder="Ex. Juan Dela Cruz" type="text" id="ename" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                  <h4 class="text-muted">College</h4>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-user-83"></i></span>
                                        </div>

                                      <select name="collegeType" id="ecollegeType" class="form-control text-center" style="margin-right: 20px;">
                                       <?php include('./backend/candidates/loadCollegeList.php'); ?>
                                      </select>
                                </div>


                                <div class="text-center" style="padding-top:30px;">
                                    <button type="button" class="btn btn-default" name="submit" onclick="editSave()">Save Changes </button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
  </div>
  <?php include("script.php"); ?>

<script type="text/javascript" src="./backend/scripts/studentJS.js"></script>

</body>

</html>
