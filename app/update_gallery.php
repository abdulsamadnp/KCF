<?php
    include('includes/header.php');
    include('includes/condition.php');
    include('includes/navbar.php');
?>
<?php
    include('includes/db.php');
    $id = $_GET['id'];
    $query = "SELECT gallery.id, gallery.title, gallery.description, gallery.image_name FROM gallery WHERE gallery.id ={$id}";
    $query_run = mysqli_query($db, $query);

    if(mysqli_num_rows($query_run) > 0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {


?>

<h2 class="title text-center text-black">Gallery</h2>
  <div class="container-fluid">

    <section class="card p-5">
        <form method="post" action="save_update_gallery.php" enctype="multipart/form-data">
             <div class="form-group">
              <input type="hidden" name="id"  class="form-control" value="<?php echo $row['id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" name="title" placeholder="Image Title" value="<?php echo $row['title']; ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" name="description" placeholder="Image Description" value="<?php echo $row['description']; ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label for="name">Choose Image:</label>
                <input type="file" name="new-image" value="<?php echo $row['image_name']; ?>">
                <input type="hidden" name="old_image" placeholder="Choose file" value="<?php echo $row['image_name']; ?>" class="form-control" />
                <img src="uploads/<?php echo $row['image_name']; ?>" alt="Card Image" class="card-img" style="width:150px; height:auto;">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update" class="btn btn-primary form-control">
            </div>
            </fieldset>
        </form>
    </section>
  </div>

<?php
    }
  }
else
{
  echo "<h4>No records found</h4>";
}
?>


<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>