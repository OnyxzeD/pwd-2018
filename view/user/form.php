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
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email"
                                   value="<?= (isset($data['email']) ? $data['email'] : "") ?>">
                        </div>
                        <?php if (isset($data['mode']) && $data['mode'] == 'edit') { ?>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password Lama</label>
                                <input type="password" class="form-control" name="passwordLama"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password Baru</label>
                                <input type="password" class="form-control" name="passwordBaru"
                                       placeholder="Password">
                            </div>
                        <?php } else { ?>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password"
                                       placeholder="Password">
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                   value="<?= (isset($data['username']) ? $data['username'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <div class="row" id="inputStatus">
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                          <input type="radio" name="status"
                                                 value="1" <?= (isset($data['status']) && ($data['status'] == 1) ? "checked" : "") ?> >
                                        </span>
                                        <input type="text" class="form-control" value="Aktif" readonly>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                          <input type="radio" name="status"
                                                 value="0" <?= (isset($data['status']) && ($data['status'] == 0) ? "checked" : "") ?>>
                                        </span>
                                        <input type="text" class="form-control" value="Tidak Aktif" readonly>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Foto Profil</label>
                                <input type="file" class="form-control" name="foto" onchange="readURL(this)">
                            </div>
                            <div class="timeline-body">
                                <?php if (isset($data['mode']) && $data['mode'] == 'edit') { ?>
                                    <img src="<?php echo $base_url ?>assets/img/<?= $data['foto'] ?>" alt="..."
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo $base_url_index ?>&r=user" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>