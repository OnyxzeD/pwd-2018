<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Banner</h3>
            </div>
            <!-- /.box-header -->
            <form role="form">
                <div class="box-header">
                    <div class="btn-group">
                        <button type="button" class="btn btn-social btn-default">
                            <i class="fa fa-plus-square"></i> Tambah data
                        </button>
                    </div>
                </div>
            </form>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($news as $nc): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $base_url_index ?>r=news&op=show&id=<?php print $nc->id; ?>"><?php print htmlentities($nc->id); ?></a>
                                </td>
                                <td><?php print htmlentities($nc->author_name); ?></td>
                                <td><?php print htmlentities($nc->title); ?></td>
                                <td><?php print htmlentities($nc->category_name); ?></td>
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
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>