<?= $this->extend('template/header') ?>

<?= $this->section('header') ?>

<body class="js">

	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<!-- End Topbar -->
		<?= $this->include('template/middle_inner') ?>
	</header>
	<!--/ End Header -->

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<?php if ($cart->totalItems() === 0) : ?>
				<div class="alert alert-warning" style="margin-top: 50px;" role="alert">
					Keranjang Anda Masih Kosong Silahkan Kembali ke -  <a href="<?= base_url('homepage') ?>" class="alert-link">Beranda</a>
				</div>
			<?php else : ?>
				<div class="row">
					<div class="col-12">
						<!-- Shopping Summary -->

						<?= $this->include('cart/summary') ?>

						<!--/ End Shopping Summary -->
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- Total Amount -->
						<div class="total-amount">
							<div class="row">
								<div class="col-lg-8 col-md-5 col-12">
								</div>
								<div class="col-lg-4 col-md-7 col-12">
									<div class="right">
										<ul>
										<table class="table">
										<thead>
											<tr>
											<th scope="col" style="color: white;">No.</th>
											<th scope="col" style="color: white;">Subtotal</th>
											<th scope="col" style="color: white;">Diskon</th>
											<th scope="col" style="color: white;">Tagihan</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											<th scope="row" style="color: white;">1</th>
											<td style="color: white;">Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></td>
											<td style="color: white;">0 %</td>
											<td style="color: white;">Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></td>
											</tr>
										</tbody>
										</table>
										</ul>
										<div class="button" style="margin-left: 55px;">
											<a href="<?= base_url('/checkout/index') ?>" style="color: white;" class="btn"><div class="btn btn-sm btn-primary"><img src="upload/icon/checkout.svg" style="width: 20px;"> Checkout</div></a>
											<a href="<?= base_url('homepage') ?>" class="btn" style="color: white;"><div class="btn btn-sm btn-warning" style="color: white;"><img src="upload/icon/house.svg" style="width: 20px;"> Lanjut Belanja</div></a></a>
											<a href="<?= base_url('/cart/removeall/') ?>" class="btn" style="color: white;"><div class="btn btn-sm btn-danger"><img src="upload/icon/sad.svg" style="width: 20px;"> Hapus Semua Keranjang</div></a></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/ End Total Amount -->
					</div>
				<?php endif ?>
				</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	    <?= $this->include('template/shop_service') ?>
	<!-- End Shop Newsletter -->
	<?= $this->endSection() ?>