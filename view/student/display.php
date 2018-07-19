<?php
$base_url = 'http://localhost/CRUD-NATIVE/';
$base_url_index = 'http://localhost/CRUD-NATIVE/index.php?';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet"
          href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet"
          href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
          href="<?php echo $base_url ?>assets/AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <?php
        include 'D:/xampp/htdocs/CRUD-NATIVE/view/template/header.php';
        ?>
    </header>

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>Import Data Siswa</small>
            </h1>
        </section>

        <!-- Main content-->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?= $ttl ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?php if (isset($errMsg)) { ?>
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-warning"></i> Info!</h4>
                                    <?= $errMsg ?>
                                </div>
                            <?php } ?>
                            <form role="form" action="<?= $formAction ?>" name="registration"
                                  method="post">
                                <input type="hidden" name="id" value="<?= (isset($data['nis']) ? $data['nis'] : "") ?>">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" placeholder="NIS" name="nis"
                                                   value="<?= (isset($data['nis']) ? $data['nis'] : "") ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                                                   value="<?= (isset($data['nama']) ? $data['nama'] : "") ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row" id="inputStatus">
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <input type="radio" name="jk"
                                                             value="1" <?= (isset($data['jk']) && ($data['jk'] == 1) ? "checked" : "") ?> >
                                                    </span>
                                                        <input type="text" class="form-control" value="Laki - laki" readonly>
                                                    </div>
                                                    <!-- /input-group -->
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <input type="radio" name="jk"
                                                             value="0" <?= (isset($data['jk']) && ($data['jk'] == 0) ? "checked" : "") ?>>
                                                    </span>
                                                        <input type="text" class="form-control" value="Perempuan" readonly>
                                                    </div>
                                                    <!-- /input-group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group date">
                                                <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir"
                                                       placeholder="Tanggal Lahir"
                                                       value="<?= (isset($data['tgl_lahir']) ? $data['tgl_lahir'] : "") ?>">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                                                   value="<?= (isset($data['alamat']) ? $data['alamat'] : "") ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="nama_ortu" placeholder="Nama Orang Tua"
                                                   value="<?= (isset($data['nama_ortu']) ? $data['nama_ortu'] : "") ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="telp_ortu" placeholder="Telpon Orang Tua"
                                                   value="<?= (isset($data['telp_ortu']) ? $data['telp_ortu'] : "") ?>">
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" name="status">
                                                <option value="1" <?= (isset($data['status']) && ($data['status'] == 1) ? "selected" : "") ?> >
                                                    Kelas 1
                                                </option>
                                                <option value="2" <?= (isset($data['status']) && ($data['status'] == 2) ? "selected" : "") ?> >
                                                    Kelas 2
                                                </option>
                                                <option value="3" <?= (isset($data['status']) && ($data['status'] == 3) ? "selected" : "") ?> >
                                                    Kelas 3
                                                </option>
                                                <option value="4" <?= (isset($data['status']) && ($data['status'] == 4) ? "selected" : "") ?> >
                                                    Kelas 4
                                                </option>
                                                <option value="5" <?= (isset($data['status']) && ($data['status'] == 5) ? "selected" : "") ?> >
                                                    Kelas 5
                                                </option>
                                                <option value="6" <?= (isset($data['status']) && ($data['status'] == 6) ? "selected" : "") ?> >
                                                    Kelas 6
                                                </option>
                                                <option value="7" <?= (isset($data['status']) && ($data['status'] == 7) ? "selected" : "") ?> >
                                                    Alumni
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?php echo $base_url_index ?>&r=teacher" class="btn btn-default">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
<!--    </div>-->

    <!-- /.content-wrapper -->
<!--    <footer class="main-footer">-->
<!--        <div class="pull-right hidden-xs">-->
<!--            <b>Version</b> 2.4.0-->
<!--        </div>-->
<!--        <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights-->
<!--        reserved.-->
<!--    </footer>-->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
    var baseurl = '<?= $base_url ?>';
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
                $('#preview').attr('style', "width: 200px; height: 200px");
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function validateNumber(e) {
        if ($.inArray(e.keyCode, [8, 35, 36, 37, 38, 39, 40, 46]) !== -1 || e.ctrlKey === true ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    }
</script>

<!-- Scripts Wrapper-->
<?php include 'view/template/footer.php'; ?>
<!--End-->

</body>
</html>