<section class="sidebar">
    <!-- search form -->
<!--    <form action="#" method="get" class="sidebar-form">-->
<!--        <div class="input-group">-->
<!--            <input type="text" name="q" class="form-control" placeholder="Search...">-->
<!--            <span class="input-group-btn">-->
<!--                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--        </div>-->
<!--    </form>-->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="<?php echo $base_url ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=banner">
                <i class="fa fa-newspaper-o"></i> <span>Banner</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=news">
                <i class="fa fa-newspaper-o"></i> <span>Berita</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=news">
                <i class="fa fa-pencil-square-o"></i> <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=news">
                <i class="fa fa-picture-o"></i> <span>Galeri</span>
            </a>
        </li>
        <li class="header">Pengaturan</li>
        <li>
            <a href="<?php echo $base_url_index ?>&r=user">
                <i class="fa fa-user"></i> <span>Pengguna</span>
            </a>
        </li>
    </ul>
</section>
<!-- /.sidebar -->