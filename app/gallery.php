<?php
    include('includes/header.php');
    include('includes/condition.php');
    include('includes/navbar.php');


?>

<h2 class="title text-center text-black">Gallery</h2>
  <div class="container-fluid">

    <section class="card p-5">
        <form method="post" action="gallery.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" name="title" placeholder="Image Title" class="form-control" />
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" name="description" placeholder="Image Description" class="form-control" />
            </div>
            <div class="form-group">
                <label for="name">Choose Image:</label>
                <input type="file" name="image" placeholder="Choose file" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" name="upload_image" value="Upload" class="btn btn-primary form-control">
            </div>
            </fieldset>
        </form>
    </section>

    <section id="gallery" class="gallery-block cards-gallery">
      <div class="container">
        <div class="row">


            <?php
            include('includes/db.php');
            $query = "SELECT * FROM gallery";
            $query_run = mysqli_query($db, $query);

            if(mysqli_num_rows($query_run) > 0)
              {
                while($row = mysqli_fetch_array($query_run))
                {
            ?>

                <div class="col-md-4 col-lg-4 bg-light">
                    <div class="card border-0 transform-on-hover">
                        <a class="lightbox" href="uploads/<?php echo $row['image_name']; ?>">
                        <img src="uploads/<?php echo $row['image_name']; ?>" alt="Card Image" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h5><strong><?php echo $row['title']; ?></strong></h5>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                        <div class="container d-flex justify-content-center pb-3">
                        <a href="update_gallery.php?id=<?php echo $row['id']; ?>" class="btn btn-info m-2">Update</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger m-2">Delete</a>
                        </div>
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
      </div>
    </section>
  </div>



<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>