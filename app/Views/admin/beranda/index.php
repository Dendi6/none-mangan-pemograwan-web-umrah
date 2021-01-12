<?= $this->extend('admin/layout/index'); ?>

<?= $this->section('content'); ?>

<style>
    .bg-primary {
        color: white;
    }

    .bg-dendi {
        background: #63a541;
        color: white;
    }

    .bg-info {
        color: white;
    }
</style>

<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-sm-12 col-md-4 mb-3">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p>Jumlah Pengguna ( User )</p>
                <p><?= $user; ?></p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-4 mb-3">
        <div class="card bg-dendi">
            <div class="card-body text-center">
                <p>Jumlah Produk</p>
                <p><?= $produk; ?></p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-4 mb-3">
        <div class="card bg-info">
            <div class="card-body text-center">
                <p>Jumlah Transaksi</p>
                <p><?= $transaksi; ?></p>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>