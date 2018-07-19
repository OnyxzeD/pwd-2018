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
                <a href="http://localhost/CRUD-NATIVE/index.php?r=front&op=berita&id=<?php echo $berita['id'];?>">
                    <img class="img-fluid d-block news-image" style="width: 445px; height: 335px"
                         src="<?php echo $base_url ?>assets/img/<?= $berita['thumbnail'] ?>"
                         onerror="this.src='<?php echo $base_url ?>assets/img/unknown-news.jpg'">
                </a>
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <h3><?php echo $berita['judul']; ?></h3>
                    <p class="my-3"><?php echo (strlen($berita['isi']) >= 150 ? substr($berita['isi'],0, 105) : $berita['isi'])." ...."; ?></p>
                    <a href="http://localhost/CRUD-NATIVE/index.php?r=front&op=berita&id=<?php echo $berita['id'];?>" style="text-decoration:underline;">
                    Read more &raquo;&raquo;</a>
                    <p class="my-3"><?= convertDate($berita['created_at'], 'indo') ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script src="<?php echo $base_url ?>assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="<?php echo $base_url ?>assets/css/js/popper.min.js"></script>
<script src="<?php echo $base_url ?>assets/js/bootstrap.min.js"></script>


</body>

</html>