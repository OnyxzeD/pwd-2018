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
                <form role="form" action="<?= $formAction ?>" name="registration" method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= (isset($data['id']) ? $data['id'] : "") ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Caption</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."
                                      name="caption"><?= (isset($data['caption']) ? $data['caption'] : "") ?></textarea>
                        </div>
                        <div class="timeline-item">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto</label>
                                <input type="file" class="form-control" name="path" onchange="readURL(this)">
                            </div>
                            <div class="timeline-body">
                                <?php if (isset($data['mode']) && $data['mode'] == 'edit') { ?>
                                    <img src="<?php echo $base_url ?>assets/img/<?= $data['path'] ?>" alt="..."
                                         class="margin" id="preview"
                                         style="width: 200px; 200px;">
                                <?php } else { ?>
                                    <img src="http://via.placeholder.com/200x200" alt="..." class="margin" id="preview"
                                         style="">
                                <?php } ?>
                            </div>
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