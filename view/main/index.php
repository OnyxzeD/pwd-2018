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
<div class="py-6">
    <div class="container" style="margin-top: 15px">
        <div class="row">
            <div class="col-xl-12">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block img-fluid-slide w-100"
                                 src="<?php echo $base_url ?>view/main/img/sd1.jpg">
                            <div class="carousel-caption">
                                <h3>SDN 2 KALIREJO KALIPARE</h3>
                                <p>Kegiatan upacara setiap hari senin</p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block img-fluid-slide w-100"
                                 src="<?php echo $base_url ?>view/main/img/sd2.jpg">
                            <div class="carousel-caption">
                                <h3>Kelulusan siswa</h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $base_url ?>assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="<?php echo $base_url ?>assets/css/js/popper.min.js"></script>
<script src="<?php echo $base_url ?>assets/js/bootstrap.min.js"></script>
</body>

</html>