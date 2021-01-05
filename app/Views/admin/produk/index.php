<?= $this->extend('admin/layout/index'); ?>

<?= $this->section('content'); ?>

<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ol>
    </nav>
</div>

<!-- sesion pemberitahuan -->
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('delete')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('delete'); ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
            Tambah Produk
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Sampul Produk</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($produk as $p) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>
                            <img src="/images/produk/<?= $p['sampul']; ?>" alt="<?= $p['nama_produk']; ?>">
                        </td>
                        <td><?= $p['kota_asal']; ?></td>
                        <td><?= $p['nama_produk']; ?></td>
                        <td>Rp. <?= $p['harga']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/editProduk/' . $p['id']); ?>" class="btn btn-success">
                                <i class="fas fa-edit fa-cog"></i>
                            </a>
                            <a href="<?= base_url('admin/deleteProduk/' . $p['id']); ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt fa-cog"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= base_url('admin/saveProduk'); ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <!-- dari kota -->
                    <label for="kota">Oleh Oleh berasal dari</label>
                    <select class="custom-select" id="kota" name="kota" required>
                        <option selected disabled>Pilih Asal</option>
                        <?php foreach ($kota as $k) : ?>
                            <option value="<?= $k['id_kota']; ?>"><?= $k['nama_kota']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- akhir div kota -->
                </div>
                <div class="form-group">
                    <label for="nama">Nama Oleh-oleh</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">Masukkkan nama produk yang akan di simpan</small>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp" required></textarea>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="harga">Harga</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                    </div>
                </div>
                <div class="form-groups">
                    <img src="/images/produk/default.png" width="100%" class="img-full img-thumbnail img-preview" alt="">
                </div>
                <div class="form-group custom-file">
                    <p>Foto Profil. Foto Harus berukuran 400x400.</p>
                    <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="preview()">
                    <label class="custom-file-label" for="sampul">Pilih Gambar ....</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Kota</button>
                </div>
        </form>
    </div>
</div>
<!-- javascript preview -->
<script>
    function preview() {
        const sampul = document.querySelector('#sampul');
        const sampulLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        sampulLabel.textContent = sampul.files[0].name;

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>


<?= $this->endSection(); ?>