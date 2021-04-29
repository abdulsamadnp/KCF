<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'admin_panel',)

if(isset($_POST['registerbtn']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $c_password=$_POST['confirm_password'];

    if($password === $c_password)
    {
        $query ="INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
        $query_run = mysqli_query($db, $query);

        if($query_run)
        {
            $_SESSION['success'] = "Admin profile added successfully";
            header("Location: register.php");
        }
        else
        {
            $_SESSION['status'] = "Admin profile not added ";
            header("Location: register.php");
        }
    }
    else
    {
        $_SESSION['status'] = "Password do not match";
        header("Location: register.php");
    }
    
}
?>