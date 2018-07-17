<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <form role="form">
                <div class="box-header">
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>username</th>
                        <th>level</th>
                        <th>status</th>
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
                            <a class="btn btn-danger"
                               href="<?php echo $base_url_index ?>r=news&op=delete&id=<?php print $nc->id; ?>"
                               onclick="return confirm('Are you sure?')">delete</a>
                            <a class="btn btn-warning"
                               href="<?php echo $base_url_index ?>r=news&op=update&id=<?php print $nc->id; ?>">update</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>