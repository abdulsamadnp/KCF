<?php
    include('includes/header.php');
    include('includes/condition.php');
    include('includes/navbar.php');

?>

<h2 class="title text-center text-black">Donations</h2>
<div class="container-fluid">
    <?php
            include('includes/db.php');
                    $query = "SELECT * FROM donations";
                    $query_run = mysqli_query($db, $query);

                    if(mysqli_num_rows($query_run) > 0)
                      {
                        while($row = mysqli_fetch_array($query_run))
                        {
                          ?>



    <div class="card col-md-5 m-2 float-left">
        <div class="card-body">
            <h6>Vol-ID : <?php echo $row['id']; ?></h6>
            <h6>Name : <?php echo $row['username']; ?></h6>
            <h6>Email : <?php echo $row['email']; ?></h6>
            <h6>Mobile : <?php echo $row['mobile']; ?></h6>
            <h6>Taluk : <?php echo $row['taluk']; ?></h6>
            <h6>Place : <?php echo $row['place']; ?></h6>
            <h6>Blood group : <?php echo $row['blood_group']; ?></h6>
        </div>
    </div>
    <?php
                        }
                      }
                    else
                    {
                      echo "<h4>No records found</h4>";
                    }
                   ?>
</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>