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
</head>

<body>
<?php include 'menu.php'; ?>
<div class="py-5 text-center ">
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4" style="font-weight:1000;">Galeri</h1>
            </div>
        </div>
        <hr width="100%" style="height:7px;border:none;color:#333;background-color:#333;">
        <div class="row">
            <?php while ($galeri = mysqli_fetch_assoc($data)) { ?>
                <div class="col-md-3 col-6 p-1 galeri-cover">
                    <a target="blank" href="<?php echo $base_url ?>/assets/img/<?php echo $galeri['path']; ?>">
                        <img class="d-block img-fluid galeri-img"
                             src="<?php echo $base_url ?>/assets/img/<?php echo $galeri['path']; ?>"> </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script src="<?php echo $base_url ?>assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="<?php echo $base_url ?>assets/css/js/popper.min.js"></script>
<script src="<?php echo $base_url ?>assets/js/bootstrap.min.js"></script>
</body>

</html>