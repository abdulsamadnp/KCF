<?php

session_start();
//initializing variables
$username = "";
$email = "";
$errors = array();
$_SESSION['its_ok'] = "";
$_SESSION['its_okk'] = "";


//connect to db
    include_once('app/includes/db.php');

//REGISTER user
if (isset($_POST['join_usr'])) {
    $username = mysqli_real_escape_string($db, $_POST{'username'});
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $taluk = mysqli_real_escape_string($db, $_POST['taluk']);
    $place = mysqli_real_escape_string($db, $_POST['place']);
    $blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);

    //Form validation

    if(empty($username)){array_push($errors, "Name is required");}
    if(empty($email)) {array_push($errors, "Email is required");}
    if(empty($mobile)) {array_push($errors, "Mobile number is required");}
    if(empty($taluk)) {array_push($errors, "Area is required");}
    if(empty($place)) {array_push($errors, "Place is required");}
    if(empty($blood_group)) {array_push($errors, "Blood group is required");}

    // check db for existing user with same email

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email= '$email' LIMIT 1";
    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if($user){
        if($user['username'] === $username){array_push($errors, "Name is already exist");}
        if($user['email'] === $email){array_push($errors, "Email is already exist");}
    }

    // register a user if no error

    if(count($errors) == 0) {
        $query = "INSERT INTO users (username, email, mobile, taluk, place, blood_group)
        VALUES('$username', '$email', '$mobile', '$taluk', '$place', '$blood_group')";
        mysqli_query($db,$query);
        $_SESSION['email'] = $email;
        $_SESSION['its_ok'] = "You are registered successfully";
        $_SESSION['its_okk'] = "success";
        header('location: index.php');


    }
}


// Blood_donation user
if (isset($_POST['blood_donor'])) {
    $username = mysqli_real_escape_string($db, $_POST{'username'});
    $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
    $taluk = mysqli_real_escape_string($db, $_POST['taluk']);
    $place = mysqli_real_escape_string($db, $_POST['place']);
    $blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);
    $status = mysqli_real_escape_string($db, $_POST['status']);


    //Form validation

    if(empty($username)){array_push($errors, "Name is required");}
    if(empty($mobile)) {array_push($errors, "Mobile number is required");}
    if(empty($taluk)) {array_push($errors, "Area is required");}
    if(empty($place)) {array_push($errors, "Place is required");}
    if(empty($blood_group)) {array_push($errors, "Blood group is required");}
    if(empty($status)) {array_push($errors, "Yes  or No is required");}


    // check db for existing user with same email

    $user_check_query = "SELECT * FROM blood WHERE username='$username' OR email= '$email' LIMIT 1";
    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if($user){
        if($user['username'] === $username){array_push($errors, "Name is already exist");}
        if($user['email'] === $email){array_push($errors, "Email is already exist");}
    }

    // register a user if no error

    if(count($errors) == 0) {
        $query = "INSERT INTO blood (username, mobile, taluk, place, blood_group, status)
        VALUES('$username',  '$mobile', '$taluk',  '$place', '$blood_group', '$status')";
        mysqli_query($db,$query);
        $_SESSION['username'] = $username;
        $_SESSION['its_ok'] = "You are now a Blood Donor";
        $_SESSION['its_okk'] = "success";
        header('location: index.php');
    }
}





