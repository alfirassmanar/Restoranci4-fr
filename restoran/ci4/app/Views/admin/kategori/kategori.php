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
            <li class="breadcrumb-item active">Kategori</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <a href=" <?= base_url('/admin/kategori/create') ?>"><button class="btn btn-md mt-3 mb-3" style="background-color:limegreen; color:cornsilk; margin-bottom: 10px; "><i class="fa-sm"></i> Tambah Data</button></a>

      <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 table-striped">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>NO</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Hapus</th>
                <th>Ubah</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($kategori as $key => $value) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value['kategori'] ?></td>
                  <td><?= $value['keterangan'] ?></td>
                  <td><a href="<?= base_url('/admin/kategori/delete/' . $value['idkategori']) ?>">
                      <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>
                  </td>
                  <td><a href="<?= base_url('/admin/kategori/find/' . $value['idkategori']) ?>">
                      <div class="btn btn-info btn-sm"><i class="fas fa-edit"></i></div>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
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