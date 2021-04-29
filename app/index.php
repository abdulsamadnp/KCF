<?php
    include('includes/header.php');
    include('includes/condition.php');
    include('includes/navbar.php');
?>




<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

   <?php
        include('includes/db.php');
        $result = $db->query("SELECT COUNT(*) FROM `users`");
        $row = $result->fetch_row();

    ?>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <a href="volunteer.php"><div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Volunteers</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $row[0];?>
</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hands-helping fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>


   <?php
        $result = $db->query("SELECT COUNT(*) FROM `blood`");
        $row = $result->fetch_row();

    ?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <a href="blood.php"><div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Blood Donors</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $row[0];?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-nurse fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>
    <?php
        $result = $db->query("SELECT COUNT(*) FROM `gallery`");
        $row = $result->fetch_row();

    ?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <a href="gallery.php"><div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Gallery</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h4 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $row[0];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-images fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>

    <?php
        $result = $db->query("SELECT COUNT(*) FROM `donations`");
        $row = $result->fetch_row();

    ?>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
           <a href="donations.php"> <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Donations</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $row[0];?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-donate fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div></a>
        </div>
    </div>
</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>