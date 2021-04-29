<?php
    include('includes/header.php');
    include('includes/navbar.php');
?>
<?php include('server.php'); ?>

<div class="container d-flex p-2 m-2">
    <!-- Button trigger modal -->
    <a href="register.php"><button type="button" class="m-2 btn btn-primary">
        Add new admin
    </button></a>
    <button type="button" class="m-2 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Admin Profile
    </button>
</div>

<!-- Modal content-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="register.php">
              <?php include ('errors.php') ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" id="" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password_1" class="form-control" id="" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_2" class="form-control" id=""
                            placeholder="Confirm Password">
                    </div>
            </form>
        </div>
        <!-- Modal content -->

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="reg_user" class="btn btn-primary">Register</button>
        </div>
    </div>
</div>
</div>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>