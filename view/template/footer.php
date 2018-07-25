<script>
    var startDate = "2000-01-01";
    var maxDate = "3000-01-01";
</script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery 3 -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/dist/js/demo.js"></script>
<!-- Custom Js config -->
<script src="<?php echo $base_url ?>assets/js/app.js"></script>
<!--Wysiwyg-->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Select2 -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $base_url ?>assets/AdminLTE-2.4.3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();

        $('.wysiwyg').wysihtml5();

        $('#datepicker').datepicker({
            autoclose: true,
            format: "dd MM yyyy"
        });

        $('#dataTable').DataTable();
    })
</script>