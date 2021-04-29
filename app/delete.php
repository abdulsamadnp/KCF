<?php
    include_once('includes/db.php');

  $post_id = $_GET['id'];

  $sql1 = "SELECT * FROM gallery WHERE id = {$post_id}";
  $result = mysqli_query($db, $sql1) or die("Query Failed : Select");
  $row = mysqli_fetch_assoc($result);

  unlink("uploads/".$row['image_name']);

  $sql = "DELETE FROM gallery WHERE id = {$post_id};";

  if(mysqli_multi_query($db, $sql)){
    header("location: gallery.php");
  }else{
    echo "Query Failed";
  }
?>