        <!-----------------------bootstrap cdn-------------------->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <!-----------------------bootstrap cdn-------------------->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script>
        <!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="js/my.js"></script>

        <?php
if (isset($_SESSION['thats_ok']) && $_SESSION['thats_ok'] !='')
{
?>

<script>
        swal({
            title: "<?php echo $_SESSION['thats_ok']; ?>",
            //text: "You clicked the button!",
            icon: "<?php echo $_SESSION['thats_okk']; ?>",
            button: "OK!",
        });
</script>

<?php
  unset($_SESSION['thats_ok']);
}

?>
        <script>
        baguetteBox.run('.cards-gallery', {
            animation: 'slideIn'
        });
        </script>