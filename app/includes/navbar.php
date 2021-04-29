<!-- Sidebar -->

<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-logo"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KCF Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-1">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item p-1">
        <a class="nav-link collapsed" href="gallery.php">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item p-1">
        <a class="nav-link collapsed" href="donation.php">
            <i class="fas fa-fw fa-donate"></i>
            <span>Donations</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item p-1">
        <a class="nav-link collapsed" href="volunteer.php" aria-controls="collapsePages">
            <i class="fas fa-fw fa-hands-helping"></i>
            <span>Volunteers</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item p-1">
        <a class="nav-link" href="blood.php">
            <i class="fas fa-fw fa-user-nurse"></i>
            <span>Blood Donors</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <div class="col-md-4 col-lg-2 navbar-brand">
                <h4 class="bbb"><strong>Kannur Cultural Foundation</strong></h4>
            </div>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- notification message -->


                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                            <h6 class="d-flex"><strong><?php echo $_SESSION['username']; ?></strong></h6>
                        </span>
                        <img class="img-profile rounded-circle" src="img/LOGO.png">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="register.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Add new admin
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="index.php?logout='1'" style="color: red;" class="dropdown-item">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>