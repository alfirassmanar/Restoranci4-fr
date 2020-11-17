<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<!-- Header -->
<header class="header shop">
	<!-- Topbar -->

	<!-- End Topbar -->
	
</header>
<!--/ End Header -->

<!-- Start Login -->
<div style="background-image: url(<?= base_url('img/hero/wp3296089.gif' ) ?>); margin: 0;" class="shop login">
	<div class="container">
		<div class="row">
			<div style="color:#000; background:rgba(255,255,255,0.5); margin-top: 50px; margin-bottom: 102px;" class="mx-auto col-sm-8 col-md-6 col-lg-5 col-12">
				<div class="m-5 login-form">
					<h2 class="text-center mb-4">Login</h2>
					<!-- Form -->
					<?= $this->include('login/form_login') ?>
					<!--/ End Form -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Login -->
<?= $this->endSection() ?>