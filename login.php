<?php include ('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to KANNUR CULTURAL FOUNDATION</title>

    <!-- Main Stylesheet File -->
<link href="css/join.css" rel="stylesheet">
<link href="css/navbar.css" rel="stylesheet">
 <!-- Bootstrap CSS File -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

         <!-- fontawsome Stylesheet File -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="Stylesheet">   
         <!-- -------------------------------google fonts ------------------------------->
         <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600&display=swap" rel="stylesheet">
 <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Anton">
     <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Yanone Kaffeesatz">

         <!-- -------------------------------google fonts ------------------------------->
<!-- Favicon -->
<link rel="shortcut icon" href="image/favicon.png">

</head>

<body>
<div class="flex">
 <div class="container-fluid">
 <!-----------------------Start Header-------------------->
    <header class="header bg-dark">
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.html#home" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a href="index.html#about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="index.html#services" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="index.html#gallery" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="index.html#ourteam" class="nav-link">Our team</a></li>
                        <li class="nav-item"><a href="index.html#contactus" class="nav-link">Contact Us</a></li>
                    </ul>

                </div>
            </div>
        </nav>
     </header>
        <div class="col-md-12 pt-5">
            <div class="col-md-5 col-sm-12 mt-5 cntct ml-auto mr-auto">

             <h3> Log In</h3>
                <form action="login.php" method="post">
                    <?php include ('errors.php') ?>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>

                        <button type="submit" name="login_usr" class="cntct-send d-block">Login</button>
                        <p>You don't have an account..?<br><a href="join.php">Join Now</a></p>
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
<script type="text/javascript" src="js/home.js"></script>
<script type="text/javascript" src="home.js"></script>

</body>
</html>