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
                        <button type="submit" name="import" class="btn btn-primary">Upload</button>
                        <a href="<?php echo $base_url_index ?>&r=teacher" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>

<?php if (isset($_POST['import'])) { ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar data</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="<?php echo $base_url_index ?>r=student&op=save-import" name="registration"
                          method="post">
                        <?php
                        $no = 1;
                        foreach ($data as $dt) { ?>
                            <div class="box-body">
                                <input type="hidden" name="id" value="<?= $dt[0] ?>">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" placeholder="NIS" name="nis<?= $no ?>"
                                               value="<?= $dt[0] ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="nama<?= $no ?>"
                                               placeholder="Nama Lengkap"
                                               value="<?= $dt[1] ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="row" id="inputStatus">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <input type="radio" name="jk<?= $no ?>"
                                                             value="1" <?= (($dt[2] == 1) ? "checked" : "") ?> >
                                                    </span>
                                                    <input type="text" class="form-control" value="L" readonly>
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                      <input type="radio" name="jk<?= $no ?>"
                                                             value="0" <?= (($dt[2] == 0) ? "checked" : "") ?>>
                                                    </span>
                                                    <input type="text" class="form-control" value="P" readonly>
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group date">
                                            <input type="text" class="form-control pull-right" id="datepicker"
                                                   name="tgl_lahir<?= $no ?>" placeholder="Tanggal Lahir"
                                                   value="<?= $dt[3] ?>">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="alamat<?= $no ?>"
                                               placeholder="Alamat"
                                               value="<?= $dt[4] ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="nama_ortu<?= $no ?>"
                                               placeholder="Nama Orang Tua"
                                               value="<?= $dt[5] ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="telp_ortu<?= $no ?>"
                                               placeholder="Telpon Orang Tua"
                                               value="<?= $dt[6] ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <select class="form-control" name="status<?= $no ?>">
                                            <option value="1" <?= (($dt[7] == 1) ? "selected" : "") ?> >
                                                Kelas 1
                                            </option>
                                            <option value="2" <?= (($dt[7] == 2) ? "selected" : "") ?> >
                                                Kelas 2
                                            </option>
                                            <option value="3" <?= (($dt[7] == 3) ? "selected" : "") ?> >
                                                Kelas 3
                                            </option>
                                            <option value="4" <?= (($dt[7] == 4) ? "selected" : "") ?> >
                                                Kelas 4
                                            </option>
                                            <option value="5" <?= (($dt[7] == 5) ? "selected" : "") ?> >
                                                Kelas 5
                                            </option>
                                            <option value="6" <?= (($dt[7] == 6) ? "selected" : "") ?> >
                                                Kelas 6
                                            </option>
                                            <option value="7" <?= (($dt[7] == 7) ? "selected" : "") ?> >
                                                Alumni
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $no++;
                        } ?>
                        <input type="hidden" name="total" value="<?= $no ?>">
                        <input type="hidden" name="mencoba" value="<?= count($data) ?>">
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
<?php } ?>