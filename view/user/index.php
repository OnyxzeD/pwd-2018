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
                    <div class="btn-group">
                        <!--                        <button type="button" class="btn btn-social btn-default x_BM_GetForm_AjaxSubmit"-->
                        <!--                                x-targeturl="-->
                        <?php //echo $base_url_index ?><!--&r=user&op=create"-->
                        <!--                                x-submiturl="admin/Perizinan/submitpersetujuan/-->
                        <? //= $Data['Id']; ?><!--"-->
                        <!--                                x-title="Tambah Pengguna" x-presubmit=""-->
                        <!--                                x-onshown="" x-postsubmit="Postsubmit">-->
                        <!--                            <i class="fa fa-plus-square"></i> Tambah data-->
                        <!--                        </button>-->

                        <a href="<?php echo $base_url_index ?>&r=user&op=create" class="btn btn-social btn-default">
                            <i class="fa fa-plus-square"></i> Tambah data
                        </a>
                    </div>
                </div>
            </form>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['username']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= ($row['level'] == 1 ? "Administrator" : "Operator"); ?></td>
                                    <td><?= ($row['status'] == 1 ? "Aktif" : "Tidak Aktif"); ?></td>
                                    <td>
                                        <a class="btn btn-social btn-info"
                                           href="<?php echo $base_url_index ?>r=user&op=update&id=<?= $row['id']; ?>">
                                            <i class="fa fa-pencil"></i> Ubah
                                        </a>
                                        <a class="btn btn-social btn-danger"
                                           href="<?php echo $base_url_index ?>r=user&op=delete&id=<?= $row['id']; ?>"
                                           onclick="return confirm('Yakin Hapus data?')">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        <!--                        <tr>-->
                        <!--                            <td>1</td>-->
                        <!--                            <td>admin</td>-->
                        <!--                            <td>Administrator</td>-->
                        <!--                            <td>Aktif</td>-->
                        <!--                            <td>-->
                        <!--                                <a class="btn btn-social btn-info"-->
                        <!--                                   href="-->
                        <?php //echo $base_url_index ?><!--r=news&op=update&id=--><?php //print $nc->id; ?><!--">-->
                        <!--                                    <i class="fa fa-pencil"></i> ubah-->
                        <!--                                </a>-->
                        <!--                                <a class="btn btn-social btn-danger"-->
                        <!--                                   href="-->
                        <?php //echo $base_url_index ?><!--r=news&op=delete&id=--><?php //print $nc->id; ?><!--"-->
                        <!--                                   onclick="return confirm('Yakin Hapus data?')">-->
                        <!--                                    <i class="fa fa-trash"></i> hapus-->
                        <!--                                </a>-->
                        <!--                            </td>-->
                        <!--                        </tr>-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>