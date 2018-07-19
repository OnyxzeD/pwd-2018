<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $dataGuru['total'] ?></h3>

                <p>Orang</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-stalker"></i>
            </div>
            <a href="#" class="small-box-footer">Jumlah Guru Aktif</a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $dataBerita['counter'] ?></h3>

                <p>kali dibaca</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo $base_url_index ?>r=news" class="small-box-footer"><?= $dataBerita['judul'] ?></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $dataSiswa['total'] ?></h3>

                <p>Siswa</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo $base_url_index ?>r=student" class="small-box-footer">Jumlah Siswa Aktif</a>
        </div>
    </div>
</div>
<!-- /.row -->