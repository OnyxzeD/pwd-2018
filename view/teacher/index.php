<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Guru</h3>
            </div>
            <!-- /.box-header -->
            <form role="form">
                <div class="box-header">
                    <div class="btn-group">
                        <a href="<?php echo $base_url_index ?>&r=teacher&op=create" class="btn btn-social btn-default">
                            <i class="fa fa-plus-square"></i> Tambah data
                        </a>
                    </div>
                </div>
            </form>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                                <tr>
                                    <td><?= $row['nip']; ?></td>
                                    <td><?= $row['nama'] . ", " . $row['gelar']; ?></td>
                                    <td><?= ($row['jk'] == 1 ? "Laki - laki" : "Perempuan"); ?></td>
                                    <td><?= ($row['level'] == 2 ? "Guru" : "Kepala Sekolah"); ?></td>
                                    <td>
                                        <a class="btn btn-social btn-info"
                                           href="<?php echo $base_url_index ?>r=teacher&op=update&id=<?= $row['nip']; ?>">
                                            <i class="fa fa-pencil"></i> Ubah
                                        </a>
                                        <a class="btn btn-social btn-danger"
                                           href="<?php echo $base_url_index ?>r=teacher&op=delete&id=<?= $row['nip']; ?>"
                                           onclick="return confirm('Yakin Hapus data?')">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>