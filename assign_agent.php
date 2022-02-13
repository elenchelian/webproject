<?php
        $conn = mysqli_connect("localhost", "root", "", "insurance");
        $sql_member = "SELECT * from participants ORDER BY id ASC;";
        $result_member = $conn-> query($sql_member);



        ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="img/logo.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="img/logo.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="img/elen.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="update_profile.php">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="login.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Manage Admin</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="adminlist.php">Admin List</a></li>
                <li class="nav-item"> <a class="nav-link" href="addadmin.php">Add Admin</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Admin Activity Log</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Seminar</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="reg_seminar.php">Register Seminar</a></li>
                <li class="nav-item"><a class="nav-link" href="seminar_list.php">Seminar List</a></li>
                <li class="nav-item"><a class="nav-link" href="participants_list.php">Partcipants List</a></li>

              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#agent-element" aria-expanded="false" aria-controls="agent-element">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Agent</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="agent-element">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="add_agents.php">Add Agent</a></li>
                <li class="nav-item"><a class="nav-link" href="assign_agent.php">Assign Agent</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>

      <!-- Main Dashboard container -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div style="margin:auto; width:auto" class="">
          <div  class="">
            <div style="margin:auto; " class="card-body" >
              <h4 class="card-title">Assign Agent</h4>

              <div class="table-responsive">
                <!-- <form class="pt-3" method="post" action="agent.php?update=<?php echo $id;?>"> -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>OCCUPATION</th>
                      <th>PHONE NUMBER</th>
                      <th>EMAIL</th>
                      <th>SEMINAR</th>
                      <th>AGENT</th>
                      <th>AGENT LIST</th>
                      <th>Assign</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php   // LOOP TILL END OF DATA

                    while($row =mysqli_fetch_array($result_member,MYSQLI_ASSOC)){
                                             $id=$row['id'];
                                             $name=$row['name'];
                                             $occupation=$row['occupation'];
                                             $phone_number=$row['phone_number'];
                                             $email=$row['email'];
                                             $seminar=$row['seminar'];
                                             $agent=$row['agent'];

                     ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $name;?></td>
                      <td><?php echo $occupation;?></td>
                      <td><?php echo $phone_number;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $seminar;?></td>
                      <td><?php echo $agent;?></td>


                      <td>


                      <div class="input_field select_option">
                        <select name="agentname">
                          <option selected="true" disabled="disabled">Select a Agent</option>
                          <?php
                          $sql_agent = "SELECT * from agent ORDER BY id ASC;";
                          $result_agent = $conn-> query($sql_agent);
                                  while($row = mysqli_fetch_array($result_agent)){
                                    $id = $row['id'];
                                    $agent = $row['name'];
                                      ?>
                          <option value="<?php echo $agent?>"><?php echo $agent?></option>
                          <?php
                              }
                           ?>
                        </select>

                      </div>

                    </td>
                    <form action="agent.php?update=<?php echo $id;?>"method="post">
                      <td><button type="submit" class="btn btn-success" onclick="return confirm('Are you sure want to Assig Agent for <?php echo $name;?> participant?');">Assign Agent</button></td>
                    </form>
                    </tr>
                    <?php
                        }
                     ?>
                  </tbody>
                </table>
              <!-- </form> -->
              </div>
            </div>
          </div>
        </div>


          <!-- page-body-wrapper ends -->



      </div>
    </div>
    <!-- End of main container -->


    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

</body>

</html>
