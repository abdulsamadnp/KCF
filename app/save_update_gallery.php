<?php
    include_once('includes/db.php');
    unlink("uploads/".$row['image_name']);


if(empty($_FILES['old-image']['name'])){
  $new_image = $_POST['old_image'];

}else{
  $errors = array();
  
  if(empty($_FILES['new-image']['name'])){
  $new_image = $_POST['old_image'];

}else{
  $errors = array();

  $file_name = $_FILES['new-image']['name'];
  $file_size = $_FILES['new-image']['size'];
  $file_tmp = $_FILES['new-image']['tmp_name'];
  $file_type = $_FILES['new-image']['type'];
  $file_ext = end(explode('.',$file_name));

  $extensions = array("jpeg","jpg","png");

  if(in_array($file_ext,$extensions) === false)
  {
    $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
  }

  if($file_size > 3097152){
    $errors[] = "File size must be 3mb or lower.";
  }

  if($file_size > 3097152){
    $errors[] = "File size must be 3mb or lower.";
  }
  $new_name = time(). "-".basename($file_name);
  $target = "uploads/".$new_name;
  $image_name = $new_name;
  if(empty($errors) == true){
    move_uploaded_file($file_tmp,$target);
  }else{
    print_r($errors);
    die();
  }
}


$sql = "UPDATE gallery SET title='{$_POST["title"]}', description='{$_POST["description"]}', image_name='{$image_name}'
        WHERE id={$_POST["id"]}";
    $result = mysqli_multi_query($db,$sql);


if($result){
  header("location: gallery.php");
}else{
  echo "Query Failed";
}




?>
