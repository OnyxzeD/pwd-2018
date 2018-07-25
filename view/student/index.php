<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Siswa</h3>
            </div>
            <!-- /.box-header -->
            <form role="form">
                <div class="box-header">
                    <div class="btn-group">
                        <a href="<?php echo $base_url_index ?>&r=student&op=create" class="btn btn-social btn-default">
                            <i class="fa fa-plus-square"></i> Tambah data
                        </a>
                    </div> &nbsp;
                    <div class="btn-group">
                        <a href="<?php echo $base_url_index ?>&r=student&op=import" class="btn btn-social btn-default">
                            <i class="fa fa-upload"></i> Import data
                        </a>
                    </div>
                </div>
            </form>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                                <tr>
                                    <td><?= $row['nis']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= ($row['jk'] == 1 ? "Laki - laki" : "Perempuan"); ?></td>
                                    <td><?= ($row['status'] < 7 ? "Kelas " . $row['status'] : "Alumni"); ?></td>
                                    <td>
                                        <a class="btn btn-social btn-info"
                                           href="<?php echo $base_url_index ?>r=student&op=update&id=<?= $row['nis']; ?>">
                                            <i class="fa fa-pencil"></i> Ubah
                                        </a>
                                        <a class="btn btn-social btn-danger"
                                           href="<?php echo $base_url_index ?>r=student&op=delete&id=<?= $row['nis']; ?>"
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