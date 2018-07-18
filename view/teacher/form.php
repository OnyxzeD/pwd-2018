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
                    <input type="hidden" name="id" value="<?= (isset($data['nip']) ? $data['nip'] : "") ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIP</label>
                            <input type="text" class="form-control" placeholder="NIP" name="nip"
                                   value="<?= (isset($data['nip']) ? $data['nip'] : "") ?>">
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
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                                   value="<?= (isset($data['alamat']) ? $data['alamat'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gelar</label>
                            <input type="text" class="form-control" name="gelar" placeholder="Gelar"
                                   value="<?= (isset($data['gelar']) ? $data['gelar'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Masa Bakti</label>
                            <input type="text" class="form-control" name="masa_bakti" placeholder="Masa Bakti"
                                   onkeydown="validateNumber(event)"
                                   value="<?= (isset($data['masa_bakti']) ? $data['masa_bakti'] : "") ?>">
                        </div>
                        <div class="form-group">
                            <label>Quotes</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."
                                      name="quotes"><?= (isset($data['quotes']) ? $data['quotes'] : "") ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control" name="jabatan">
                                <option value="2" <?= (isset($data['level']) && ($data['level'] == 2) ? "selected" : "") ?> >
                                    Guru
                                </option>
                                <option value="1" <?= (isset($data['level']) && ($data['level'] == 1) ? "selected" : "") ?> >
                                    Kepala Sekolah
                                </option>
                            </select>
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
                        <button type="submit" name="submitTeacher" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo $base_url_index ?>&r=teacher" class="btn btn-default">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
                $('#preview').attr('style', "width: 200px; height: 200px");
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function validateNumber(e) {
        if ($.inArray(e.keyCode, [8, 35, 36, 37, 38, 39, 40, 46]) !== -1 || e.ctrlKey === true ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    }
</script>