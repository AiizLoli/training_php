<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap 4 Template</title>
  <!-- Bootstrap core CSS-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">-->

  <!-- Custom fonts for this template-->
  <!--<link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">-->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!--<link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">-->

  <!-- Custom styles for this template-->
  <!--<link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">



        <!-- #################### Sidebars/Menu Start #################### -->
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{ URL::to('admin/user') }}">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="charts.html">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">Charts</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">Components</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="navbar.html">Navbar</a>
              </li>
              <li>
                <a href="cards.html">Cards</a>
              </li>
            </ul>
          </li>
        </ul>


        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <!-- #################### Sidebars/Menu End #################### -->



        <!-- #################### headers/top Start #################### -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">View all messages</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">View all alerts</a>
            </div>
          </li>
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>Logout</a>
          </li>
        </ul>
        <!-- #################### headers/top End #################### -->


    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">


      <!-- #################### Main Start #################### -->
       <!-- breadcrumb Start -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Users</a>
        </li>
        <li class="breadcrumb-item active">Lists</li>
      </ol>
      <!-- breadcrumb End -->


      <!-- #################### Flash Message Start #################### -->
      <!-- Waiting for flash message -->
      <!-- #################### Flash Message Start #################### -->



      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users Lists </div>

        <div class="card-body">
          <div class="table-responsive">
              <!--  id="dataTable" -->
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Active</th>
                  <th>Action</th>
                </tr>
              </thead>
              <!--<tfoot>
                <tr>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </tfoot>-->
              <tfoot align="right">
              <tr>
                  <th colspan="6" style="justify-content: right;">Pagination Link</th>
              </tr>
              </tfoot>

              <tbody>
                    <tr>
                      <td>User1</td>
                      <td>Mobile</td>
                      <td>user1@gmail.com</td>
                      <td>Bangkok</td>
                      <td>
                          <span class="badge badge-success">Active</span>
                          <span class="badge badge-danger">Inactive</span>
                      </td>
                      <td>
                          <a href="#">
                              <button type="button" class="btn btn-primary btn-sm">Info</button>
                          </a>
                          <a href="#">
                              <button type="button" class="btn btn-success btn-sm">Edit</button>
                          </a>
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_user_4">Delete</button>
                          <!-- Include Delete Modal Confirmation -->

                          <!-- #################### Modal Delete Row by Row in Table Start #################### -->
                          <!-- Waiting for flash message -->
                          <!-- #################### Modal Delete Row by Row in Table Start #################### -->


                      </td>
                    </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!-- #################### Main Start #################### -->


    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->



    <!-- #################### headers/top Start #################### -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- #################### headers/top Start #################### -->



    <!-- Logout Modal-->

    <!-- #################### generals/modal Start #################### -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ URL::to('logout') }}" >Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- #################### generals/modal Start #################### -->


    <!-- Bootstrap core JavaScript-->
    <!--<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!--<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <!--<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <!--<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>-->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>

    <!--<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script>-->
    <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <!--<script src="{{ asset('js/sb-admin.min.js') }}"></script>-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Custom scripts for this page-->
    <!--<script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>