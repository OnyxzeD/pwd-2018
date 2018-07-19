<section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="<?php echo $base_url ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=front">
                <i class="fa fa-backward"></i> <span>Halaman User</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=news">
                <i class="fa fa-newspaper-o"></i> <span>Berita</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=student">
                <i class="fa fa-user"></i> <span>Siswa</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=teacher">
                <i class="fa fa-users"></i> <span>Guru</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=gallery">
                <i class="fa fa-picture-o"></i> <span>Galeri</span>
            </a>
        </li>
        <?php if ($_SESSION['account']['level'] == 1) { ?>
            <li class="header">Pengaturan</li>
            <li>
                <a href="<?php echo $base_url_index ?>&r=user">
                    <i class="fa fa-user"></i> <span>Pengguna</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</section>
<!-- /.sidebar -->