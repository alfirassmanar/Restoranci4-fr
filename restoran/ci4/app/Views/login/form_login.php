<form class="form" method="post" action="<?= base_url('/login/index') ?>">
	<?php
	if (!empty($info)) {
		echo '<div class="alert alert-danger" role="alert">';
		echo $info;
		echo '</div>';
	}
	?>
	<div class="row">
		<div class="col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;" for="exampleInputEmail1">Email : </label>
				<input type="email" name="email" placeholder="Masukan Email Anda.." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label style="color : #000; font-weight : bold;" for="exampleInputEmail1">Password : </label>
				<input type="password" name="password" placeholder="Masukan Password Anda.." class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
		</div>
		<div class="col-6 my-2 mx-auto">
			<input style="background : #ffc167; text-align : center;" class="btn btn-info btn-block" type="submit" name="login" value="Login">
		</div>
	</div>
</form>
<?= $this->renderSection('form_login') ?>

	<div class="card-body">
		<div class="col" style="margin-right: 140;">
			<a href="<?= base_url('registrasi') ?>">
				<p style="color: black; font-weight : bold;" class="btn btn-sm btn-warning">Daftar?</p>
			</a>
			<a href="<?= base_url('forgot') ?>">
				<!-- <p style="color: black; font-weight : bold;" class="btn btn-sm btn-danger">Lupa Password?</p> -->
			</a>
		</div>
  </div>