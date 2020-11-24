<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
   
</header>
<!--/ End Header -->

<!-- Start Login -->
<div style="background-image: url(<?= base_url('/img/hero/wp3296089.gif') ?>); margin: 0;" class="shop login">
    <div class="container">
        <div class="row">
            <div style="color:#fff; background:rgba(255,255,255,0.8); margin-top: 170px; margin-bottom: 309px;" class="mx-auto col-sm-7 col-md-6 col-lg-5 col-12">
                <div class="m-5 login-form">
                    <h2 class="text-center mb-4" style="color: black;">Lupa Password</h2>
                    <!-- Form -->
                    <form class="form" method="post" action="<?= base_url('/forgot/emailreset') ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000; font-weight: bold;">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Ketik email disini" required="required">
                                </div>
                            </div>
                            <div class="col-6 my-2 mx-auto">
                                <input style="background : #ffc107" class="btn btn-warning btn-block" type="submit" name="kirim" value="Kirim">
                            </div>
                        </div>

                        <div class="card-body">
                        <div class="col">
                            <a href="<?= base_url('login') ?>">
                                <p style="color: black; font-weight : bold;" class="btn btn-sm btn-warning">Back to Login?</p>
                            </a>
                        </div>
                </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Login -->


<?= $this->endSection() ?>