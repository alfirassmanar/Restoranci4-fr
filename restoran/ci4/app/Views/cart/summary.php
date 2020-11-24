<table class="table shopping-summery">
	<thead>
		<tr class="main-hading">
			<th style="color: white;">GAMBAR</th>
			<th style="color: white;">NAMA PRODUK</th>
			<th class="text-center" style="color: white;">HARGA PRODUK</th>
			<th class="text-center" style="color: white;">JUMLAH</th>
			<th class="text-center" style="color: white;">TOTAL</th>
			<th class="text-center" style="color: white;">HAPUS</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($cart->contents() as $item) : ?>
			<tr>
				<td class="image" data-title="No"><img style="width: 200px;" src="<?= base_url('/upload/' . $item['gambar'] . '') ?>" alt="#"></td>
				<td class="product-des" data-title="Description">
					<p class="product-name"><a href="<?= base_url('productdetail/index/' . $item['id']) ?>"><?= $item['name']; ?></a></p>
				</td>
				<td class="price" data-title="Price"><span style="margin-left: 20px; color: white;">Rp. <?php echo number_format($item['price'], 0, 0, '.'); ?></span></td>
				<td class="qty" data-title="Qty">
					<div class="row justify-content-md-center">
						<?php echo anchor('/cart/kurang/' . $item['qty'] . '/' . $item['rowid'], '<span style="padding: 12px 10px; width: 50px;" class="btn btn-black"> <img src="upload/icon/minus.svg" style="width: 24px;"> </span>') ?>
						<input style="width: 40px; height: 30px; padding: 0px; margin: 0px 10px; margin-top: 10px;" type="number" name="quantity[]" class="input-number" data-min="1" data-max="100" value="<?= $item['qty']; ?>">
						<?php echo anchor('/cart/tambah/' . $item['qty'] . '/' . $item['rowid'], '<span style="padding: 12px 10px; width: 50px;" class="btn btn-black"> <img src="upload/icon/plus.svg" style="width: 24px;"> </span>') ?>
					</div>
				</td>
				<td class="total-amount" data-title="Total" style="color:white;"><span>Rp. <?php echo number_format($item['qty'] * $item['price'], 0, 0, '.'); ?></span></td>
				<td class="action" data-title="Remove"><a href="<?= base_url('/cart/remove/' . $item['rowid']) ?>"><button class="btn btn-sm btn-danger" style="margin-left: 30px;"> <img src="<?= base_url('upload/icon/trash.svg') ?>" style="width: 24px;" alt=""> Hapus</button></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?= $this->renderSection('summary') ?>