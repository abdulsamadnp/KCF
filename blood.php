<?php include 'server.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Blood</title>

    <!-- Main Stylesheet File -->

<link href="css/join.css" rel="stylesheet">
<link href="css/navbar.css" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <!-- fontawsome Stylesheet File -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="Stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"/>
<!-- Favicon -->
  <link rel="shortcut icon" href="image/favicon.png">

</head>

<body>
<div class="flex">
 <div class="container-fluid">

 <!-----------------------Start Header-------------------->

    <header class="header">

        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.php#home" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="index.php#about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="index.php#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="index.php#gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="index.php#ourteam" class="nav-link">Our team</a></li>
                        <li class="nav-item"><a href="index.php#contactus" class="nav-link">Contact Us</a></li>
                    </ul>

                </div>
            </div>
        </nav>
     </header>

        <div class="col-md-12">
            <div class="col-md-5 col-sm-10 mt-5 cntct ml-auto mr-auto">

            <h3>Contribute Blood Donation</h3>
            <p>Donate Blood & save Life </p>

                <form  class="form-group"action="blood.php" method="post">

                <?php include ('errors.php') ?>
                    <input type="text" name="username" placeholder="Full Name" required class="inp">
                    <input type="number" name="mobile" placeholder="Mobile" required class="inp">
                    <select class="taluk" name="taluk" placeholder="Taluk" required class="inp">
                        <option value="">Choose your area</option>
                        <option value="THALIPARAMBA">THALIPARAMBA</option>
                        <option value="KANNUR">KANNUR</option>
                        <option value="THALASSERY">THALASSERY</option>
                        <option value="IRITTY">IRITTY</option>
                        <option value="PAYYANNUR">PAYYANNUR</option>
                    </select>
                    <input type="text" name="place" placeholder="Place" required class="inp">
                    <select class="taluk" name="blood_group" required class="inp">
                        <option value="">Choose your blood group</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                    </select>
                    <p>നിങ്ങൾ ഇതിന് മുമ്പ് രക്തധാനം ചെയ്തിട്ടുണ്ടോ? </p>
                        <label for="male">Yes</label>
                        <input type="radio" name="status" value="Yes" required>
                        <label for="male">No</label>
                        <input type="radio" name="status" value="No" required>

                    <button type="submit" name="blood_donor" class="cntct-send d-block">Submit</button>
                </form>
            </div>
        </div>

    </div>
   </div>


<!-----------------------scrits-------------------->
<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script>
<!-----------------------bootstrap cdn-------------------->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
 integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
 crossorigin="anonymous"></script>
<!-----------------------bootstrap cdn-------------------->

  <script src="js/my.js"></script>

</body>
</html>