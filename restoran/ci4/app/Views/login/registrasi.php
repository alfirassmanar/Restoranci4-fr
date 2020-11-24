<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<!-- Header -->
<header class="header shop">
	<!-- Topbar -->

	<!-- End Topbar -->
	
</header>
<!--/ End Header -->

<!-- Start Login -->
<div style="background-image: url(<?= base_url('/img/hero/wp3296089.gif') ?>); margin: 0;" class="shop login">
	<div class="container">
		<div class="row">
			<div style="color:#fff; background:rgba(255,255,255,0.8); margin-top: 50px; margin-bottom: 133px;" class="mx-auto col-sm-8 col-md-7 col-lg-6 col-12">
				<div class="mx-2 mt-5 login-form">
					<h2 class="text-center mb-4" style="color: black;">Register</h2>
					<!-- Form -->
					<?= $this->include('login/form_register') ?>
					<!--/ End Form -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Login -->

<?= $this->endSection() ?>