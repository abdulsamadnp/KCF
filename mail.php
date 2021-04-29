<?php
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Mobile = $_POST['Mobile'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Mobile) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error#contactus');
       }
       else
       {
           $to = "info@kcfkannur.com";
           $body ="";

           $body .="From: ".$UserName. "\r\n";
           $body .="Email: ".$Email. "\r\n";
           $body .="Mobile: ".$Mobile. "\r\n";
           $body .="Message: ".$Msg. "\r\n";

           if(mail($to,$Subject,$body))
           {
               header("location:index.php?success#contactus");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>