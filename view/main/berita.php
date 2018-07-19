<?php
$base_url = 'http://localhost/CRUD-NATIVE/';
$base_url_index = 'http://localhost/CRUD-NATIVE/index.php?';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/css/theme.css" type="text/css">

<body>
<?php include 'menu.php'; ?>
<div class="py-5">
    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-1">Daftar Berita</h1>
            </div>
        </div>
    </div>
</div>
<?php
while ($berita = mysqli_fetch_assoc($data)) { ?>
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 order-2 order-md-1">
                    <img class="img-fluid d-block" style="width: 445px; height: 335px"
                         src="<?php echo $base_url ?>assets/img/<?= $berita['thumbnail'] ?>"
                         onerror="this.src='<?php echo $base_url ?>assets/img/unknown-news.jpg'">
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <h3><?php echo $berita['judul']; ?></h3>
                    <p class="my-3"><?php echo $berita['isi']; ?></p>
                    <p class="my-3"><?= convertDate($berita['created_at'], 'indo') ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script src="<?php echo $base_url ?>assets/js/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="<?php echo $base_url ?>assets/css/js/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="<?php echo $base_url ?>assets/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


</body>

</html>