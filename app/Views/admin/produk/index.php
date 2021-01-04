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
            Tambah Transaksi
        </button>
    </div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= base_url('admin/saveKota'); ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_kota">Nama Kota</label>
                    <input type="text" class="form-control" id="nama_kota" name="nama_kota" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">Masukkan nama kota yang terdapat oleh oleh yang akan di sediakan</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Kota</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>