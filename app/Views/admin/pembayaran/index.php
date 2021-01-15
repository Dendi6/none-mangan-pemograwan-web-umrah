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
<?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Bukti</th>
                    <th scope="col">Key</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <p>Daftar transaksi yang di lakukan user.</p>
                <?php foreach ($pembayaran as $p) : ?>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="<?= base_url() ?>/images/pembayaran/<?= $p['bukti'] ?>" alt="" srcset="">
                        </td>
                        <td><?= $p['kode']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['nama_kota']; ?> , <?= $p['alamat']; ?></td>
                        <td>Rp. <?= $p['totalHarga']; ?></td>
                        <td>
                            <span class="badge badge-<?= ($p['status'] == 'dikirim') ? 'success' : 'warning' ?>"><?= $p['status']; ?></span>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/sendEmail/' . $p['id'] . '/' . $p['kode']); ?>" class="btn btn-<?= ($p['status'] == 'dikirim') ? 'secondary' : 'success' ?> <?= ($p['status'] == 'dikirim') ? 'disabled' : '' ?>">
                                Konfirmasi
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>