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
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=front&op=profil"">
            <div class="menu-div">
                <h1 class="menu-text">Profil</h1>
            </div class="menu-div">
            </a>
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=front&op=galeri"">
            <div class="menu-div">
                <h1 class="menu-text">Galeri</h1>
            </div>
            </a>
            <a class="col-md-2" href="<?php echo $base_url_index ?>r=login&op=login"">
            <div class="menu-div">
                <h1 class="menu-text">
                    <?= (isset($_SESSION['account']) ? $_SESSION['account']['username'] : "Login") ?>
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
            <div class="modal-header">
                <h1 class="modal-title">Login form</h1>
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
            </div>
            <div class="card-body">
                <form action="https://formspree.io/YOUREMAILHERE">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email"></div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password"></div>
                    <button type="submit" class="btn btn-secondary" data-toggle="modal">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>