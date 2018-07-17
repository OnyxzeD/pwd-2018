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
                <form class="" action="<?php echo $base_url_index ?>&r=student&op=import" method="post"
                      name="upload_excel" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="file">
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="import" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo $base_url_index ?>&r=teacher" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>