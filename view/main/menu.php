<div class="bg-sd">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid d-block" src="<?php echo $base_url ?>view/main/img/sd.png"></div>
            <div class="col-md-9">
                <h1 class="display-1">SDN 2 KALIREJO KALIPARE</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
        </div>
        <div class="row text-center menu1">
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=front">
                <div class="menu-div">
                    <h1 class="menu-text">Home</h1>
                </div class="menu-div">
            </a>
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=front&op=berita">
                <div class="menu-div">
                    <h1 class="menu-text">Berita</h1>
                </div class="menu-div">
            </a>
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=front&op=profil">
                <div class="menu-div">
                    <h1 class="menu-text">Profil</h1>
                </div class="menu-div">
            </a>
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=front&op=galeri">
                <div class="menu-div">
                    <h1 class="menu-text">Galeri</h1>
                </div>
            </a>
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=login&op=login">
                <div class="menu-div">
                    <h1 class="menu-text">
                        <?php
                        if (isset($_SESSION['account'])) {
                            $name = explode(" ", $_SESSION['account']['username']);
                        }
                        ?>
                        <?= (isset($_SESSION['account']) ? $name[0] : "Login") ?>
                    </h1>
                </div>
            </a>
            <div class="col-md-12"></div>
        </div>
    </div>
</div>
<div class="modal" id="login-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
        </div>
    </div>
</div>