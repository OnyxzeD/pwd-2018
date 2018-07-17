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
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIS</label>
                            <input type="text" class="form-control" placeholder="NIS" name="nis"
                                   value="<?= (isset($data['nis']) ? $data['nis'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                                   value="<?= (isset($data['nama']) ? $data['nama'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Jenis Kelamin</label>
                            <div class="row" id="inputStatus">
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                          <input type="radio" name="jk"
                                                 value="1" <?= (isset($data['jk']) && ($data['jk'] == 1) ? "checked" : "") ?> >
                                        </span>
                                        <input type="text" class="form-control" value="Laki - laki" readonly>
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="col-md-2">
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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <div class="input-group date">
                                <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir"
                                       placeholder="Tanggal Lahir"
                                       value="<?= (isset($data['tgl_lahir']) ? $data['tgl_lahir'] : "") ?>">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                                   value="<?= (isset($data['alamat']) ? $data['alamat'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Orang Tua</label>
                            <input type="text" class="form-control" name="nama_ortu" placeholder="Nama Orang Tua"
                                   value="<?= (isset($data['nama_ortu']) ? $data['nama_ortu'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telpon Orang Tua</label>
                            <input type="text" class="form-control" name="telp_ortu" placeholder="Telpon Orang Tua"
                                   value="<?= (isset($data['telp_ortu']) ? $data['telp_ortu'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
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