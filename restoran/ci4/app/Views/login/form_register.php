<div class="col">
	<?php
	if (!empty(session()->getFlashdata('info'))) {
		echo '<div class="alert alert-danger" role="alert">';
		$error = session()->getFlashdata('info');
		foreach ($error as $key => $value) {
			echo $key . " => " . $value;
			echo "<br>";
		}
		echo '</div>';
	}
	?>
</div>
<form class="form" method="post" action="<?= base_url('/registrasi/insert') ?>">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;">Nama</label>
				<input type="text" name="pelanggan" placeholder="Type your name" class="form-control" required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;">Alamat</label>
				<input type="text" name="alamat" placeholder="Your adress" class="form-control"  required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;">Nomor Telp</label>
				<input type="text" name="telp" placeholder="input phone number" class="form-control"  required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;">Email</label>
				<input type="email" name="email" placeholder="Input email here" class="form-control"  required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;">Password</label>
				<input type="password" name="password" placeholder="Password" class="form-control"  required="required">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;">Ulang Password</label>
				<input type="password" name="konfirmasi" placeholder="Repeat Password" class="form-control"  required="required">
			</div>
		</div>
		<div class="col-6 my-4 mx-auto">
			<input style="background : #ffc107" class="btn btn-warning btn-block" type="submit" name="simpan" value="Register">
		</div>
	</div>
</form>
<?= $this->renderSection('form_register') ?>

<a href="<?= base_url('login') ?>">
	<strong><p style="color : black; font-size: 15px"> Sudah Daftar?</strong> <span style="color: black;" class="btn btn-sm btn-warning"><strong>Log In</strong></span></p>
</a>