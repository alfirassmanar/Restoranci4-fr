<div class="col-lg-8 col-5">
	<div class="order-details">
		<!-- Order Widget -->
		<div class="single-widget">
			<h2>CART TOTALS</h2>
		</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col" style="color: white;">No.</th>
      <th scope="col" style="color: white;">Sub Total</th>
      <th scope="col" style="color: white;">Diskon</th>
      <th scope="col" style="color: white;">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th style="color: white;" scope="row">1</th>
      <td style="color: white;">Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></td>
      <td style="color: white;">0 %</td>
      <td style="color: white;">Rp. <?php echo number_format($cart->total(), 0, 0, '.'); ?></td>
    </tr>
  </tbody>
</table>

		<!--/ End Order Widget -->
		<!-- Order Widget -->
		<!-- <div class="single-widget">
			<h2>Payments</h2>
			<div class="content">
				<div class="checkbox">
					<label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label>
					<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Cash On Delivery</label>
					<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox"> PayPal</label>
				</div>
			</div>
		</div> -->
		<!--/ End Order Widget -->
		<!-- Payment Method Widget -->
		<!--/ End Payment Method Widget -->
		<!-- Button Widget -->
		<div class="single-widget get-button">
			<div class="content">
				<div class="button">
					<form action="<?= base_url('/checkout/proceed') ?>" method="post">
						<button class="btn btn-sm btn-warning" style="color: black;" type="submit" class="btn">Checkout Barang</button>
					</form>
				</div>
			</div>
		</div>
		<!--/ End Button Widget -->
	</div>
</div>
<?= $this->renderSection('total') ?>