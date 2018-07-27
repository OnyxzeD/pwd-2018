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
                <form role="form" action="<?php echo $base_url_index ?>r=gallery&op=upload&album=<?= $data['id'] ?>" name="registration" method="post"
                      enctype="multipart/form-data" class="dropzone" id="dropzone">

                </form>
                <form role="form" action="<?= $formAction ?>" name="registration" method="post">
                    <input type="hidden" id="album_id" name="id" value="<?= (isset($data['id']) ? $data['id'] : "") ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama Album</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."
                                      name="caption"><?= (isset($data['caption']) ? $data['caption'] : "") ?></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submitTeacher" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo $base_url_index ?>&r=teacher" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>