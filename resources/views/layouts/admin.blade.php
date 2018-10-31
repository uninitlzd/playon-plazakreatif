<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plaza Kreatif - @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="/admin/images/logo.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="/admin/images/logo-mini.svg" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="mdi mdi-image-album"></i>Showcase
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Hello, Richard V.Welsh !</span>
                        <img class="img-xs rounded-circle" src="/admin/images/faces/face1.jpg" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item mt-2">
                            Manage Accounts
                        </a>
                        <a class="dropdown-item">
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="/admin/images/faces/face1.jpg" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Richard V.Welsh</p>
                                <div>
                                    <small class="designation text-muted">Manager</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/icons/font-awesome.html">
                        <i class="menu-icon mdi mdi-sticker"></i>
                        <span class="menu-title">Event Details</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <i class="menu-icon mdi mdi-backup-restore"></i>
                        <span class="menu-title">Acara</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Timeline</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Sponsors</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-7 grid-margin stretch-card">
                        <!--weather card-->
                        <div class="card card-countdown">
                            <div class="card-body">
                                <h2 class="card-title text-primary mb-5">Countdown</h2>
                                <div class="card-countdown__number"></div>
                            </div>
                        </div>
                        <!--weather card ends-->
                    </div>
                    <div class="col-lg-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-primary mb-5">Event Details</h2>
                                <div class="wrapper d-flex justify-content-between">
                                    <div class="side-left">
                                        <p class="mb-2">Event Name</p>
                                        <p class="display-3 mb-4 font-weight-light">Playon</p>
                                    </div>
                                    <div class="side-right">
                                        <small class="text-muted">ke-13</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row">
                   <div class="col-lg-12 grid-margin stretch-card">
                       <div class="card">
                           <div class="card-body">
                               <h2 class="card-title text-primary mb-5">Location</h2>

                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 &mdash; DKV UPN x
              <a href="http://www.parafrasa.com/" target="_blank">Parafrasa</a>.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="/admin/js/vendor.bundle.base.js"></script>
<script src="/admin/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/admin/js/off-canvas.js"></script>
<script src="/admin/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/admin/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>
