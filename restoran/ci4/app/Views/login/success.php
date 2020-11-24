<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<!-- Header -->

<!--/ End Header -->

<!-- Start Login -->
<div style="background-image: url(<?= base_url('/img/hero/wp3296089.gif') ?>); margin: 0;" class="shop login">
    <div class="container">
        <div class="row">
            <div style="color:#fff; background:rgba(255,255,255,0.55);  margin-top: 50px; margin-bottom: 440px;" class="mx-auto col-sm-5 col-12">
                <div class="m-5 login-form">
                    <h2 class="text-center mb-4">Registrasi berhasil silahkan <a style="color:goldenrod;" href="<?= base_url('login')?>">Login</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Login -->

<?= $this->endSection() ?>