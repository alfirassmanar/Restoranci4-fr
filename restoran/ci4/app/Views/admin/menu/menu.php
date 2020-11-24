<?= $this->extend('admin/template/header') ?>

<?= $this->section('admin_header') ?>

<!-- Navbar -->
<?= $this->include('admin/template/navbar') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?= $this->include('admin/template/sidebar') ?>
<!-- /.Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/') ?>">Home</a></li>
            <li class="breadcrumb-item active">Menu</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <?php
  if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
  } else {
    $no = 1;
  }

  ?>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <a href=" <?= base_url('/admin/menu/create') ?>"><button class="btn btn-md" style="background-color:limegreen; color:cornsilk; margin-bottom: 10px;"><i class=""></i> Tambah Menu</button></a>
        </div>
        <div class="col-4">
          <form action="<?= base_url('/admin/menu/read') ?>" method="get">
            <?= view_cell('App\Controllers\Admin\Menu::option') ?>
          </form>
        </div>
      </div>
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 table-striped">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>NO</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Hapus</th>
                <th>Ubah</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($menu as $key => $value) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value['menu'] ?></td>
                  <td><?= $value['harga'] ?></td>
                  <td style="width: 275px;"><img style="width: 200px; height: 130px;" src="<?= base_url() . '/upload/' . $value['gambar'] ?>" class="card-img"></td>
                  <td><a href="<?= base_url('/admin/menu/delete/' . $value['idmenu']) ?>">
                      <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>
                  </td>
                  <td><a href="<?= base_url('/admin/menu/find/' . $value['idmenu']) ?>">
                      <div class="btn btn-info btn-sm"><i class="fas fa-edit"></i></div>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <div class="row justify-content-center">
            <?= $pager->links('page', 'bootstrap') ?>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?= $this->include('admin/template/footer') ?>
<?= $this->endSection() ?>