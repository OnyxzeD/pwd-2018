<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Berita</h3>
            </div>
            <!-- /.box-header -->
            <form role="form">
                <div class="box-header">
                    <div class="btn-group">
                        <a href="<?php echo $base_url_index ?>&r=news&op=create" class="btn btn-social btn-default">
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
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Dibaca</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if (mysqli_num_rows($data) > 0) {
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                                <tr>
                                    <td><?= $row['judul']; ?></td>
                                    <td><?= $row['username'] ?></td>
                                    <td><?= convertDate($row['created_at'], 'indo') ?></td>
                                    <td><?= $row['counter'] ?> kali</td>
                                    <td>
                                        <a class="btn btn-social btn-info"
                                           href="<?php echo $base_url_index ?>r=news&op=update&id=<?= $row['id']; ?>">
                                            <i class="fa fa-pencil"></i> Ubah
                                        </a>
                                        <a class="btn btn-social btn-danger"
                                           href="<?php echo $base_url_index ?>r=news&op=delete&id=<?= $row['id']; ?>"
                                           onclick="return confirm('Yakin Hapus data?')">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                        <a class="btn btn-social btn-info"
                                           href="<?php echo $base_url_index ?>r=news&op=read&id=<?= $row['id']; ?>">
                                            <i class="fa fa-newspaper-o"></i> Baca
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