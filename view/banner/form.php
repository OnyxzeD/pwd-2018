<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>admin</td>
                            <td>Administrator</td>
                            <td>Aktif</td>
                            <td>
                                <a class="btn btn-social btn-info"
                                   href="<?php echo $base_url_index ?>r=news&op=update&id=<?php print $nc->id; ?>">
                                    <i class="fa fa-pencil"></i> ubah
                                </a>
                                <a class="btn btn-social btn-danger"
                                   href="<?php echo $base_url_index ?>r=news&op=delete&id=<?php print $nc->id; ?>"
                                   onclick="return confirm('Yakin Hapus data?')">
                                    <i class="fa fa-trash"></i> hapus
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>